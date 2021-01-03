<?php

namespace TYannis\SDS\Domain\Shop\Presenter\Product;

use TYannis\SDS\Domain\Shop\Response\Product\CreateResponse;

/**
 * Interface CreatePresenterInterface
 * @package TYannis\SDS\Domain\Shop\Presenter\Product
 */
interface CreatePresenterInterface
{
    /**
     * @param CreateResponse $response
     */
    public function present(CreateResponse $response): void;
}
