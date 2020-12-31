<?php

namespace App\UserInterface\Form;

use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use App\UserInterface\DataTransferObject\Article;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class ArticleType
 * @package App\UserInterface\Form
 */
class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de l\'article',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 3])
                ],
                'help' => 'Écrivez le titre de l\'article'
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenu de l\'article',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 3])
                ],
                'help' => 'Écrivez le contenu de l\'article'

            ])->add('category', EntityType::class, [
                'mapped' => false,
                'required' => true,
                'class' => DoctrineCategory::class,
                'choice_label' => 'title',
                'placeholder' => 'Choisir une catégorie',
                'label' => 'Catégorie',
                'help' => 'Choisissez une catégorie'
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Article::class);
    }
}
