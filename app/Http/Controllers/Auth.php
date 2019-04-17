<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class Auth extends Controller
{
    //
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('dashboard');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if($authUser){
            return $authUser;
        }
        else{
            $data = User::create([
                'name' => $user->name,
                'email' => !empty($user->email) ? $user->email : ' ',
                'password' => "",
                'provider' => $provider,
                'provider_id' => $user->id
            ]);
            return $data;
        }
    }
}
