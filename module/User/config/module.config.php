<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    // Start to overwrite zfcuser's route
    'router'       => array(
        'routes' => array(
            'zfcuser' => array(
                'options' => array(
                    'route' => '/account',
                ),
            ),
        ),
    ),
);