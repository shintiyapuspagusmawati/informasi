<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    //
    public function profile()
    {
    	return view('settings.profile');
    }

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function editProfile()
    {
    	return view('settings.edit-profile');
    }

    public function updateProfile(Request $request)
    {
    	$user = Auth::user();
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|unique:users,email,'.$user->id
    		]);

    	$user->name = $request->get('name');
    	$user->email = $request->get('email');
    	$user->save();
    	 return redirect('settings/profile');
    }
}
