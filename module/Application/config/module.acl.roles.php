<?php
/**
 * Здесь хранится список ролей и доступы по url
 */
return array(
    'guest'=> array(
        'home',
        'zfcuser/login',
        'zfcuser/register'
    ),
    'admin'=> array(
        'admin',
        'add-user',
        'delete-user',
        'project',
        'project/add'
    ),
);