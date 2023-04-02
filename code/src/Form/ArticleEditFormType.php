<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\NotBlank;
class ArticleEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control mt-2',
                    'placeholder' => 'Enter new title',
                    
                ],
                'constraints' => [
                   new NotBlank([
                    'message' => 'You can`t leave empty Title field !'
                   ])
                ],
                'label' => 'Edit Title',
                'required' => false
            ])
            ->add('image', TextType::class, [
                'attr' => [
                    'class' => 'form-control mt-2',
                    'placeholder' => 'Enter new Image URL',
                    
                ],
                'constraints' => [
                    new NotBlank([
                     'message' => 'You can`t leave empty Image URL field !'
                    ])
                 ],
                'label' => 'Edit Image URL',
                'required' => false
            ])
            ->add('text', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control mt-2',
                    'placeholder' => 'Enter new text',
                    'rows' => '6'
                        
                ],
                'constraints' => [
                    new NotBlank([
                     'message' => 'You can`t leave empty Text field !'
                    ])
                 ],
                'label' => 'Edit Text',
                'required' => false
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
