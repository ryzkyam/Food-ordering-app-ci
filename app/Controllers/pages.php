<?php

namespace App\Controllers;

class pages extends BaseController
{


  public function home()
  {
    $this->response->setHeader('Cache-Control', 'no-cache, no-store, must-revalidate');

    return view("pages/home");
    // Di dalam controller atau sebelum mengirim respons
    return view('login_view');
  }

  public function about()
  {

    return view("pages/about");
  }


  public function pesanan()
  {

    return view("pages/pesanan");
  }

  public function shope()
  {

    return view("pages/shope");
  }

  public function latihan1()
  {

    return view("pages/latihan1");
  }

  public function keranjang()
  {
    return view("pages/keranjang");
  }

  public function makanan()
  {
    return view("makanan/index");
  }

  public function datmakanan()
  {
    view("datamakanan/index");
  }


}
