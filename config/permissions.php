<?php
return [

    'table_module' => [
        'attribute', 'banner', 'category', 'category_post', 'post', 'product', 'product_option', 'role', 'type_attribute', 'user', 'websetting'
    ],

    'module_childrent' => [
        'Danh sách'   =>'list',
        'Thêm mới'    =>'add',
        'Chỉnh sửa'   =>'edit',
        'Xoá'         =>'delete',
    ],

    'acsess' => [
        'product' => [
            'product_list' => 'list_product',
            'product_add' => 'add_product',
            'product_edit' => 'edit_product',
            'product_delete' => 'delete_product',
        ],
        'category' => [
            'category_list' => 'list_category',
            'category_add' => 'add_category',
            'category_edit' => 'edit_category',
            'category_delete' => 'delete_category',
        ],
        'user' => [
            'user_list' => 'list_user',
            'user_add' => 'add_user',
            'user_edit' => 'edit_user',
            'user_delete' => 'delete_user',
        ],
        'role' => [
            'role_list' => 'list_role',
            'role_add' => 'add_role',
            'role_edit' => 'edit_role',
            'role_delete' => 'delete_role',
        ],
        'permission' => [
            'permission_list' => 'list_permission',
            'permission_add' => 'add_permission',
            'permission_edit' => 'edit_permission',
            'permission_delete' => 'delete_permission',
        ],
        'type_attribute' => [
            'type_attribute_list' => 'list_type_attribute',
            'type_attribute_add' => 'add_type_attribute',
            'type_attribute_edit' => 'edit_type_attribute',
            'type_attribute_delete' => 'delete_type_attribute',
        ],
        'attribute' => [
            'attribute_list' => 'list_attribute',
            'attribute_add' => 'add_attribute',
            'attribute_edit' => 'edit_attribute',
            'attribute_delete' => 'delete_attribute',
        ],
        'category_post' => [
            'category_post_list' => 'list_category_post',
            'category_post_add' => 'add_category_post',
            'category_post_edit' => 'edit_category_post',
            'category_post_delete' => 'delete_category_post',
        ],
        'post' => [
            'post_list' => 'list_post',
            'post_add' => 'add_post',
            'post_edit' => 'edit_post',
            'post_delete' => 'delete_post',
        ],
        'invioce' => [
            'invioce_edit' => 'edit_invioce',
            'invioce_delete' => 'delete_invioce',
        ],
    ],


];
