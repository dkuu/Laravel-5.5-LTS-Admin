<?php

use Illuminate\Database\Seeder;
use App\UiLayout;

class UiLayoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layouts = [
            ['id' => 1, 'option' => 'fixed', 'description' => '布局1'],
            ['id' => 2, 'option' => 'layout-boxed', 'description' => '布局2'],
            ['id' => 3, 'option' => 'layout-top-nav', 'description' => '布局3'],
            ['id' => 4, 'option' => 'sidebar-collapse', 'description' => '布局4'],
            ['id' => 5, 'option' => 'sidebar-mini', 'description' => '布局5'],
        ];
        foreach ($layouts as $layout) {
            UiLayout::create($layout);
        }
    }
}
