<?php
namespace App\Controllers;

use PhpParser\Builder\Function_;

class makanan extends BaseController
{
    public function index()
{

    $data = [
        'title' => 'Daftar Makanan'
    ];
    return view('makanan/index', $data);
}

    public function details()
    
    {
        
    }

    public function keranjang()
    {

    }

    public function pesanan(){
        
    }

}
?>