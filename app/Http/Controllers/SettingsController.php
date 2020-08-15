<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use Auth;

class SettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('settings',  ['user' => $user]);

    }
    public function softdelete(User $user)
    {   
        $user = Auth::user();
        $user->delete();
        return view('home');
    }
}
