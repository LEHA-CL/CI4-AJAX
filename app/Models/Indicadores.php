<?php 
namespace App\Models;

use CodeIgniter\Model;

class Indicadores extends Model{
    protected $table      = 'indicadores';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields = ['id','indicador','valor','fecha_ingreso'];
}