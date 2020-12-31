<?php

namespace App\UserInterface\ViewModel\Security\User;

use App\UserInterface\DataTransferObject\User;
use TYannis\SDS\Domain\Security\Entity\User as DomainUser;
use TYannis\SDS\Domain\Security\Response\User\ListingResponse;

class ListingViewModel
{
    /**
     * @var User[]
     */
    private array $users;

    /**
     * @var int
     */
    private int $currentPage;
    /**
     * @var int
     */
    private int $pages;
    /**
     * @var int
     */
    private int $limit;
    /**
     * @var string
     */
    private string $field;
    /**
     * @var string
     */
    private string $order;

    /**
     * @param ListingResponse $response
     * @return static
     */
    public static function fromResponse(ListingResponse $response): self
    {
        return new self(
            array_map(
                fn (DomainUser $user) => User::fromDomainArticle($user),
                $response->getUsers()
            ),
            $response->getCurrentPage(),
            $response->getPages(),
            $response->getLimit(),
            $response->getField(),
            $response->getOrder()
        );
    }

    /**
     * ListingViewModel constructor.
     * @param User[] $users
     * @param int $currentPage
     * @param int $pages
     * @param int $limit
     * @param string $field
     * @param string $order
     */
    public function __construct(
        array $users,
        int $currentPage,
        int $pages,
        int $limit,
        string $field,
        string $order
    ) {
        $this->users = $users;
        $this->currentPage = $currentPage;
        $this->pages = $pages;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }
}
