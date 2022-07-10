<?php 
namespace App\Controllers;

use App\Models\indicadores;
class Crud extends BaseController
{

    public function index (){

        $indicador = new indicadores;
        $datos['indicadores'] = $indicador->orderBy('id','ASC' )->findAll();
        return view('Front/crud/listar',$datos);
    }
    public function ajaxListar(){

        $indicador = new Indicadores;
        $datos = $indicador->orderBy('id','ASC' )->findAll();
        echo json_encode($datos);
    }
    
    public function viewGuardar(){
        return view('Front/crud/create');
    }

    public function guardar (){
               
        
        $validation = service('validation');
        $validation->setRules(
        [
            'inputIndicador' => 'required',
            'inputValor' => 'required|numeric',
            'inputFecha' => 'required'
        ],
        [   // Errors
            'inputIndicador' => [
                'required' => 'El Indicador es requerido',
            ],
            'inputValor' => [
                'required' => 'El Valor es requerido',
                'numeric'  => 'Solo se deben Ingresar numero',
            ],
            'inputFecha' => [
                'required' => 'La fecha es requerida',
            ],
        ]
    );

    if(!$validation -> withRequest($this->request)->run())
    {
        
        echo json_encode($validation->getErrors());
        $this->response->setStatusCode(400);
    
    }
    else{
         $insert = new Indicadores;
         $datos = [
             'indicador' => $this->request->getVar('inputIndicador'),
             'valor' => $this->request->getVar('inputValor'),
             'fecha_ingreso' => $this->request->getVar('inputFecha')
         ];
         $insert->insert($datos);
               
        }
    }
        
        
        
    
    public function delete($id=null){

        $borrar = new Indicadores();


        $borrar->where('id',$id)->delete($id);

       
    }

    public function edit($id=null){
        
        $update = new Indicadores();

        $datos['update'] = $update->where('id',$id)->first();

        return view('Front/crud/edit',$datos);
    }

    public function update(){

        $validation = service('validation');
                $validation->setRules(
                [
                    'inputIndicadorUpdate' => 'required',
                    'inputValorUpdate' => 'required|numeric',
                    'inputFechaUpdate' => 'required'
                ],
                [   // Errors
                    'inputIndicadorUpdate' => [
                        'required' => 'El Indicador es requerido',
                    ],
                    'inputValorUpdate' => [
                        'required' => 'El Valor es requerido',
                        'numeric'  => 'Solo se deben Ingresar numero',
                    ],
                    'inputFechaUpdate' => [
                        'required' => 'La fecha es requerida',
                    ],
                ]
            );

            if(!$validation -> withRequest($this->request)->run())
            {
                echo json_encode($validation->getErrors());
                $this->response->setStatusCode(400);
            }
            else{
                $update = new Indicadores();
        
                $datos = [
                    'indicador' => $this->request->getVar('inputIndicadorUpdate'),
                    'valor' => $this->request->getVar('inputValorUpdate'),
                    'fecha_ingreso' => $this->request->getVar('inputFechaUpdate')
                ];
                $id=$this->request->getVar('idUpdate');
                $update->update($id,$datos);
               
                // $datosTabla['update'] = $update->where('id',$id)->first();
                // return view('Front/crud/edit',$datosTabla);
            }
        
       
        
        
    }
    

    
}