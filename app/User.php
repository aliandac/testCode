<?php

namespace App;

use App\Models\Comment;
use App\Models\Company\Company;
use App\Models\CurriculumVitae;
use App\Models\Franchising\FranchisingCompany;
use App\Models\Machine\MachineOwner;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Notifications\User\ResetPasswordNotification;

/**
 * Class UserInterface
 * @package App
 * @property string $name
 * @property string|integer $password
 * @property string $email
 * @property integer $id
 * @property  $updated_at
 * @property $phone
 * @method static User|Builder find($id)
 * @method static User|Builder findOrFail($id)
 * @method static User|Builder where($id, $operator, $requirement)
 * @method static User create(array $data)
 * @mixin Builder
 * @method static get()
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password','accessToken'
    ];

    // public function setPasswordAttribute($value)
    // {
    //     $this->attribute['password'] = Hash::make($value);
    // }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return MorphMany
     */
    function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * @return HasMany
     */
    function companies()
    {
        return $this->hasMany(Company::class, 'user_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    function company()
    {
        return $this->belongsTo(Company::class, 'id', 'user_id');
    }

    public function franchisingCompany()
    {
        return $this->hasOne(FranchisingCompany::class,'user','id');
    }

    /**
     * @noinspection PhpUnused
     * @return string
     */
    function getChangePasswordDateAttribute()
    {
        return Carbon::parse($this->updated_at)->diffForHumans();
    }


    /**
     * @noinspection PhpUnused
     * @return int
     */
    function diffInDays()
    {
        $date = Carbon::parse($this->updated_at);
        return $date->diffInDays();
    }


    /**
     * @return bool
     */
    function isAdmin()
    {
        return $this->hasRole('admin');
    }


    /**
     * @return MorphMany
     */
    function entities()
    {
        return $this->morphMany(MachineOwner::class, 'ownerable');
    }


    /**
     * @return HasOne
     */
    function cv()
    {
        return $this->hasOne(CurriculumVitae::class, 'user_id', 'id');
    }

    public function chosedCompany()
    {
        return session()->get('selected-company');
    }

}
