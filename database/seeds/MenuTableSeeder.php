<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            ['id' => 1, 'parent_id' => 0, 'name' => '后台', 'url' => ''],
            ['id' => 2, 'parent_id' => 1, 'name' => '首页', 'url' => '/home'],
            ['id' => 3, 'parent_id' => 0, 'name' => '开发模式', 'url' => ''],
            ['id' => 4, 'parent_id' => 3, 'name' => '菜单', 'url' => '/menu'],
            ['id' => 5, 'parent_id' => 3, 'name' => '权限', 'url' => '/permission'],
            ['id' => 6, 'parent_id' => 0, 'name' => '设置', 'url' => ''],
            ['id' => 7, 'parent_id' => 6, 'name' => '系统设置', 'url' => ''],
            ['id' => 8, 'parent_id' => 7, 'name' => '基本信息', 'url' => '/setting'],
            ['id' => 9, 'parent_id' => 6, 'name' => '用户管理', 'url' => ''],
            ['id' => 10, 'parent_id' => 9, 'name' => '角色设置', 'url' => '/role'],
            ['id' => 11, 'parent_id' => 9, 'name' => '用户管理', 'url' => '/user'],
            ['id' => 12, 'parent_id' => 6, 'name' => '个人设置', 'url' => '/profile'],
        ];
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
