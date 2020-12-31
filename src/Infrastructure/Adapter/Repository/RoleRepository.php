<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\ORMException;
use TYannis\SDS\Domain\Security\Entity\Role;
use TYannis\SDS\Domain\Security\Gateway\RoleGateway;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class RoleRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class RoleRepository extends ServiceEntityRepository implements RoleGateway
{
    /**
     * ArticleRepository constructor.
     * @param  ManagerRegistry  $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineRole::class);
    }

    /**
     * @inheritDoc
     */
    public function getRoles(): array
    {
        return ['ROLE_USER', 'ROLE_ADMIN', 'ROLE_TEST', 'ROLE_USED'];
    }

    /**
     * @param  DoctrineRole  $doctrineRole
     * @param  Role  $role
     */
    public static function hydrateRole(DoctrineRole $doctrineRole, Role $role)
    {
        $doctrineRole->setId($role->getId());
        $doctrineRole->setName($role->getName());
    }

    /**
     * @param  Role  $role
     * @throws ORMException
     */
    public function create(Role $role): void
    {
        $doctrineRole = new DoctrineRole();
        self::hydrateRole($doctrineRole, $role);

        $this->_em->persist($doctrineRole);
        $this->_em->flush();
    }

    /**
     * @param  string  $name
     * @return bool
     */
    public function isRoleUnique(string $name): bool
    {
        return !in_array($name, ["ROLE_USED"]);
    }
}
