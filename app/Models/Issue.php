<?php

namespace App\Models;

use CodeIgniter\Model;

class Issue extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'issues';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['owner', 'repository', 'issue_no', 'state', 'title', 'body', 'date_created_online', 'date_updated_online', 'labels', 'date_closed_online', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
