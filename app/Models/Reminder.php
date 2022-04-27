<?php

namespace App\Models;

use CodeIgniter\Model;

class Reminder extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'reminders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['owner', 'project', 'message', 'title', 'due_date', 'type'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
