<?php

namespace TYannis\SDS\Domain\Blog\UseCase\Article;

use Assert\Assertion;
use Assert\AssertionFailedException;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;
use TYannis\SDS\Domain\Blog\Presenter\Article\ListingPresenterInterface;
use TYannis\SDS\Domain\Blog\Request\Article\ListingRequest;
use TYannis\SDS\Domain\Blog\Response\Article\ListingResponse;

/**
 * Class Listing
 * @package TYannis\SDS\Domain\Blog\UseCase\Article
 */
class Listing
{
    /**
     * @var ArticleGateway
     */
    private ArticleGateway $articleGateway;

    /**
     * Listing constructor.
     * @param ArticleGateway $articleGateway
     */
    public function __construct(ArticleGateway $articleGateway)
    {
        $this->articleGateway = $articleGateway;
    }

    /**
     * @param ListingRequest $request
     * @param ListingPresenterInterface $presenter
     * @throws AssertionFailedException
     */
    public function execute(ListingRequest $request, ListingPresenterInterface $presenter)
    {
        $request->validate();

        $countArticle = $this->articleGateway->countArticles();

        $pages = ceil($countArticle / $request->getLimit());

        Assertion::range($request->getPage(), 1, $pages);

        $presenter->present(
            new ListingResponse(
                $this->articleGateway->getArticles(
                    $request->getPage(),
                    $request->getLimit(),
                    $request->getField(),
                    $request->getOrder()
                ),
                $request->getPage(),
                $pages,
                $request->getLimit(),
                $request->getField(),
                $request->getOrder()
            )
        );
    }
}
