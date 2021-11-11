 <?php

class Mascota_model extends CI_Model{

    public function __construct(){
          parent::__construct();
    }

    public function getAll(){
            return $this->db->get("mascotas")->result();
    }

    public function guardar($datos){
    
        $this->db->insert("mascotas",$datos);
    }

    public function actualizar($codigo){

        $this->db->update("mascotas",$codigo);
    }

    public function eliminar($codigo){

        $this->db->delete("mascotas",$codigo);
    }
}