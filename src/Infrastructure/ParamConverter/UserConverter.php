<?php

namespace App\Infrastructure\ParamConverter;

use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

class UserConverter implements ParamConverterInterface
{
    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * ArticleConverter constructor.
     * @param  UserGateway  $userGateway
     * @param  UrlGeneratorInterface  $urlGenerator
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $id = $this->userGateway->getUserById(Uuid::fromString($request->get('id')));
        if (is_null($id)) {
            throw new \Exception('Unknown UUID');
        }

        $request->attributes
            ->set(
                'domainUser',
                $id
            );
    }

    /**
     * @inheritDoc
     */
    public function supports(ParamConverter $configuration)
    {
        $configuration->setIsOptional(true);
        return $configuration->getClass() === User::class;
    }
}
