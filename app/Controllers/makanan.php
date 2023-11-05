<?php
namespace App\Controllers;



class makanan extends BaseController
{
    public function index()
{

    $data = [
        'title' => 'Daftar Makanan'
    ];
    return view('makanan/index', $data);
}
}
?>