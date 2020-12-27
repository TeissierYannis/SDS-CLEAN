<?php

namespace TYannis\SDS\Domain\Blog\Response;

use TYannis\SDS\Domain\Blog\Entity\Article;

/**
 * Class CreateResponse
 * @package TYannis\SDS\Domain\Blog\Response
 */
class CreateResponse
{
    /**
     * @var Article
     */
    private Article $article;

    /**
     * Create constructor.
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
