<?php

$menu['ระบบ RMS']=array(
    'import'=>array(
        'label'=>'นำเข้าข้อมูลจากระบบ RMS',
        'bullet'=>'tf-icons bx bx-home',
        'url'=>module_url('hello','index'),
    ),
    'Export'=>array(
        'label'=>'ส่งข้อมูลกลับระบบ RMS',
        'bullet'=>'tf-icons bx bx-list-plus',
        'url'=>module_url('hello','subMenu'),
        'item'=>array(
                'menu1'=>array(
                'label'=>'เมนูย่อย 1',
                'url'=>module_url('hello','menu1'),
            ),
                'menu2'=>array(
                'label'=>'เมนูย่อย 2',
                'url'=>module_url('hello','menu2'),
            ),
        ),
    ),
);
print gen_menu($menu);