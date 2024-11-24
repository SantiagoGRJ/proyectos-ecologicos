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
        'path_img',
        'video_url',
        'status', // Ej. para estado de aprobación: pendiente, aprobado, rechazado
        'user_id', // Para relacionarlo con el emprendedor que creó el proyecto
    ];

    public static function search($query)
    {
    return Project::where('status', 'aprobado') // Asegúrate de filtrar por estado aprobado
        ->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%"); // Asegúrate de que la columna 'number' exista
        })
        ->paginate(5); // Paginar resultados
    }
}
