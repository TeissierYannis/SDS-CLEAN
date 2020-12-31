<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
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
        $doctrineUser->setIsNewsletterRegistered($user->getIsNewsletterRegistered());

        $this->_em->persist($doctrineUser);
        $this->_em->flush();
    }

    public function getUserByEmail(string $email): ?User
    {
        /** @var DoctrineUser $doctrineUser */
        $doctrineUser = $this->findOneBy(['email' => $email]);

        if ($doctrineUser === null) {
            return null;
        }

        return new User(
            $doctrineUser->getId(),
            $doctrineUser->getEmail(),
            $doctrineUser->getPseudo(),
            $doctrineUser->getPassword(),
            $doctrineUser->getIsNewsletterRegistered(),
            $doctrineUser->getPasswordResetToken(),
            $doctrineUser->getPasswordResetRequestedAt()
        );
    }

    /**
     * @param User $user
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function update(User $user): void
    {
        /** @var DoctrineUser $doctrineUser */
        $doctrineUser = $this->find($user->getId());

        if ($doctrineUser === null) {
            return;
        }

        $this->hydrateUser($doctrineUser, $user);

        $this->_em->flush();
    }

    /**
     * @param  DoctrineUser  $doctrineUser
     * @param  User  $user
     */
    private function hydrateUser(DoctrineUser $doctrineUser, User $user): void
    {
        $doctrineUser->setEmail($user->getEmail());
        $doctrineUser->setPassword($user->getPassword());
        $doctrineUser->setPseudo($user->getPseudo());
        $doctrineUser->setIsNewsletterRegistered($user->getIsNewsletterRegistered());
        $doctrineUser->setPasswordResetToken($user->getPasswordResetToken());
        $doctrineUser->setPasswordResetRequestedAt($user->getPasswordResetRequestedAt());
    }

    /**
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @return User[]
     */
    public function getUsers(int $page, int $limit, string $field, string $order): array
    {
        $fields = [
            'email' => 'q.email',
            'pseudo' => 'q.pseudo'
        ];

        $users = $this->createQueryBuilder('q')
            ->orderBy($fields[$field], $order)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return array_map(
            fn(DoctrineUser $user) => new User(
                $user->getId(),
                $user->getEmail(),
                $user->getPseudo(),
                $user->getPassword(),
                $user->getIsNewsletterRegistered(),
                $user->getPasswordResetToken(),
                $user->getPasswordResetRequestedAt()
            ),
            $users
        );
    }

    /**
     * @return int
     */
    public function countUsers(): int
    {
        return $this->count([]);
    }
}
