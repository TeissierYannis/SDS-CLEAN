<?php

namespace App\Infrastructure\EventSubscriber;

use App\Infrastructure\Adapter\Repository\ArticleRepository;
use App\Infrastructure\Adapter\Repository\CategoryRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

/**
 * Class TwigEventSubscriber
 * @package App\Infrastructure\EventSubscriber
 */
class TwigEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * @var ArticleRepository
     */
    private ArticleRepository $articleRepositiory;

    /**
     * @var CategoryRepository
     */
    private CategoryRepository $categoryRepository;

    public function __construct(
        Environment $twig,
        ArticleRepository $articleRepositiory,
        CategoryRepository $categoryRepository
    ) {
        $this->twig = $twig;
        $this->articleRepositiory = $articleRepositiory;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return array|string[]
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernerController'
        ];
    }

    /**
     * @param  ControllerEvent  $event
     */
    public function onKernerController(ControllerEvent $event)
    {
        $this->twig->addGlobal('articles', $this->articleRepositiory->findAll());
        $this->twig->addGlobal('categories', $this->categoryRepository->findAll());
    }
}
