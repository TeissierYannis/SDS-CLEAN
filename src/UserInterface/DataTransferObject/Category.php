<?php

namespace App\UserInterface\DataTransferObject;

/**
 * Class Category
 * @package App\UserInterface\DataTransferObject
 */
class Category
{
    /**
     * @var string|null
     */
    private $title;

    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }
}
