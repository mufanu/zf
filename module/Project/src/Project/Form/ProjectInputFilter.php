<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 12.09.13
 * Time: 1:33
 * To change this template use File | Settings | File Templates.
 */
namespace Project\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class ProjectInputFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
                        'name' => 'title',
                        'required' => true,
                        'validators' => array(
                            array(
                                'name' => 'StringLength',
                                'options' => array(
                                    'min' => 3,
                                    'max' => 100,
                                ),
                            ),
                        ),
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),

                   ));

        $this->add(array(
                        'name' => 'text',
                        'required' => true,
                        'validators' => array(
                            array(
                                'name' => 'StringLength',
                                'options' => array(
                                    'min' => 50,
                                ),
                            ),
                        ),
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                   ));

        $this->add(array(
                        'name' => 'state',
                        'required' => false,
                   ));
    }
}