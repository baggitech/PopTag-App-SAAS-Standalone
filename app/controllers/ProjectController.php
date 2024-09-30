<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class ProjectController extends Controller
{
	public function index()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
		// ---------------------------------------------------------------------- //

		$class_project = new Project();
		$data['projects'] = $class_project->getProjectsByUserId($user_id);
		$data['totalEnabled'] = $class_project->getAllProjectsIsEnabledByUserID($user_id);
		$data['totalDisabled'] = $class_project->getAllProjectsIsDisabledByUserID($user_id);

		require_once(__DIR__ . '/forms/project-create.php');
		require_once(__DIR__ . '/forms/project-enabled.php');
		require_once(__DIR__ . '/forms/project-edit.php');
		require_once(__DIR__ . '/forms/project-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/project/index', $data);
	}

	public function edit()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
		// ---------------------------------------------------------------------- //

		$project_id = $_SESSION['project_id'] ?? null;

		$class_project = new Project();
		$data['project'] = $class_project->getProjectByProjectId($project_id);

		require_once(__DIR__ . '/forms/project-update.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/project/edit', $data);
	}
}
