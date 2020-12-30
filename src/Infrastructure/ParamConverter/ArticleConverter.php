<?php

namespace App\Infrastructure\ParamConverter;

use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;

class ArticleConverter implements ParamConverterInterface
{
    /**
     * @var ArticleGateway
     */
    private ArticleGateway $articleGateway;

    /**
     * ArticleConverter constructor.
     * @param ArticleGateway $articleGateway
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(ArticleGateway $articleGateway)
    {
        $this->articleGateway = $articleGateway;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $id = $this->articleGateway->getArticleById(Uuid::fromString($request->get('id')));

        if (is_null($id)) {
            throw new \Exception('Unknown UUID');
        }

        $request->attributes
            ->set(
                'domainArticle',
                $id
            );
    }

    /**
     * @inheritDoc
     */
    public function supports(ParamConverter $configuration)
    {
        $configuration->setIsOptional(true);
        return $configuration->getClass() === Article::class;
    }
}
