<?php
    class Os{
        private $id;
        private $sobre;
        private $nSolicitante;
        private $nExecutor;
        private $contatoSoli;
        private $trouxeEquip;
        private $livreExe;

        
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getSobre()
        {
                return $this->sobre;
        }

        public function setSobre($sobre)
        {
                $this->sobre = $sobre;

                return $this;
        }

        public function getNSolicitante()
        {
                return $this->nSolicitante;
        }

        public function setNSolicitante($nSolicitante)
        {
                $this->nSolicitante = $nSolicitante;

                return $this;
        }

        public function getContatoSoli()
        {
                return $this->contatoSoli;
        }

        public function setContatoSoli($contatoSoli)
        {
                $this->contatoSoli = $contatoSoli;

                return $this;
        }
 
        public function getTrouxeEquip()
        {
                return $this->trouxeEquip;
        }

        public function setTrouxeEquip($trouxeEquip)
        {
                $this->trouxeEquip = $trouxeEquip;

                return $this;
        }

        public function getLivreExe()
        {
                return $this->livreExe;
        }

        public function setLivreExe($livreExe)
        {
                $this->livreExe = $livreExe;

                return $this;
        }

        public function getNExecutor()
        {
                return $this->nExecutor;
        }

        public function setNExecutor($nExecutor)
        {
                $this->nExecutor = $nExecutor;

                return $this;
        }
    }
?>