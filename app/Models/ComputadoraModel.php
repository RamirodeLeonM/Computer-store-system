<?php


namespace App\Models;

use CodeIgniter\Model;

class ComputadoraModel extends Model
{
    //ver computadora
    public function getComputadoras(){
        $builder = $this->db->table("computadoras");
        $builder->select('*');
        $result = $builder->get();
        return $result->getResultArray();
    }
    //insertar computadora
    public function insertComputadoras($computadora){
        $builder = $this->db->table("computadoras");
        $result = $builder->insert($computadora);
        return $result;
    }
    //borrar computadora
    public function deleteComputadora($id){
        $result =$this->db->query("Delete from computadoras where idcomputadoras = $id");
        return $result;
    }
    //traer los datos segun el id
    public function getComputadoraEditar($id){
        $result =$this->db->query("Select * from computadoras where idcomputadoras = $id");
        return $result->getResultArray();
    }
    public function updateComputadora($computadora, $id){
        $builder = $this->db->table("computadoras");         
        $builder->set('marca', $computadora["marca"]);
        $builder->set('modelo', $computadora["modelo"]);
        $builder->set('procesador', $computadora["procesador"]);
        $builder->set('almacenamiento', $computadora["almacenamiento"]);
        $builder->set('ram', $computadora["ram"]);
        $builder->set('so', $computadora["so"]);
        $builder->set('pantalla', $computadora["pantalla"]);
        $builder->set('tarjetavideo', $computadora["tarjetavideo"]);
        $builder->set('descripcion', $computadora["descripcion"]);   
        $builder->where('idcomputadoras', $id);
        $builder->update();
    
}

}

?>