<?php

namespace App\Form;


use App\Entity\Groupe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('moyenne')
            ->add('groupe',EntityType::class,['class' => Groupe::class,'choice_label' => 'name','label' => 'Groupe'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
