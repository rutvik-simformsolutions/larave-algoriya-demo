<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;



// use Socialite;



class SocialController extends Controller
{


    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleLoginOrRegister()
    {

        $this->_do_login(Socialite::driver('google')->user());
        return redirect('dashboard');
    }

    protected function _do_login($user_data){
        try {
            $user = User::where('email',$user_data->email)->first();
            // $user->image = $user_data->avatar;
            // $user->save();

            if(empty($user)){
               throw  new Exception("User Not Found");
            }else{
                Auth::login($user);
            }
        } catch (\Exception $e) {
            return redirect('login')->with('error',$e->getMessage());
        }
    }
}


