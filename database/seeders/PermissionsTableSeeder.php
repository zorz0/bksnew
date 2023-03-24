<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'our_news_access',
            ],
            [
                'id'    => 34,
                'title' => 'post_create',
            ],
            [
                'id'    => 35,
                'title' => 'post_edit',
            ],
            [
                'id'    => 36,
                'title' => 'post_show',
            ],
            [
                'id'    => 37,
                'title' => 'post_delete',
            ],
            [
                'id'    => 38,
                'title' => 'post_access',
            ],
            [
                'id'    => 39,
                'title' => 'product_different_create',
            ],
            [
                'id'    => 40,
                'title' => 'product_different_edit',
            ],
            [
                'id'    => 41,
                'title' => 'product_different_show',
            ],
            [
                'id'    => 42,
                'title' => 'product_different_delete',
            ],
            [
                'id'    => 43,
                'title' => 'product_different_access',
            ],
            [
                'id'    => 44,
                'title' => 'websit_info_create',
            ],
            [
                'id'    => 45,
                'title' => 'websit_info_edit',
            ],
            [
                'id'    => 46,
                'title' => 'websit_info_show',
            ],
            [
                'id'    => 47,
                'title' => 'websit_info_delete',
            ],
            [
                'id'    => 48,
                'title' => 'websit_info_access',
            ],
            [
                'id'    => 49,
                'title' => 'catecategory_news_create',
            ],
            [
                'id'    => 50,
                'title' => 'catecategory_news_edit',
            ],
            [
                'id'    => 51,
                'title' => 'catecategory_news_show',
            ],
            [
                'id'    => 52,
                'title' => 'catecategory_news_delete',
            ],
            [
                'id'    => 53,
                'title' => 'catecategory_news_access',
            ],
            [
                'id'    => 54,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
