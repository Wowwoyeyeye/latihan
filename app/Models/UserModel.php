<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'user';
  protected $primaryKey = 'id';
  protected $allowedFields = ['tipe', 'alamat', 'kota'];

  public function getContact ()
  {
    return $this->findAll();
  }
}