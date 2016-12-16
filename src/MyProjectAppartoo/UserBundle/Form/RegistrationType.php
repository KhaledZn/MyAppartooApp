<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationType
 *
 * @author Znaidi
 */
namespace MyProjectAppartoo\UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class RegistrationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder
               ->add('nom')
               ->add('prenom')
        ;
    }
    
    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        
        return 'MyProjectAppartoo_user_registration';
        
    }

//put your code here
}
