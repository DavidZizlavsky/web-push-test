<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\TaskModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectController extends BaseController
{
    public function index()
    {
        $projectModel = new ProjectModel();

        return view('projects/index', [
            'projects' => $projectModel->orderBy('id', 'DESC')->findAll(),
        ]);
    }

    public function show(int $id)
    {
        $projectModel = new ProjectModel();
        $taskModel    = new TaskModel();

        $project = $projectModel->find($id);

        if (! $project) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Projekt nebyl nalezen.');
        }

        return view('projects/show', [
            'project' => $project,
            'tasks'   => $taskModel->where('project_id', $id)->findAll(),
        ]);
    }

    public function new()
    {
        return view('projects/new');
    }

    public function create()
    {
        $projectModel = new ProjectModel();

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        if (! $projectModel->insert($data)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $projectModel->errors());
        }

        return redirect()->to('/projects');
    }
}
