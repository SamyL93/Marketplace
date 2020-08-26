<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Produit;


class ProductType extends AbstractType
{



    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label' => 'Name of the product'])
            ->add('categorie', TextType::class, ['label' => 'Categorie'])
            ->add('price', MoneyType::class, ['label' => 'Price'])
            ->add('description', TextType::class, ['label' => 'Description'])
            // ->add('image', TextType::class, ['label' => 'Name of the product'])

            ->add('save', SubmitType::class, ['label' => 'Submit']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }

}
