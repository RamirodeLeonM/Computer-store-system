<?php


namespace App\Controllers;
use App\Models\ComputadoraModel;
use CodeIgniter\HTTP\IncomingRequest;


class Computadora extends BaseController
{
   protected $computadoraModel;
   protected $uri;
   protected $request;

   public function __construct(){
    $this->computadoraModel = new ComputadoraModel();
    $this->uri = service('uri');
    $this->request = service('request');
   }
   //ver listado de computadoras
   public function listar_computadoras(){
    $result=$this->computadoraModel->getComputadoras();
    $datos["computadoras"] = $result;
    return view("listadocomputadoras", $datos);
   }
   //ver el formulario
   public function formulario_computadora(){
    return view ("insertarcomputadora");
   }
   //insertar computadora
   public function insertar_computadora(){
    $computadora["marca"]=$this->request->getPost("marca");
    $computadora["modelo"]=$this->request->getPost("modelo");
    $computadora["procesador"]=$this->request->getPost("procesador");
    $computadora["almacenamiento"]=$this->request->getPost("almacenamiento");
    $computadora["ram"]=$this->request->getPost("ram");
    $computadora["so"]=$this->request->getPost("so");
    $computadora["pantalla"]=$this->request->getPost("pantalla");
    $computadora["tarjetavideo"]=$this->request->getPost("tarjetavideo");
    $computadora["descripcion"]=$this->request->getPost("descripcion");  
    $result = $this->computadoraModel->insertComputadoras($computadora);
    
    $result=$this->computadoraModel->getComputadoras();
    $datos["computadoras"] = $result;
    return view("listadocomputadoras", $datos);
    }
    //borrar computadora
   public function borrar_computadora(){
    $id=$this->uri->getSegment(2); 
    $result =$this->computadoraModel->deleteComputadora($id);
   
    /*$result=$this->computadoraModel->getComputadoras();
    $datos["computadoras"] = $result;
    return view("listadocomputadoras", $datos);*/
    return redirect()->to(base_url('/public/listadocomputadoras'));
    }
    //ver el formulario para editar
   public function formularioeditar_computadora(){
    $id=$this->uri->getSegment(2); 
    $result =$this->computadoraModel->getComputadoraEditar($id);
    $datos["computadoras"] = $result;
    return view("editarcomputadora", $datos);
    }
    //actualizar usuario
   public function actualizar_computadora(){
    $id=$this->uri->getSegment(2);

    $computadora["marca"]=$this->request->getPost("marca");
    $computadora["modelo"]=$this->request->getPost("modelo");
    $computadora["procesador"]=$this->request->getPost("procesador");
    $computadora["almacenamiento"]=$this->request->getPost("almacenamiento");
    $computadora["ram"]=$this->request->getPost("ram");
    $computadora["so"]=$this->request->getPost("so");
    $computadora["pantalla"]=$this->request->getPost("pantalla");
    $computadora["tarjetavideo"]=$this->request->getPost("tarjetavideo");
    $computadora["descripcion"]=$this->request->getPost("descripcion"); 

    $result = $this->computadoraModel->updateComputadora($computadora, $id);
    
    /*$result=$this->computadoraModel->getComputadoras();
    $datos["computadoras"] = $result;
    return view("listadocomputadoras", $datos);*/
    return redirect()->to(base_url('/public/listadocomputadoras'));
    }

   
}


?>