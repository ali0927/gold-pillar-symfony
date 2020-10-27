<?php

namespace App\Form\Dashboard;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * SearchLocaleType.
 */
class SearchLocaleType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description', TextType::class, [
            'required' => false,
            'attr' => [
                'placeholder' => 'Locale',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }
}