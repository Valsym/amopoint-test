<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    /** @use HasFactory<UserFactory> */
    //use HasFactory;

    protected $fillable = ['type', 'setup', 'punchline', 'api_id'];
}
