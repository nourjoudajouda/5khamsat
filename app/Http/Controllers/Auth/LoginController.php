<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating customer for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect customer after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
       
    }

    public function login(Request $request){

        $this->validateLogin($request);
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

    
        $this->incrementLoginAttempts($request);
    
        return $this->sendFailedLoginResponse($request);
      
    }
      protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }


       public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }




    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    { 
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }


        protected function loggedOut(Request $request)
    {
        //
    }


        public function handleProviderCallback()
    {
        // $soc_user = Socialite::driver('google')->user();
        $soc_user = Socialite::driver('google')->stateless()->user();
        $token = $soc_user->token;
        $refreshToken = $soc_user->refreshToken; // not always provided
        $expiresIn = $soc_user->expiresIn;

        $soc_email = $soc_user->getEmail();
        $local_user = Admin::where('email', $soc_email)->first();
        if ($local_user) {
            $local_user->gplus_token=$token;
                $local_user->save();

            Auth::login($local_user);

        } else {

            $user = new Admin();
            $user->name = $soc_user->getName();
       
            $user->email = $soc_email;
            $user->mobile = '';
            $user->city = '';
            $user->country = '';
         
            $user->password = Hash::make($soc_email);
            $user->gplus_token = $token;

            $user->save();

            // $url = $soc_user->avatar_original;
            // $contents = file_get_contents($url);
            // $name = uniqid('', true) . uniqid('', true) . substr($url, strrpos($url, '/') + 1);
            // Storage::put('users/images' . '/' . $name, $contents);
            // $user->image = ('users/images/' . $name);

            // $user->save();
            Auth::login($user);
        }

        return redirect('/')->with('success', 'loggedin');

        // $user->token;
    }


    public function handleProviderCallback_fb()
    {
        $soc_user = Socialite::driver('facebook')->stateless()->user();


        $token = $soc_user->token;
        $refreshToken = $soc_user->refreshToken; // not always provided
        $expiresIn = $soc_user->expiresIn;
        $soc_email = $soc_user->getEmail() ? : $soc_user->id.'@facebook.com';


        $local_user = Admin::where('email', $soc_email)->first();

        if ($local_user) {

            $local_user->fb_token=$token;
            $local_user->save();
            Auth::login($local_user);

        } else {

            $user = new Admin();
            $user->name = $soc_user->getName();
         
            $user->email = $soc_email;
            $user->fb_token = $token;
            $user->mobile = '';
            $user->city = '';
             $user->country = '';
            $user->password = Hash::make($soc_email);

    

            // $url = $soc_user->avatar_original;
            // $contents = file_get_contents($url);
            // $name = uniqid('', true) . uniqid('', true) . substr($url, strrpos($url, '/') + 1);
            // Storage::put('users/images' . '/' . $name, $contents);
            // $user->avatar = ('users/images/' . $name);

            $user->save();
            Auth::login($user);
        }
        return redirect('/')->with('success', 'loggedin');
    }


}
