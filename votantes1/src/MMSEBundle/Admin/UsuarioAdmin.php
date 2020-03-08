<?php

// src/IEMLBundle/Admin/PostAdmin.php

namespace MMSEBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class UsuarioAdmin extends AbstractAdmin {

   protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('cedula',null,array('label'=>'Cedula'))
            ->add('nombres',null,array('label'=>'Nombres'))
            ->add('apellidos',null,array('label'=>'Apellidos'))
                ->add('email',null,array('label'=>'Email'))
                ->add('telefono',null,array('label'=>'Telefono'))
            ->add('creacionAt',null,array('label'=>'Fecha y Hora de Ingreso'))
        ;

    }

    
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('cedula',null,array('label'=>'Cedula'))
            ->add('nombres',null,array('label'=>'Nombres'))
            ->add('apellidos',null,array('label'=>'Apellidos'))
                ->add('email',null,array('label'=>'Email'))
                ->add('telefono',null,array('label'=>'Telefono'))
            ->add('creacionAt',null,array('label'=>'Fecha y Hora de Ingreso'))
        ;
    }

    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('General')
                ->add('cedula',null,array('label'=>'Cedula'))
                ->add('nombres',null,array('label'=>'Nombres'))
                ->add('email',null,array('label'=>'Email'))
                ->add('telefono',null,array('label'=>'Telefono'))
                ->add('apellidos',null,array('label'=>'Apellidos'))
            ->end()
        ;
    }

    
    protected function configureFormFields(FormMapper $formMapper)
    {
        // define group zoning
        $formMapper
            ->tab('Usuario')
                ->with('General', array('class' => 'col-md-6'))->end()
            ->end()
        ;

        $now = new \DateTime();

        // NEXT_MAJOR: Keep FQCN when bumping Symfony requirement to 2.8+.
        if (method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')) {
            $textType = 'Symfony\Component\Form\Extension\Core\Type\TextType';
            $datePickerType = 'Sonata\CoreBundle\Form\Type\DatePickerType';
            $urlType = 'Symfony\Component\Form\Extension\Core\Type\UrlType';
            $userGenderType = 'Sonata\UserBundle\Form\Type\UserGenderListType';
            $localeType = 'Symfony\Component\Form\Extension\Core\Type\LocaleType';
            $timezoneType = 'Symfony\Component\Form\Extension\Core\Type\TimezoneType';
            $modelType = 'Sonata\AdminBundle\Form\Type\ModelType';
            $securityRolesType = 'Sonata\UserBundle\Form\Type\SecurityRolesType';
        } else {
            $textType = 'text';
            $datePickerType = 'sonata_type_date_picker';
            $urlType = 'url';
            $userGenderType = 'sonata_user_gender';
            $localeType = 'locale';
            $timezoneType = 'timezone';
            $modelType = 'sonata_type_model';
            $securityRolesType = 'sonata_security_roles';
        }

        $formMapper
            ->tab('Usuario')
                ->with('General')
                    ->add('cedula',null,array('label'=>'Cedula'))
                    ->add('nombres',null,array('label'=>'Nombres'))
                    ->add('apellidos',null,array('label'=>'Apellidos'))
                ->add('email',null,array('label'=>'Email'))
                ->add('telefono',null,array('label'=>'Telefono'))
                    ->add('creacionAt','hidden',array('data' => '2017-10-11 04:04:04'))
                ->end()
            ->end()
        ;
    }

}