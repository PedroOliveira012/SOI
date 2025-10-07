<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $collection = 'projects';

    protected $fillable = [
        'project_number',
        'project_name',
        'client',
        'contact',
        'short_circuit_level',
        'dps_class',
        'enclosure_type',
        'has_general_metering',
        'has_grounding_switch',
        'has_tension_testing',
        'security_category',
        'has_220V_command',
    ];
}
