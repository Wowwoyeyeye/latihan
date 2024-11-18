<?php 

namespace App\Controllers;
use App\Models\UserModel;

class Halaman extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Pemrograman Internet',
      'tes' => [1,2,3,4,5]
    ];
     
    return view('halaman/home', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'Home | Pemrograman Internet'
    ];

    return view('halaman/about', $data);
  }

  public function parameter($nama = '')
  {
    echo "Halo Selamat Datang $nama";
  }

  public function contact()
{
  $model = new UserModel();
    $data['users'] = $model->findAll();
    $data['title'] = "Contact Page";

    return view('halaman/contact', $data);   
}

public function login()
{
    $data = [
        'title' => 'Login | Pemrograman Internet'
    ];

    return view('halaman/login', $data);
}

}

?>