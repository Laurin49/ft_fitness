<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    const ROLES = [
        'Admin' => 'Admin',
        'Trainer' => 'Trainer',
        'User' => 'User',
        'Guest' => 'Guest',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
