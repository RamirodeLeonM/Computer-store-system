<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    //ver usuarios
    public function getUsuarios(){
        /*$result = $this->db->query("Select * from usuarios");*/
        $builder = $this->db->table("usuarios");
        $builder->select('*');
        $result = $builder->get();
        return $result->getResultArray();
    }
    //insertar usuario
    public function insertUsuario($usuario){
        $builder = $this->db->table("usuarios");
        $result = $builder->insert($usuario);
        return $result;
    }
    //borrar usuario
    public function deleteUsuario($id){
        $result =$this->db->query("Delete from usuarios where idusuario = $id");
        return $result;
    }

    //traer los datos segun el id
    public function getUsuariosEditar($id){
        $result =$this->db->query("Select * from usuarios where idusuario = $id");
        return $result->getResultArray();
    }

    public function updateUsuario($usuario, $id){
            $builder = $this->db->table("usuarios"); 
            $builder->set('nombre', $usuario["nombre"]);
            $builder->set('apellido', $usuario["apellido"]);
            $builder->set('usuario', $usuario["usuario"]);
            $builder->set('contra', $usuario["contra"]);            
            $builder->where('idusuario', $id);
            $builder->update();
        
    }
    public function ingresarLogin($usuario){
        $query =$this ->db->query("select * from usuarios");
        foreach($query->getResult() as $row){
            if($usuario["usuario"] == $row->usuario && $usuario["contra"] == $row->contra){
                return $var=1;
            }
        }return $var =0;
    }
    
    

}

?>