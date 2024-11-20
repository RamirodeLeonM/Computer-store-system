<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\IncomingRequest;


class Usuario extends BaseController
{
   protected $usuarioModel;
   protected $uri;
   protected $request;

   public function __construct(){
    $this->usuarioModel = new UsuarioModel();
    $this->uri = service('uri');
    $this->request = service('request');
   }
   //ver listado de usuarios
   public function listar_usuarios(){
    $result=$this->usuarioModel->getUsuarios();
    $datos["usuarios"] = $result;
    return view("listadousuario", $datos);
   }
   //ver pagina principal
   public function principal(){
      return view ("principal");
   }
   //ver el formulario
   public function formulario_usuario(){
      return view("insertarusuario");
   }
   //insertar usuario
   public function insertar_usuario(){
      $usuario["nombre"]=$this->request->getPost("nombre");
      $usuario["apellido"]=$this->request->getPost("apellido");
      $usuario["usuario"]=$this->request->getPost("usuario");
      $usuario["contra"]=$this->request->getPost("contra");
      $result = $this->usuarioModel->insertUsuario($usuario);

      return view("index");
   }
   //borrar usuario
   public function borrar_usuario(){
      $id=$this->uri->getSegment(2); //id del elemento en ruta
      $result =$this->usuarioModel->deleteUsuario($id);

      /*$result=$this->usuarioModel->getUsuarios();
      $datos["usuarios"] = $result;
      return view("listadousuario", $datos);*/
      return redirect()->to(base_url('/public/listadousuarios'));


   }
   //ver el formulario para editar
   public function formularioeditar_usuario(){
      $id=$this->uri->getSegment(2); //id del elemento en ruta
      $result =$this->usuarioModel->getUsuariosEditar($id);
      $datos["usuarios"] = $result;
      return view("editarusuario", $datos);
   }
   //actualizar usuario
   public function actualizar_usuario(){
      $id=$this->uri->getSegment(2);
      $usuario["nombre"]=$this->request->getPost("nombre");
      $usuario["apellido"]=$this->request->getPost("apellido");
      $usuario["usuario"]=$this->request->getPost("usuario");
      $usuario["contra"]=$this->request->getPost("contra");
      $result = $this->usuarioModel->updateUsuario($usuario, $id);
      
      /*$result=$this->usuarioModel->getUsuarios();
      $datos["usuarios"] = $result;
      return view("listadousuario", $datos);*/
      return redirect()->to(base_url('/public/listadousuarios'));
   }
   //ver el formulario de login
   public function formulario_login(){      
      return view("index");
   }

   public function login(){
      $usuario["usuario"]=$this->request->getPost("usuario");
      $usuario["contra"]=$this->request->getPost("contra");
      $result = $this->usuarioModel->ingresarLogin($usuario);
      if($result==1){
         $data=['usuario' => $usuario["usuario"]];
         $session = session();
         $session ->set($data);
         return view ("principal");
      }else{
         return view("index");
      }

   }
   public function salir(){
      $session = session();
      $session->destroy();
      return view("index");
   }

   

}


?>