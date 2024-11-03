<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'funding_goal',
        'duration',
        'category',
        'image_path',
        'video_url',
        'status', // Ej. para estado de aprobación: pendiente, aprobado, rechazado
        'user_id', // Para relacionarlo con el emprendedor que creó el proyecto
    ];
}
