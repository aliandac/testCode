<?php

namespace App\Phpdoc;


use App\User;

/**
 * @author dılo sürücü <berxudar@gmail.com>
 * Class UserInterface
 * @package App\Interfaces
 * @mixin User
 *
 *
 *
 */
abstract class UserInterface
{
    /**
     * @var integer $id
     *
     */
    public $id;

    /**
     * @var string $name
     *
     */
    public $name;

    /**
     * @var string $password
     *
     */
    public $password;

    /**
     * @var string $email
     *
     */
    public $email;
}
