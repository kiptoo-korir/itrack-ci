<?php

namespace App\Models;

use CodeIgniter\Model;

class AccessToken extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'access_tokens';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['owner', 'platform', 'access_token', 'verified', 'scope', 'type'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
