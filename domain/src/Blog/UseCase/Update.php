<?php

namespace TYannis\SDS\Domain\Blog\UseCase;

use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;
use TYannis\SDS\Domain\Blog\Presenter\UpdatePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\UpdateRequest;
use TYannis\SDS\Domain\Blog\Response\UpdateResponse;

/**
 * Class Update
 * @package TYannis\SDS\Domain\Blog\UseCase
 */
class Update
{
    /**
     * @var ArticleGateway
     */
    private ArticleGateway $articleGateway;

    /**
     * Update constructor.
     * @param ArticleGateway $articleGateway
     */
    public function __construct(ArticleGateway $articleGateway)
    {
        $this->articleGateway = $articleGateway;
    }

    /**
     * @param UpdateRequest $request
     * @param UpdatePresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(UpdateRequest $request, UpdatePresenterInterface $presenter)
    {
        $request->validate();

        $article = $this->articleGateway->getArticleById($request->getId());

        $article->setTitle($request->getTitle());
        $article->setContent($request->getContent());
        $article->setCategory($request->getCategory());

        $this->articleGateway->update($article);

        $presenter->present(new UpdateResponse($article));
    }
}
