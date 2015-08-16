<?php
namespace WebVL\WebVillasBundle\Entity\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActiveCodeFType extends AbstractType
{
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'data_class' => 'WebVL\WebVillasBundle\Entity\Forms\ActiveCodeF',
'csrf_protection' => true,
'csrf_field_name' => '_token',
// a unique key to help generate the secret token
'intention' => 'ActiveCodeF_item',
));
}

public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('Username')
->add('ActivationCode')
->add('captcha', 'captcha')
->add('Activate', 'submit')
->add('Reset','reset');
}

public function getName()
{
return 'ActivateCodeForm';
}


}
