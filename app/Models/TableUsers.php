<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TableUsers extends Model
{
    use HasFactory;

    protected $table = '_table_users';

    protected $fillable = [
        'Code',
        'Monto',
        'fecha',
        'UserGithub',
    ];
}
