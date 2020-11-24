<?php

namespace App\Http\Controllers\SocialAuth;

use App\Http\Controllers\Controller;
use App\Service\Socialite as SocialiteService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FbSocialiteController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
        $objSocialite = new SocialiteService();
        $objSocialite->saveUser($user);
    }
}
