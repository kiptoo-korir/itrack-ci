<?php

namespace App\Models;

use CodeIgniter\Model;

class Repository extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'repositories';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['name', 'fullname', 'owner', 'platform', 'repository_id', 'description', 'date_created_online', 'date_updated_online', 'date_pushed_online', 'issues_count'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
