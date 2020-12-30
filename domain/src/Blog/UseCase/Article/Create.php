<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Article;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;
use TYannis\SDS\Domain\Blog\Presenter\Article\CreatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\CreateRequest;
use TYannis\SDS\Domain\Blog\Response\Article\CreateResponse;

/**
 * Class Create
 * @package TYannis\SDS\Domain\Blog\UseCase\Article
 */
class Create
{
    /**
     * @var ArticleGateway
     */
    private ArticleGateway $articleGateway;

    /**
     * Create constructor.
     * @param ArticleGateway $articleGateway
     */
    public function __construct(ArticleGateway $articleGateway)
    {
        $this->articleGateway = $articleGateway;
    }

    /**
     * @param CreateRequest $request
     * @param CreatePresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(CreateRequest $request, CreatePresenterInterface $presenter)
    {
        $request->validate();

        $article = Article::fromCreate($request);

        $this->articleGateway->create($article);

        $presenter->present(new CreateResponse($article));
    }
}
