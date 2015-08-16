<?php



namespace WebVL\WebVillasBundle\Entity\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EditVilFType extends AbstractType
{
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'data_class' => 'WebVL\WebVillasBundle\Entity\Forms\AddVilF',
'csrf_protection' => true,
'csrf_field_name' => '_token',
// a unique key to help generate the secret token
'intention' => 'EditVilF_item',
));
}

public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('size')
->add('rooms')
->add('restrooms')
->add('view',null,array( 'required' => false))
->add('address')
->add('price')
->add('details','textarea',array( 'required' => false))
->add('geoX','hidden')
->add('geoY','hidden')
->add('parking')
->add('pool','checkbox',array( 'required' => false))
->add('sauna','checkbox',array( 'required' => false))
->add('gym','checkbox',array( 'required' => false))
->add('Edit', 'submit')
->add('Reset','reset');
}

public function getName()
{
return 'EditVilForm';
}


}

