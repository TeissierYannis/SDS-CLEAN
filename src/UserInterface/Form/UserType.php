<?php

namespace App\UserInterface\Form;

use App\UserInterface\DataTransferObject\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class ArticleType
 * @package App\UserInterface\Form
 */
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => 'Adresse email',
                    'constraints' => [
                        new NotBlank(),
                    ]
                ]
            )
            ->add(
                'pseudo',
                TextType::class,
                [
                    'label' => 'Pseudo',
                    'constraints' => [
                        new NotBlank(),
                        new Length(['min' => 3])
                    ]
                ]
            )
            ->add(
                'isNewsletterRegistered',
                CheckboxType::class,
                [
                    'required' => false,
                    'label' => 'Inscription à la newsletter',
                    'constraints' => [
                    ]
                ]
            )
            ->add(
                'roles',
                ChoiceType::class,
                [
                    'label' => 'Role',
                    'choices' => [
                        'Utilisateur' => 'ROLE_USER',
                        'Rédacteur' => 'ROLE_REDACTOR',
                        'Administrateur' => 'ROLE_ADMIN'
                    ]
                ]
            );

        //roles field data transformer
        $builder->get('roles')
            ->addModelTransformer(
                new CallbackTransformer(
                    function ($rolesArray) {
                        // transform the array to a string
                        return count($rolesArray) ? $rolesArray[0] : null;
                    },
                    function ($rolesString) {
                        // transform the string back to an array
                        return [$rolesString];
                    }
                )
            );
    }

    /**
     * @param  OptionsResolver  $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", User::class);
    }
}
