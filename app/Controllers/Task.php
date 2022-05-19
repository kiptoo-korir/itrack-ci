<?php

namespace App\Controllers;

use App\Models\Task as TaskModel;
use Config\Database;
use Hermawan\DataTables\DataTable;

class Task extends BaseController
{
    public function getTasks()
    {
        $userId = getAuthId();

        $db = Database::connect();
        $builder = $db->table('tasks')->select(['title', 'description', 'status', 'user_id'])
            ->where('user_id', $userId)->orderBy('created_at', 'DESC');

        return DataTable::of($builder)->toJson(true);
        // return $this->response->setStatusCode(400)->setJSON($builder->get());
    }

    public function taskView()
    {
        helper('user_information');

        $data = [
            'userData' => getAuthUser(),
        ];

        return view('app/task', $data);
    }

    public function deleteTask()
    {
        $this->validate([
            'taskId' => 'required|is_unique[tasks.id]',
        ]);

        $taskId = $this->request->getVar('taskId');

        $taskModel = new TaskModel();

        if ($taskModel->delete($taskId)) {
            return $this->response->setStatusCode(200)->setJSON(['message' => 'Task has been removed.']);
        }
    }

    public function updateTask()
    {
        $this->validate([
            'taskId' => 'required|integer|is_unique[tasks.id]',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $taskModel = new TaskModel();

        $taskId = $this->request->getVar('taskId');

        $updateData = [
            'status' => $this->request->getVar('status'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
        ];

        $updateStatus = $taskModel->update($taskId, $updateData);

        if ($updateStatus) {
            return $this->response->setStatusCode(200)->setJSON(['message' => 'Task has been updated successfully.']);
        }
    }
}
