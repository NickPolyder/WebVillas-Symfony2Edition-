<?php
namespace WebVL\WebVillasBundle\Entity\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisFType extends AbstractType
{
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'data_class' => 'WebVL\WebVillasBundle\Entity\Forms\RegisF',
'csrf_protection' => true,
'csrf_field_name' => '_token',
// a unique key to help generate the secret token
'intention' => 'LoginF_item',
));
}

public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('Username')
->add('Password','password')
->add('RePassword','password')
->add('Email','email')
->add('captcha', 'captcha')
->add('Register', 'submit')
->add('Reset','reset');
}

public function getName()
{
return 'RegisterForm';
}


}
