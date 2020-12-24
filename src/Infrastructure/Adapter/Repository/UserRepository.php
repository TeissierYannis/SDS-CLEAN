<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class UserRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class UserRepository extends ServiceEntityRepository implements UserGateway
{
    /**
     * UserRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineUser::class);
    }

    /**
     * @inheritDoc
     */
    public function isEmailUnique(?string $email): bool
    {
        return $this->count(["email" => $email]) === 0;
    }

    /**
     * @inheritDoc
     */
    public function isPseudoUnique(?string $pseudo): bool
    {
        return $this->count(["pseudo" => $pseudo]) === 0;
    }

    /**
     * @inheritDoc
     */
    public function register(User $user): void
    {
        $doctrineUser = new DoctrineUser();
        $doctrineUser->setId($user->getId());
        $doctrineUser->setEmail($user->getEmail());
        $doctrineUser->setPassword($user->getPassword());
        $doctrineUser->setPseudo($user->getPseudo());

        $this->_em->persist($doctrineUser);
        $this->_em->flush();
    }
}
