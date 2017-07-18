<?php

namespace App\Http\Controllers\Setting;

use App\Profile;
use App\UiLayout;
use App\UiSkin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $skins = UiSkin::all();
        $skins_list = [];
        foreach($skins as $skin) {
            $skins_list[$skin->id] = $skin->description;
        }
        $layouts = UiLayout::all();
        $layouts_list = [];
        foreach($layouts as $layout) {
            $layouts_list[$layout->id] = $layout->description;
        }

        $profile = Profile::where('user_id', Auth::id())->first();
        return view('profile.index', compact('profile', 'skins_list', 'layouts_list'));
    }

    public function update(Request $request)
    {
        $input = $request->all();
        unset($input['userid']);
        $profile = Profile::where('user_id', Auth::id())->first();
        $profile->update($input);
        return redirect('/profile');
    }
}
