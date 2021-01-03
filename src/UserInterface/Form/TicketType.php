<?php

namespace App\UserInterface\Form;

use App\UserInterface\DataTransferObject\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class ArticleType
 * @package App\UserInterface\Form
 */
class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'message',
                TextareaType::class,
                [
                    'label' => 'Votre message',
                    'constraints' => [
                        new NotBlank(),
                        new Length(['min' => 3])
                    ]
                ]
            );

        if (!$options['admin_access']) {
            $builder
                ->add(
                    'email',
                    EmailType::class,
                    [
                        'label' => 'Votre adresse email',
                        'constraints' => [
                            new NotBlank(),
                            new Email()
                        ]
                    ]
                );
        }
    }

    /**
     * @param  OptionsResolver  $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Ticket::class);
        $resolver->setDefault("admin_access", false);
    }
}
