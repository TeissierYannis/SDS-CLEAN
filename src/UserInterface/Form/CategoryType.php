<?php

namespace App\UserInterface\Form;

use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use App\UserInterface\DataTransferObject\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class CategoryType
 * @package App\UserInterface\Form
 */
class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', EntityType::class, [
               'class' => DoctrineCategory::class,
                'choice_label' => 'title',
                'label' => 'Titre de la catégorie'
            ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Category::class);
    }
}
