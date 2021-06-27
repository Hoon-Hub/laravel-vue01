<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $connection = 'laravel_vue_01';
    protected $table = 'users';
    public $timestamps = false;
}
