<?php

namespace App\Models;

use CodeIgniter\Model;

class Notification extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'notifications';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = false;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['id', 'type', 'notifiable_type', 'notifiable_id', 'data', 'read_at', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
