<?php

namespace TYannis\SDS\Domain\Blog\Gateway;

use TYannis\SDS\Domain\Blog\Entity\Article;

/**
 * Interface ArticleGateway
 * @package TYannis\SDS\Domain\Blog\Gateway
 */
interface ArticleGateway
{
    /**
     * @param Article $article
     */
    public function create(Article $article): void;
}
