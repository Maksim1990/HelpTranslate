<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class,array('attr'=>array('class'=>'form-control')))
            ->add('email',EmailType::class,array('attr'=>array('class'=>'form-control')))
            ->add('password',RepeatedType::class,[
                'type'=>PasswordType::class,'attr'=>array('class'=>'form-control')
            ])
            ->add('submit',SubmitType::class,[
                'attr'=>['class'=>'form-control btn btn-login']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
   $resolver->setDefaults([
       'data_class'=>User::class
   ]);
    }


}