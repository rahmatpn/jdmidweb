<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Hotel;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:hotel');
        $this->middleware('guest:user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showHotelRegisterForm()
    {
        return view('auth.registerHotel', ['url' => 'hotel']);
    }

    public function showUserRegisterForm()
    {
        return view('auth.registerUser', ['url' => 'user']);
    }

    protected function createHotel(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            $hotel = Hotel::create([
                'name' => Str::slug($request['name'], ''),
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[2];
            $str = strval($errorCode);
            if (strpos($str, 'hotels_name_unique')) {
                return redirect()->intended('masuk/hotel')->with("gagal", "duplicate data nama");
            } elseif (strpos($str,'hotels_email_unique')) {
                return redirect()->intended('masuk/hotel')->with("gagal", "duplicate data email");
            }
        }
        return redirect()->intended('masuk/hotel');
    }



    protected function createUser(Request $request)
    {
        try {
        $this->validator($request->all())->validate();
        $user = User::create([
            'name' => Str::slug($request['name'], ''),
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    } catch (QueryException $e) {
        $errorCode = $e->errorInfo[2];
        $str = strval($errorCode);
        if (strpos($str, 'users_name_unique')) {
            return redirect()->intended('masuk/user')->with("gagal", "duplicate data nama");
        } elseif (strpos($str,'users_email_unique')) {
            return redirect()->intended('masuk/user')->with("gagal", "duplicate data email");
        }
    }
        return redirect()->intended('masuk/user');
    }


}
