<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\User\AdminSendRegister;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\User\Register;

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
    protected $redirectTo = '/firma/list';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'min:4', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:16', 'confirmed'],
        ],$this->messages());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        $notification = new Register($user);
        $user->notify($notification);
        return $user;
    }

    public function messages()
    {
        return [
            'name.max'              => '??sim maksimum 120 karakter olmal??d??r.',
            'name.required'         => '??sim zorunludur.',
            'name.string'           => '??sim rakamsal de??erlerden olu??mamal??d??r.',
            'email.max'             => 'Email maksimum 50 karakter olmal??d??r.',
            'email.required'        => 'Email zorunludur.',
            'email.string'          => 'Email rakamsal de??erlerden olu??mamal??d??r.',
            'email.unique'          => 'Bu Email adresi ile zaten bir kay??t olu??turulmu??tur.',
            'password.required'     => '??ifre zorunludur.',
            'password.min'          => '??ifre minumum 8 karakterden olu??mal??d??r.',
            'password.max'          => '??ifre maksimum 16 karakterden olu??mal??d??r.',
            'password.string'       => '??ifre sadece rakamsal de??erlerden olu??mamal??d??r.',
            'password.confirmed'    => '??ifreler birbiriyle uyu??mamaktad??r.',
            'phone.max'             => 'Telefon numaran??z?? do??ru girin ??r. 0532 234 23 22',
            'phone.required'        => 'Telefon numaras?? zorunludur.',
            'phone.min'             => 'Telefon minumum 4 karekterden olu??mal??d??r.'
        ];
    }
}
