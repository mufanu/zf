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
    'controllers' => array(
        'invokables' => array(
            'Project\Controller\Project' => 'Project\Controller\ProjectController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'project' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/project[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Project\Controller\Project',
                        'action' => 'index',
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'showMessages' => 'Project\View\Helper\ShowMessages',
        )
    )
);