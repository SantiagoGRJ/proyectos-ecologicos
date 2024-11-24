<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'name' => 'Proyecto Energía Solar para Todos',
                'description' => 'Instalación de paneles solares en comunidades rurales para promover el uso de energías renovables.',
                'funding_goal' => 20000.00,
                'duration' => 180,
                'category' => 'energia_solar',
                'user_id' => 1,
                'status' => 'aprobado',
                'path_img' => '1.png'
            ],
            [
                'name' => 'Reciclaje en la Ciudad',
                'description' => 'Iniciativa de reciclaje y recolección de materiales reciclables en zonas urbanas.',
                'funding_goal' => 15000.00,
                'duration' => 150,
                'category' => 'reciclaje',
                'user_id' => 2,
                'status' => 'pendiente',
                'path_img' => '2.jpg'
            ],
            [
                'name' => 'Reforestación en Amazonas',
                'description' => 'Reforestación masiva en la región amazónica para combatir la deforestación y promover la biodiversidad.',
                'funding_goal' => 50000.00,
                'duration' => 365,
                'category' => 'reforestacion',
                'user_id' => 3,
                'status' => 'aprobado',
                'path_img' => '3.jpeg'
            ],
            [
                'name' => 'Agricultura Sostenible para el Futuro',
                'description' => 'Proyectos de agricultura orgánica y sostenible en zonas rurales para mejorar la producción de alimentos.',
                'funding_goal' => 25000.00,
                'duration' => 200,
                'category' => 'agricultura_sostenible',
                'user_id' => 4,
                'status' => 'rechazado',
            ],
            [
                'name' => 'Energía Renovable para Comunidades',
                'description' => 'Desarrollo de pequeños proyectos de energía renovable en comunidades aisladas.',
                'funding_goal' => 30000.00,
                'duration' => 180,
                'category' => 'energia_renovable',
                'user_id' => 5,
                'status' => 'pendiente',
            ],
            [
                'name' => 'Proyecto de Energía Eólica',
                'description' => 'Instalación de turbinas eólicas en zonas costeras para generación de energía limpia.',
                'funding_goal' => 45000.00,
                'duration' => 220,
                'category' => 'energia_renovable',
                'user_id' => 6,
                'status' => 'aprobado',
            ],
            [
                'name' => 'Reciclaje de Plástico en Escuelas',
                'description' => 'Reciclaje de plásticos y educación ambiental en las escuelas para crear conciencia ecológica.',
                'funding_goal' => 10000.00,
                'duration' => 150,
                'category' => 'reciclaje',
                'user_id' => 7,
                'status' => 'rechazado',
            ],
            [
                'name' => 'Energía Solar en Zonas Aisladas',
                'description' => 'Instalación de paneles solares en zonas rurales y comunidades aisladas de difícil acceso.',
                'funding_goal' => 35000.00,
                'duration' => 180,
                'category' => 'energia_solar',
                'user_id' => 8,
                'status' => 'aprobado',
            ],
            [
                'name' => 'Reforestación en el Caribe',
                'description' => 'Proyecto de reforestación en las Islas del Caribe para restaurar ecosistemas degradados.',
                'funding_goal' => 25000.00,
                'duration' => 240,
                'category' => 'reforestacion',
                'user_id' => 9,
                'status' => 'pendiente',
            ],
            [
                'name' => 'Agricultura Sostenible en Zonas Urbanas',
                'description' => 'Fomento de huertos urbanos y agricultura sostenible en áreas urbanas para promover la autosuficiencia alimentaria.',
                'funding_goal' => 12000.00,
                'duration' => 160,
                'category' => 'agricultura_sostenible',
                'user_id' => 10,
                'status' => 'rechazado',
            ],
            [
                'name' => 'Proyecto de Reciclaje Electrónico',
                'description' => 'Reciclaje de dispositivos electrónicos obsoletos para reducir la contaminación por residuos tecnológicos.',
                'funding_goal' => 20000.00,
                'duration' => 180,
                'category' => 'reciclaje',
                'user_id' => 11,
                'status' => 'pendiente',
            ],
            [
                'name' => 'Plantas Solares para Empresas',
                'description' => 'Instalación de plantas solares en empresas para reducir su huella de carbono y costos energéticos.',
                'funding_goal' => 60000.00,
                'duration' => 250,
                'category' => 'energia_solar',
                'user_id' => 12,
                'status' => 'aprobado',
            ],
            [
                'name' => 'Educación sobre Energía Renovable',
                'description' => 'Campaña educativa para promover el uso de energías renovables en comunidades locales.',
                'funding_goal' => 15000.00,
                'duration' => 180,
                'category' => 'energia_renovable',
                'user_id' => 13,
                'status' => 'pendiente',
            ],
            [
                'name' => 'Energía Eólica para Ciudades',
                'description' => 'Instalación de turbinas eólicas en ciudades para promover el uso de energía limpia a gran escala.',
                'funding_goal' => 50000.00,
                'duration' => 200,
                'category' => 'energia_renovable',
                'user_id' => 14,
                'status' => 'rechazado',
            ],
            [
                'name' => 'Reforestación en el Desierto',
                'description' => 'Proyecto de reforestación para restaurar ecosistemas y combatir la desertificación en regiones áridas.',
                'funding_goal' => 40000.00,
                'duration' => 365,
                'category' => 'reforestacion',
                'user_id' => 15,
                'status' => 'aprobado',
            ],
            [
                'name' => 'Agricultura Sostenible en el Trópico',
                'description' => 'Iniciativas agrícolas sostenibles en países tropicales para promover la biodiversidad y la salud del suelo.',
                'funding_goal' => 30000.00,
                'duration' => 220,
                'category' => 'agricultura_sostenible',
                'user_id' => 16,
                'status' => 'pendiente',
            ],
            [
                'name' => 'Proyecto de Reciclaje de Papel',
                'description' => 'Iniciativa para el reciclaje de papel y la reducción de desechos en empresas y hogares.',
                'funding_goal' => 10000.00,
                'duration' => 150,
                'category' => 'reciclaje',
                'user_id' => 17,
                'status' => 'rechazado',
            ],
        ];


    foreach ($projects as $project) {
    Project::create($project);
    }

    }
}
