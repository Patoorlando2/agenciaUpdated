<?php 
    class Region
    {
        
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $regiones = $stmt->fetchAll();
            return $regiones;
        }

        public function verRegionPorID()
        {

        }

        public function agregarRegion()
        {

        }

        public function modificarRegion()
        {

        }

        public function eliminarRegion()
        {
            
        }
    }

?>