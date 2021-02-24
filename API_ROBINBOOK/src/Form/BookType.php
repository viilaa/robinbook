<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('age_classification')
            ->add('cover_page')
            ->add('illustrations')
            ->add('pdf')
            ->add('synopsis')
            ->add('title')
            /* ->add('release_date', DateType::class, ['widget'=>'single_text']) */
            ->add('upload',FileType::class,
            ['label' => 'Brochure (PDF file)',
            'mapped' => false,
            'required'=>false,]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
            'method'=> 'PUT'
        ]);
    }
}
