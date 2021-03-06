<?php

namespace App\Infrastructure\Adapter\Provider;

use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Mime\Address;
use TYannis\SDS\Domain\Newsletter\Provider\MailProviderInterface as NewsletterMailProviderInterface;
use TYannis\SDS\Domain\Security\Provider\MailProviderInterface;
use TYannis\SDS\Domain\Tickets\Entity\Ticket;
use TYannis\SDS\Domain\Tickets\Provider\MailProviderInterface as TicketsMailProviderInterface;

/**
 * Class MailProvider
 * @package App\Infrastructure\Adapter\Provider
 */
class MailProvider implements MailProviderInterface, NewsletterMailProviderInterface, TicketsMailProviderInterface
{
    /**
     * @var MessageBusInterface
     */
    private MessageBusInterface $bus;

    /**
     * @var string
     */
    private string $fromEmail;

    /**
     * @var string
     */
    private string $displayName;

    /**
     * MailProvider constructor.
     * @param  MessageBusInterface  $bus
     * @param  string  $fromEmail
     * @param  string  $displayName
     */
    public function __construct(MessageBusInterface $bus, string $fromEmail, string $displayName)
    {
        $this->bus = $bus;
        $this->fromEmail = $fromEmail;
        $this->displayName = $displayName;
    }

    /**
     * @param  string  $email
     * @param  string  $pseudo
     * @param  string  $link
     */
    public function sendPasswordResetLink(string $email, string $pseudo, string $link): void
    {
        $email = (new NotificationEmail())
            ->from(
                new Address($this->fromEmail, $this->displayName)
            )
            ->to(
                new Address($email, $pseudo)
            )
            ->subject("[ Ma Salle ] Réinitialisation de mot de passe")
            ->htmlTemplate('emails/password_reset_request.html.twig')
            ->context(
                [
                    'pseudo' => $pseudo,
                    'link' => $link,
                ]
            );

        $message = new SendEmailMessage($email);

        $this->bus->dispatch($message);
    }

    /**
     * @param  string  $object
     * @param  string  $body
     * @param  array  $emails
     */
    public function sendNewsletter(string $object, string $body, array $emails): void
    {
        foreach ($emails as $email) {
            $email = (new NotificationEmail())
                ->from(
                    new Address('newsletter@masalle.com', 'Newsletter - Ma Salle')
                )
                ->to(
                    new Address($email, '')
                )
                ->subject($object)
                ->htmlTemplate('emails/newsletter.html.twig')
                ->context(
                    [
                        'body' => $body,
                    ]
                );

            $message = new SendEmailMessage($email);

            $this->bus->dispatch($message);
        }
    }

    /**
     * @param  string  $pseudo
     * @param  string  $body
     * @param  Ticket  $ticket
     */
    public function replyToTicket(string $pseudo, string $body, Ticket $ticket): void
    {
        $email = (new NotificationEmail())
            ->from(
                new Address('contact@masalle.com', $pseudo)
            )
            ->to(
                new Address($ticket->getEmail(), '')
            )
            ->subject("[ Ma Salle ] Réponse à votre question du " . $ticket->getSendedAt()->format('d/m/Y'))
            ->htmlTemplate('emails/ticket_response.html.twig')
            ->context(
                [
                    'pseudo' => $pseudo,
                    'body' => $body,
                    'ticket' => $ticket
                ]
            );

        $message = new SendEmailMessage($email);

        $this->bus->dispatch($message);
    }
}
