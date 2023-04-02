<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class ArticleEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control mt-2 mb-4',
                    'placeholder' => 'Enter new title',
                    
                ],
                'label' => 'Edit Title'
            ])
            ->add('image', TextType::class, [
                'attr' => [
                    'class' => 'form-control mt-2 mb-4',
                    'placeholder' => 'Enter new Image URL',
                    
                ],
                'label' => 'Edit Image URL'
            ])
            ->add('text', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control mt-2 mb-4',
                    'placeholder' => 'Enter new text',
                    'rows' => '6'
                        
                ],
                'label' => 'Edit Text'
            ])
                // ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
