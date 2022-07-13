<?php

namespace App\Models;

use CodeIgniter\Model;

class TampilpelayananModel extends Model
{
    protected $table = 'pelayanan';
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }
    public function getAllData($id = null)
    {
        if ($id == null) {
            return $this->builder->get();
        } else {
            $this->builder->where('id', $id);
            return $this->builder->get()->getRowArray();
        }
    }
}
