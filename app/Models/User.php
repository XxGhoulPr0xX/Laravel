<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ //atributo ordenable
        'name',
        'email',
        'password',
        'profession_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'isAdmin'=>'boolean'
    ];
    //Para comprobar si el usuario coincide con el valor dado
    public function isAdmin(){
        return $this->email=='user1@gmail.com';
    }
    //Encontrar por email
    public static function findByEmail($email){
        return static::where('email',$email)->first();
    }
    // Sirve para hacer consultas que no se encuentran dentro de su tabla
    public function profession(){
        return $this->belongsTo(Profession::class);
    }
}
