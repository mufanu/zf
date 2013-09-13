<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 12.09.13
 * Time: 0:37
 * To change this template use File | Settings | File Templates.
 */
namespace Project\Form;

use Zend\Form\Form;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Project\Form\ProjectInputFilter;

class ProjectForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('project');
        $this->setAttribute('method', 'post');
        $this->setInputFilter(new ProjectInputFilter());
        /*
        $this->add(
            array(
                 'name' => 'security',
                 'type' => 'Zend\Form\Element\Csrf',
            )
        );
        */
        $this->add(
            array(
                 'name' => 'id',
                 'type' => 'Hidden',
            )
        );
        $this->add(
            array(
                 'name' => 'created',
                 'type' => 'Hidden',
            )
        );
        $this->add(
            array(
                 'name' => 'userId',
                 'type' => 'Hidden',
            )
        );
        $this->add(
            array(
                 'name'    => 'title',
                 'type'    => 'Text',
                 'options' => array(
                     'min'   => 3,
                     'max'   => 25,
                     'label' => 'Title',
                 ),
            )
        );
        $this->add(
            array(
                 'name'    => 'text',
                 'type'    => 'Textarea',
                 'options' => array(
                     'label' => 'Text',
                 ),
            )
        );
        $this->add(
            array(
                 'name'    => 'state',
                 'type'    => 'Checkbox',
                 'options' => array(
                     'label' => 'published',
                 ),
            )
        );
        $this->add(
            array(
                 'name'       => 'submit',
                 'type'       => 'Submit',
                 'attributes' => array(
                     'value' => 'Save',
                     'id'    => 'submitbutton',
                 ),
            )
        );
    }
}