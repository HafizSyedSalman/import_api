<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
use Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (Auth::user()->usertype == 'admin') {
            return '/importExportView';
        } else {
            return ('/home');
        
    }
}
       
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Login Google

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google Callback

    public function handleGoogleCallback()
    {
        $user=Socialite::driver('google')->user();
        $this->registerOrLoginUser($user);

        //after login redirect to Home page
        return redirect()->route('home');
    }

    // Login--Facebook

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Facebook---Callback

    public function handleFacebookCallback()
    {
        $data=Socialite::driver('facebook')->user();
         $this->registerOrLoginUser($data);
        
        //after login redirect to Home page
        return redirect()->route('home');
    }

     
    // Login--Twitter

    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    // Twitter--Callback

    public function handleTwitterCallback()
    {
        $user=Socialite::driver('twitter')->user();
         $this->registerOrLoginUser($user);
        
        //after login redirect to Home page
        return redirect()->route('home');
    }


    // Login--Github

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    // Github---Callback

    public function handleGithubCallback()
    {
        $user=Socialite::driver('github')->user();
        $this->registerOrLoginUser($user);
        
        //after login redirect to Home page
        return redirect()->route('home');
    }

    protected function registerOrLoginUser($data)
{
    $user=User::where('email','=', $data->email)->first();
    if(!$user) {
        $user= new User;
        $user->name          =   $data->name;
        $user->email         =   $data->email;
        $user->password      =   Hash::make('123456');
        $user->provider_id   =   $data->id;
        $user->avatar        =   $data->avatar;
        $user->save();
    }
    Auth::login($user);
}


}
