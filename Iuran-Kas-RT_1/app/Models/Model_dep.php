<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dep extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_dep')
            ->orderBy('id_dep', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_dep')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_dep')
            ->where('id_dep', $data['id_dep'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_dep')
            ->where('id_dep', $data['id_dep'])
            ->delete($data);
    }
}
