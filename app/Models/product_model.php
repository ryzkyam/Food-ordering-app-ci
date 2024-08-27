<?php

namespace App\Models;


use CodeIgniter\Model;

class product_model extends Model
{
    protected $table = "member";

    public function getdata() {

        $query = $this->db-query("SELECT * FROM products ORDER BY product ASC");

        return $query->get_Result();
    }
}