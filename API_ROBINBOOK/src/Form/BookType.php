<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('age_classification')
            ->add('cover_page',FileType::class, array('label' => 'Libro (PDF file)'))
            ->add('illustrations')
            ->add('pdf', FileType::class, array('label' => 'Libro (PDF file)'))
            ->add('release_date')
            ->add('synopsis')
            ->add('title')
            ->add('public_date')
            ->add('users')
            ->add('Genre');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Book'
        ));
    }
}
