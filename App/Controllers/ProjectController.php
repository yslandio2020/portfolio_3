<?php

use App\Models\Project;
include($_SESSION['ROOT_DIR'] . '/App/Models/Project.php');

class ProjectController
{
    public function getProjects()
    {
        $projects = Project::get();
        
        return $projects;
    }
}
