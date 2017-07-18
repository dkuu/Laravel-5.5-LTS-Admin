<?php

use Illuminate\Database\Seeder;
use App\UiSkin;

class UiSkinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skins = [
            ['id' => 1, 'option' => 'skin-blue', 'description' => '蓝色'],
            ['id' => 2, 'option' => 'skin-black', 'description' => '白色'],
            ['id' => 3, 'option' => 'skin-purple', 'description' => '紫色'],
            ['id' => 4, 'option' => 'skin-yellow', 'description' => '黄色'],
            ['id' => 5, 'option' => 'skin-red', 'description' => '红色'],
            ['id' => 6, 'option' => 'skin-green', 'description' => '绿色'],
        ];
        foreach ($skins as $skin) {
            UiSkin::create($skin);
        }
    }
}
