<?php

namespace App\UserInterface\Form;

use App\UserInterface\DataTransferObject\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class ProductType
 * @package App\UserInterface\Form
 */
class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'label' => 'Nom du produit',
                    'constraints' => [
                        new NotBlank(),
                        new Length(['min' => 3])
                    ]
                ]
            )
            ->add(
                'description',
                TextareaType::class,
                [
                    'label' => 'Description du produit',
                    'constraints' => [
                        new NotBlank(),
                        new Length(['min' => 3])
                    ]
                ]
            )->add(
                'price',
                MoneyType::class,
                [
                    'label' => 'Prix du produit',
                    'constraints' => [
                        new NotBlank()
                    ]
                ]
            )->add(
                'image',
                FileType::class,
                [
                    'label' => 'Image du produit',
                    'mapped' => false,
                    'required' => true,
                    'constraints' => [
                        new NotBlank(),
                        new File(
                            [
                                'mimeTypes' => [
                                    'image/jpeg',
                                    'image/png',
                                    'image/webp'
                                ],
                                'mimeTypesMessage' => 'Le format de l\'image doit ête JPEG, PNG ou WEBP',
                            ]
                        )
                    ]
                ]
            );
    }

    /**
     * @param  OptionsResolver  $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Product::class);
    }
}
