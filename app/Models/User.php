<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * This is the model class for the table "users"
 *
 * @property integer  $id
 * @property string   $first_name
 * @property string   $last_name
 * @property string   $email
 * @property DateTime $email_verified_at
 * @property string   $password
 * @property string   $remember_token

 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @mixin Builder
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * One-to-Many relationship on user -> events.
     *
     * @return void
     *
     */
    public function events()
    {
        $this->hasMany(Event::class);
    }

    /**
     * One-to-Many relationship on user -> polls.
     *
     * @return void
     */
    public function polls()
    {
        $this->hasMany(Poll::class);
    }

    /**
     * One-to-Many relationship on user -> headlines.
     *
     * @return HasMany
     */
    public function headlines(): HasMany
    {
        return $this->hasMany(Headline::class);
    }

    /**
     * Gets full name of the user
     */
    public function fullName()
    {
        return "$this->first_name $this->full_name";
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
