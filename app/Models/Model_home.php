<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_home extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_dok_user')->orderBy('id_dok_user','DESC')
        ->get()
        ->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_dok_user')->insert($data);
    }
}

