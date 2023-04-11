<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_arsip extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_dok_user')
        ->orderBy('id_dok_user','DESC')
        ->get()
        ->getResultArray();
    }

    public function detail_data($id_dok_user)
    {
        return $this->db->table('tbl_dok_user')
        ->where('id_dok_user', $id_dok_user)
        ->get()
        ->getRowArray();
    }

    public function edit($data)
    {
         $this->db->table('tbl_dok_user')
         ->where('id_dok_user',$data['id_dok_user'])
        ->update($data);
    }

    
    public function delete_data($data)
    {
        $this->db->table('tbl_dok_user')
        ->where('id_dok_user',$data['id_dok_user'])
        ->delete($data);
    }
}