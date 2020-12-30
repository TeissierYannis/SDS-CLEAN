<?php

namespace App\UserInterface\Form;

use App\UserInterface\DataTransferObject\Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class RoleType
 * @package App\UserInterface\Form
 */
class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'label' => 'Nom du rôle',
                    'constraints' => [
                        new NotBlank(),
                        new Length(['min' => 3]),
                    ]
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Role::class);
    }
}
