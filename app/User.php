<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
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
                'nama_lengkap' => $user->name,
                'user_id'=>$user->id,
                'email'=>$user->email,
                'url_slug' => $user->name
            ]);

        });

    }
    public function profile(){
        return $this->hasOne(ProfileUser::class);
    }

    public function mengerjakan(){
        return $this->belongsToMany(Pekerjaan::class, 'pekerjaan_user')->withTimestamps()->withPivot('status');
    }

    public function posisi(){
        return $this->belongsToMany(Posisi::class);
    }

    public function todolist(){
        return $this->belongsToMany(ToDoList::class, 'todolist_user', 'user_id', 'todolist_id')->withTimestamps();
    }

    public function AauthAcessToken(){
        return $this->hasMany(OauthAccessToken::class);
    }
}
