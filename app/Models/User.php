<?php

    namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        use Notifiable, SoftDeletes;

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'remember_token',
        ];

        public function orders()
        {
            return $this->hasMany(Order::class);
        }
    }