<?php

namespace AppBundle\Form;

use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomCli')
                ->add('prenomCli')
                ->add('dateNaiCli',DateType::class,
                    array(
                        'widget' => 'single_text',
                        'format' => 'yyyy-MM-dd'
                    ))
                ->remove('username');
    }

    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

    /**
     * {@inheritdoc}
     */



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
