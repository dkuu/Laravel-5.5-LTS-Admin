<?php

namespace App\Http\Controllers\Setting;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('setting.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $settings = Setting::all();
        foreach ($settings as $setting){
            $setting->value = $input[$setting->key];
            $setting->save();
        }
        return redirect('/setting');
    }
}
