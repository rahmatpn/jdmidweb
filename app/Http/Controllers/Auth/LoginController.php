<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\ProfileHotel;
use App\ProfileUser;
use App\Providers\RouteServiceProvider;
use App\User;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest:hotel')->except('logout');
        $this->middleware('guest:user')->except('logout');
        $this->middleware('guest:admin')->except('logout');

    }

    public function showHotelLoginForm()
    {
        return view('auth.loginHotel', ['url' => 'hotel']);
    }

    public function hotelLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('hotel')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $profile = ProfileHotel::where('hotel_id',Auth::guard('hotel')->user()->id)->first();
            return redirect('/hotel/'.$profile->url_slug);

        }
        return redirect()->intended('masuk/hotel')->with('gagalLogin','Password atau Email salah');
    }

    public function showUserLoginForm()
    {
        return view('auth.loginUser', ['url' => 'user']);
    }

    public function userLogin(Request $request, User $user)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $profile = ProfileUser::where('user_id',Auth::guard('user')->user()->id)->first();
            return redirect('/user/'.$profile->url_slug);
        }
        return redirect()->intended('masuk/user')->with('gagalLoginuser','Password atau Email salah');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

//    public function logout(Request $request)
//    {
//        Auth::logout();
//        return view('');
//    }
}
