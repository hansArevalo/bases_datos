<?php

namespace App\Models;
use CodeIgniter\Model;

class TareaMode extends Model{
    protected $table         = 'tareas';
    protected $primaryKey    = 'id';

    protected $allowedFields = ['titulo', 'descripcion'];
    protected $returnType    = 'array';
    protected $useTimestamps = true;
}