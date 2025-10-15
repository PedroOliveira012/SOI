<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Kits extends Model
{
    use HasFactory;

    protected $collection = 'kits';

    protected $guarded = [];
}
