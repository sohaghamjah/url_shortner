<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        $breadcrumb = ['Dashboard' => route('user.dashboard'), "Roles" => ''];
        $title = 'Dashboard';
        return view('user.sections.dashboard', compact('breadcrumb','title'));
    }

    /**
     * Logout method
     * 
     * @return Illuminate\Http\Request
     * @method POST
     */
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('user.login')->with(['success' => ['Logout Successfully!']]);
    }
}
