<?php


namespace App\Http\Controllers\Admin\Company;


use App\User as UserModel;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

/**
 * Class User
 * @package App\Http\Controllers\Admin\Company
 * @method static all()
 */
class User
{


    /**
     * @param $userName
     * @param $email
     * @param $phone
     * @return UserModel|Collection
     */
    static function create($userName, $email,$phone)
    {
        $exists = UserModel::where('email','=', $email)->exists();
        if($exists)
            return UserModel::where('email','=', $email)->firstOrFail();

        /**
         * @var  UserModel $user
         */
       $user = new UserModel();
       $user->name = mb_strtolower(str_replace(' ','',$userName));
       $user->password = Hash::make('nacarmedya');
       $user->email = $email;
       $user->phone = $phone;
       $user->save();

       return $user;
    }
}
