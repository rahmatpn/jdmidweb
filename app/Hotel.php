<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Hotel extends Authenticatable
{
    use Notifiable;

    protected $guard = 'hotel';

    protected $fillable = [
        'name', 'email', 'password',
    ];

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

        static::created(function ($hotel) {
            ProfileHotel::create([
                'nama' => $hotel->name,
                'hotel_id' => $hotel->id,
                'email' => $hotel->email,
                'url_slug' => $hotel->name
            ]);

        });
    }

    public function profile(){
        return $this->hasOne(ProfileHotel::class);
    }

    public function pekerjaan(){
        return $this->hasMany(Pekerjaan::class)->orderBy('created_at','DESC');
    }
}
