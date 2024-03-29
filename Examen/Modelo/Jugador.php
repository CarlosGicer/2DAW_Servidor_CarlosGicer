<?php

    class Usuario {

        private $id;
        private $nombre;
        private $email;
        private $password;
        private $apodo;
        private $nivel;
        private $edad;

        public function __construct($nombre="", $email="", $password="",$apodo="",$nivel="", $edad="" ) {
            $this->nombre = $nombre;
            $this->email = $email;
            $this->password = $password;
            $this->apodo = $apodo;
            $this->nivel = $nivel;
            $this->edad = $edad;
        }

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getnombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setnombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

           /**
         * Get the value of apodo
         */ 
        public function getApodo()
        {
                return $this->apodo;
        }

        /**
         * Set the value of apodo
         *
         * @return  self
         */ 
        public function setApodo($apodo)
        {
                $this->apodo = $apodo;

                return $this;
        }

            /**
         * Get the value of nivel
         */ 
        public function getNivel()
        {
                return $this->nivel;
        }

        /**
         * Set the value of nivel
         *
         * @return  self
         */ 
        public function setNivel($nivel)
        {
                $this->nivel = $nivel;

                return $this;
        }

             /**
         * Get the value of edad
         */ 
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @return  self
         */ 
        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }
    }
