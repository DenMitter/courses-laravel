<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const ROLE_STUDENT = 3;
    const ROLE_TEACHER = 2;
    const ROLE_ADMIN = 1;
    const ROLE_GUEST = 0;

    public static function getRoles() {
        return [
            self::ROLE_STUDENT => "Студент",
            self::ROLE_TEACHER => "Викладач",
            self::ROLE_ADMIN => "Адміністратор",
            self::ROLE_GUEST => "Гість"
        ];
    }

    public static function getRole($role) {
        switch($role) {
            case 0: return "Гість";
            case 1: return "Адміністратор";
            case 2: return "Викладач";
            case 3: return "Студент";
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
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
        'password' => 'hashed',
    ];

    public function courses() {
        return $this->belongsToMany(Course::class, 'user_course', 'user_id', 'course_id');
    }

    public function students() {
        return $this->belongsToMany(User::class, 'teacher_user', 'teacher_id', 'user_id');
    }

    public function teachers() {
        return $this->belongsToMany(User::class, 'teacher_user', 'user_id', 'teacher_id');
    }
}
