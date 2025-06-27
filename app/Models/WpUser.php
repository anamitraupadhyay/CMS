<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpUser extends Model
{
    protected $table = 'wp_users';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'user_login', 'user_email', 'user_registered',
    ];
}
