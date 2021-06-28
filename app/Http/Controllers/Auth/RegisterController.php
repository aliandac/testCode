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
            'name.max'              => 'İsim maksimum 120 karakter olmalıdır.',
            'name.required'         => 'İsim zorunludur.',
            'name.string'           => 'İsim rakamsal değerlerden oluşmamalıdır.',
            'email.max'             => 'Email maksimum 50 karakter olmalıdır.',
            'email.required'        => 'Email zorunludur.',
            'email.string'          => 'Email rakamsal değerlerden oluşmamalıdır.',
            'email.unique'          => 'Bu Email adresi ile zaten bir kayıt oluşturulmuştur.',
            'password.required'     => 'Şifre zorunludur.',
            'password.min'          => 'Şifre minumum 8 karakterden oluşmalıdır.',
            'password.max'          => 'Şifre maksimum 16 karakterden oluşmalıdır.',
            'password.string'       => 'Şifre sadece rakamsal değerlerden oluşmamalıdır.',
            'password.confirmed'    => 'Şifreler birbiriyle uyuşmamaktadır.',
            'phone.max'             => 'Telefon numaranızı doğru girin ör. 0532 234 23 22',
            'phone.required'        => 'Telefon numarası zorunludur.',
            'phone.min'             => 'Telefon minumum 4 karekterden oluşmalıdır.'
        ];
    }
}
