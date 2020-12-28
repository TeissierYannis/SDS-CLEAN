<?php

namespace TYannis\SDS\Domain\Blog\Response\Article;

use TYannis\SDS\Domain\Blog\Entity\Article;

/**
 * Class RemoveResponse
 * @package TYannis\SDS\Domain\Blog\Response
 */
class RemoveResponse
{
    /**
     * @var Article|null
     */
    private ? Article $article;

    /**
     * RemoveResponse constructor.
     * @param Article|null $article
     */
    public function __construct(?Article $article)
    {
        $this->article = $article;
    }

    /**
     * @return Article|null
     */
    public function getArticle() : ?Article
    {
        return $this->article;
    }
}
