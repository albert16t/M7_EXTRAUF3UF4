<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/19
 * Time: 18:30
 */

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Pack', TextType::class, [
                'attr' => ['autofocus' => true],
                'label' => 'Pack',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('publicar', SubmitType::class,
                ['label' => 'Confirmar',
                    'attr' => [
                        'class' => 'form-submit btn btn-success'
                    ]]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => 'App\Entity\Tag']);

    }

}