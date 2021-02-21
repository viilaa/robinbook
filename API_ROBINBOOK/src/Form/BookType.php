<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('age_classification')
            ->add('cover_page',FileType::class,['label' => 'Cover page (JPG file)'])
            ->add('illustrations')
            ->add('pdf', FileType::class,['label' => 'Book (PDF file)'])
            ->add('release_date')
            ->add('synopsis')
            ->add('title')
            /* ->add('public_date') */;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
