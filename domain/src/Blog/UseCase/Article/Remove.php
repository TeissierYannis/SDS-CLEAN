<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Article;

use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;
use TYannis\SDS\Domain\Blog\Presenter\Article\RemovePresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\RemoveRequest;
use TYannis\SDS\Domain\Blog\Response\Article\RemoveResponse;

/**
 * Class Remove
 * @package TYannis\SDS\Domain\Blog\UseCase
 */
class Remove
{
    /**
     * @var ArticleGateway
     */
    private ArticleGateway $articleGateway;

    /**
     * Remove constructor.
     * @param ArticleGateway $articleGateway
     */
    public function __construct(ArticleGateway $articleGateway)
    {
        $this->articleGateway = $articleGateway;
    }

    /**
     * @param RemoveRequest $request
     * @param RemovePresenterInterface $presenter
     */
    public function execute(RemoveRequest $request, RemovePresenterInterface $presenter)
    {
        $article = new Article(
            $request->getId(),
            $request->getTitle(),
            $request->getContent(),
            $request->getCategory()
        );

        if ($this->articleGateway->remove($article)) {
            $article = null;
        }

        $presenter->present(new RemoveResponse($article));
    }
}
