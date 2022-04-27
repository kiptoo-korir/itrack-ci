<?php

namespace App\Models;

use CodeIgniter\Model;

class RepositoryLanguage extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'repository_languages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id', 'repository_id', 'name', 'value'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
