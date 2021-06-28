<?php


namespace App\Services\User;

use App\User as UserModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

/**
 *
 * Class UserRole user roles adapter for isAdmin makeAdmin vs etc
 * @package App\Services\User
 */
class UserRole
{

    /**
     * @var UserModel $user
     */
    private $user;


    /**
     * UserRole constructor.
     *  /**
     * User constructor.
     * @param UserModel|Authenticatable|\Illuminate\Contracts\Auth\Authenticatable|null $user
     */
    public function __construct(UserModel $user = null)
    {
        $this->user = $user ?: Auth::user();
    }

    /**
     * @noinspection PhpUnused
     * @return UserModel|Collection
     */
    function makeAdmin()
    {

        if (!$this->user->hasRole('admin'))
            return $this->user->assignRole('admin');

        return $this->user->roles()->where('name', 'admin')->get();
    }


    /**
     * @noinspection PhpUnused
     * @return bool
     */
    function isAdmin()
    {
        return (boolean)$this->user->hasRole('admin');
    }


    /**
     * @noinspection PhpUnused
     * @return UserModel
     */
    function removeAdmin()
    {
        return $this->user->removeRole('admin');
    }


    /**
     * @noinspection PhpUnused
     * @return Collection
     */
    function roles()
    {
        return $this->user->roles()->get();
    }


    /**
     * @noinspection PhpUnused
     * @return \Illuminate\Support\Collection
     */
    function roleNames()
    {
        return $this->roles()->pluck('name');
    }


    /**
     * @return UserModel|\Illuminate\Contracts\Auth\Authenticatable|null
     */
    function user()
    {
        return $this->user;
    }


    /**
     * @param $name
     * @param null $arguments
     * @return mixed
     *
     */
    public function __call($name, $arguments = null)
    {
        return $this->user->$name(...$arguments);
    }
}
