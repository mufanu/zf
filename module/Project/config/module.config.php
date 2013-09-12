<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'Project_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(__DIR__ . '/../src/Project/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Project\Entity' => 'Project_driver',
                )
            )
        )
    ),
);