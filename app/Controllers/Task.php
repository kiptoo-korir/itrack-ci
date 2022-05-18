<?php

namespace App\Controllers;

use Config\Database;
use Hermawan\DataTables\DataTable;

class Task extends BaseController
{
    public function getTasks()
    {
        $userId = getAuthId();

        $db = Database::connect();
        $builder = $db->table('tasks')->select(['title', 'description', 'status'])
            ->where('user_id', $userId)->orderBy('created_at', 'DESC');

        return DataTable::of($builder)->toJson();
    }

    public function taskView()
    {
        return view('app/task');
    }
}
