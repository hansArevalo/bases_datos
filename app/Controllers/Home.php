<?php
namespace App\Controllers;
use App\Models\TareaMode;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function insertar(){
        
        $model = new TareaMode();
        
        $request = \Config\Services::request();
        
        $data=[
            "titulo" => $request->getPost('titulo'),
            "descripcion" => $request->getPost('descripcion')
        ];
        echo $data.index[0];
        $model->insert($data); 
        
        echo json_encode(["msg"=> "creado"]);





    }
}
