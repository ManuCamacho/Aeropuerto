<?php
    class Pasajero{
        private int $idPasajero;
        private string $nombre;
        private string $apellidos;
        private int $edad;
        private int $idVuelo;

        
        public function getIdPasajero()
        {
                return $this->idPasajero;
        }


        public function setIdPasajero($idPasajero)
        {
                $this->idPasajero = $idPasajero;

                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getApellidos()
        {
                return $this->apellidos;
        }

        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }


        public function getEdad()
        {
                return $this->edad;
        }


        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }

        public function getIdVuelo()
        {
                return $this->idVuelo;
        }

 
        public function setIdVuelo($idVuelo)
        {
                $this->idVuelo = $idVuelo;

                return $this;
        }
    }
?>