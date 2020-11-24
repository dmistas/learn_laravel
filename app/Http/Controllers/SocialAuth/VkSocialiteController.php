<?php

namespace App\Http\Controllers\SocialAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Service\Socialite as SocialiteService;

class VkSocialiteController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('vkontakte')->user();
        $objSocialite = new SocialiteService();
        $objSocialite->saveUser($user);
    }

}
