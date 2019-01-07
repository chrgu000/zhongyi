<?php
//后台样式路径
return [
   'view_replace_str'  =>  [
    '__PUBLIC__'=>SITE_URL.'/public/static/admin',
    '__IMG__'=>SITE_URL.'/public/static/',
    '__ROOT__'=>SITE_URL.'/public/upvideos/',
    ],

    //分页配置
    'paginate'               => [
        'type'      => 'bootstrap2',
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
    
];

?>