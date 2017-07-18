<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'name',
            'title' => '名称',
            'description' => '',
            'value' => '',
        ]);
    }
}
