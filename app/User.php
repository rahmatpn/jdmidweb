<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $guard = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            ProfileUser::create([
                'nama'=> $user->name,
                'id_user'=>$user->id,
                'email'=>$user->email
            ]);

        });

    }
    public function profile(){
        return $this->hasOne(ProfileUser::class);
    }

    public function mengerjakan(){
        return $this->belongsToMany(Pekerjaan::class);
    }

    public function posisi(){
        return $this->belongsToMany(Posisi::class);
    }
}
