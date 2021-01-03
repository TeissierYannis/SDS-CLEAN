<?php

namespace TYannis\SDS\Domain\Newsletter\UseCase;

use TYannis\SDS\Domain\Newsletter\Provider\MailProviderInterface;
use TYannis\SDS\Domain\Newsletter\Request\SendRequest;
use TYannis\SDS\Domain\Newsletter\Response\SendResponse;
use TYannis\SDS\Domain\Newsletter\Presenter\SendPresenterInterface;

/**
 * Class Send
 * @package TYannis\SDS\Domain\Newsletter\UseCase
 */
class Send
{
    /**
     * @var MailProviderInterface
     */
    private MailProviderInterface $mailer;

    /**
     * Send constructor.
     * @param  MailProviderInterface  $mailer
     */
    public function __construct(MailProviderInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param  SendRequest  $request
     * @param  SendPresenterInterface  $presenter
     * @throws \Assert\AssertionFailedException
     */
    public function execute(SendRequest $request, SendPresenterInterface $presenter)
    {
        $request->validate();

        $this->mailer->sendNewsletter($request->getObject(), $request->getBody(), $request->getEmails());

        $presenter->present(new SendResponse($request->getObject(), $request->getBody(), $request->getEmails()));
    }
}
