<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';
    protected $guarded = [];

    public function getAuthIdentifierName()
    {
        return 'id'; // Adjust based on your primary key column name
    }


    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function isAdmin()
    {
        return true; // Implement your logic to check if the user is an admin
    }

    public function getNameAttribute()
    {
        return $this->attributes['name'];
    }
}
