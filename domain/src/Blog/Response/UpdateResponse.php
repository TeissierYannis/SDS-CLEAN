<?php

namespace TYannis\SDS\Domain\Blog\Response;

use TYannis\SDS\Domain\Blog\Entity\Article;

/**
 * Class UpdateResponse
 * @package TYannis\SDS\Domain\Blog\Response
 */
class UpdateResponse
{
    /**
     * @var Article
     */
    private Article $article;

    /**
     * Update constructor.
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->article;
    }
}
