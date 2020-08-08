<?php


namespace App\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Data\SortData;

class SearchForm extends AbstractType
{
public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => SortData::class,
        'method'=> 'GET',
        'csrf_protection' => false
    ]);
}

public function getBlockPrefix()
{
    return '';
}

public function buildForm(FormBuilderInterface $builder, array $options)
{
   $builder
       ->add('q', TextType::class,[
           'label' => false,
               'required' => false,
               'attr' => [
                   'placeholder' => 'Find a product'
               ]

    ]

       )
   ->add('min', NumberType::class,[
       'label'=>false,
       'required' => false,
       'attr' => [
           'placeholder' => 'Minimum Price'
       ]
   ])
       ->add('max', NumberType::class,[
           'label'=>false,
           'required' => false,
           'attr' => [
               'placeholder' => 'Maximum Price'
           ]
       ])
   ;
}
}