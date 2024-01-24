<?php

namespace App\Models;

class Project
{
    public static function get()
    {
        $projects = (object) [
            (object) [
                'id' => 1,
                'image' => 'brejacontrol_1.png',
                'name' => 'BrejaControl',
                'description' => 'Sistema de gestão de processos de produção cervejeiro. Acesse o manual para mais informações. O <a href="' . $_SESSION["BASE_URL"] . '/storage/manuals/brejacontrol.pdf" target="_blank">manual</a> ainda não está completo, pois são informações retiradas do TCC que ainda está sendo finalizado.',
                'server' => '#',
                'github' => '#',
                'technologies' => (object) ['HTML', 'CSS', 'JavaScript', 'JQuery', 'Bootstrap', 'MySQL', 'PHP', 'Laravel', 'Livewire', 'LavaCharts', 'Dompdf'],
                'created_at' => '2020-01-01 00:00:00',
            ],
            (object) [
                'id' => 2,
                'image' => 'sistcc_1.png',
                'name' => 'SISTCC',
                'description' => 'Sistema de Trabalho de Conclusão de Curso. Acesse o <a href="' . $_SESSION["BASE_URL"] . '/storage/manuals/sistcc.pdf" target="_blank">manual</a> para mais informações.',
                'server' => '#',
                'github' => '#',
                'technologies' => (object) ['HTML', 'CSS', 'JavaScript', 'JQuery', 'Bootstrap', 'MySQL', 'PHP', 'Laravel', 'Livewire', 'Dompdf'],
            ],
        ];

        return $projects;
    }

    public static function find($id)
    {
        $projects = Project::get();

        foreach ($projects as $project) {
            if ($project->id == $id) {
                return $project;
            }
        }

        return null;
    }
}
