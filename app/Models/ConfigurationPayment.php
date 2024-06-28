<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigurationPayment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'adquires',
        'secret_production',
        'id_production',
        'secret_homologation',
        'id_homologation',
        'active',
        'url_homologation',
        'url_production',
        'type',
    ];
}
