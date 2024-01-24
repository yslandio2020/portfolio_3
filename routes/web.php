<?php

session_start();

$route = $_GET['route'] ?? $_POST['route'];

switch ($route) {
    case 'listProjects':
        include($_SESSION['ROOT_DIR'] . '/App/Controllers/ProjectController.php');
        $projectController = new ProjectController();
        echo json_encode($projectController->getProjects());
        break;
    default:
        header('Location: '. $_SESSION['BASE_URL'] . '/views/portfolio.php');
}

return;
