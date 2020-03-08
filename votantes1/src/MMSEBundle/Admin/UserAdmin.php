<?php

// src/SEICBundle/Admin/PostAdmin.php

namespace MMSEBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class UserAdmin extends AbstractAdmin {
    

   protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('cedula',null,array('label'=>'Cédula'))
            ->add('username',null,array('label'=>'Nombre de usuario'))
            ->add('email',null,array('label'=>'Dirección de correo electrónico'))
            ->add('enabled', null, array('editable' => true,'label' => 'Habilitado'))
            ->add('locked', null, array('editable' => true,'label' => 'Bloqueado'))
            ->add('roles')
        ;

    }

    
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('id')
            ->add('cedula',null,array('label'=>'Cédula'))
            ->add('username',null,array('label'=>'Nombre de usuario'))
            ->add('locked',null,array('label' => 'Bloqueado'))
            ->add('email',null,array('label'=>'Dirección de correo electrónico'))
        ;
    }

    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('General')
                ->add('username',null,array('label'=>'Nombre de usuario'))
            ->end()
            ->with('Perfil')
                ->add('celular')
            ->end()
        ;
    }

    
    protected function configureFormFields(FormMapper $formMapper)
    {
        // define group zoning
        $formMapper
            ->tab('Usuario')
                ->with('Perfil', array('class' => 'col-md-6'))->end()
                ->with('General', array('class' => 'col-md-6'))->end()
            ->end()
            ->tab('Seguridad')
                ->with('Estado', array('class' => 'col-md-4'))->end()
                ->with('Roles', array('class' => 'col-md-12'))->end()
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
                    ->add('username',null,array('label'=>'Nombre de usuario'))
                    ->add('plainPassword', $textType, array(
                        'required' => (!$this->getSubject() || is_null($this->getSubject()->getId())),'label'=>'Contraseña'
                    ))
                    ->add('email',null,array('label'=>'Dirección de correo electrónico'))
                ->end()
                ->with('Perfil')
                    ->add('cedula',null,array('label'=>'Cédula'))
                    ->add('firstname',null,array('label'=>'Nombres'))
                    ->add('lastname',null,array('label'=>'Apellidos'))
                    ->add('celular')
                ->end()
            ->end()
            ->tab('Seguridad')
                ->with('Estado')
                    ->add('locked', null, array('required' => false,'label' => 'Bloqueado'))
                    ->add('enabled', null, array('required' => false,'label' => 'Habilitado'))
                ->end()
                ->with('Roles')
                    ->add('roles', 'choice', array('required' => true, 
                           'choices' => array( 'ROLE_ADMIN' => 'ADMINISTRADOR'), 'multiple' => true))

                ->end()
            ->end()
        ;
    }
    
        public function getExportFields()
    {
        return array('cedula', 'firstname', 'lastname','celular');
    }
    

}
