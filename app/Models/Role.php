<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model

class Role extends Model
{
    protected $fillable = ['name']; // Ensure mass assignment is allowed

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
