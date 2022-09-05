<?php

return array(
    'post/([0-9]+)' => 'site/post/$1',
    'update/([0-9]+)' => 'site/update/$1',
    'delete/([0-9]+)' => 'site/delete/$1',
    'create' => 'site/create',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/edit' => 'user/edit',
    
    '' => 'site/index',
);
