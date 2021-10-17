<?php
    require_once("os.php");
    require_once("conexao.php");

    class osDAO{
        public $connection;

        public function getConnection(){
            if(is_null($this->connection)){
                $this->connection = new Conexao();
            }
            return $this->connection;
        }

        public function inserir (Os $ordemS){
            $conn = $this->getConnection()->connectToDB();
            $sobre = $ordemS->getSobre();
            $nSolicitante = $ordemS->getNSolicitante();
            $nExecutor = $ordemS->getNExecutor();
            $contatoSoli = $ordemS->getContatoSoli();
            $trouxeEquip = $ordemS->getTrouxeEquip();
            $livreExe = $ordemS->getLivreExe();

            $query = "INSERT INTO projetoFinal (sobre, solicitante, executor, contato, equip, livreExe) values ('$sobre', '$nSolicitante', '$nExecutor', '$contatoSoli', '$trouxeEquip', '$livreExe')";
            $r = mysqli_query($conn, $query);

            if(!$r){
                die("Erro ao inserir!");
            }else{
                echo "Dados inseridos com sucesso";
            }

            $this->connection->closeConn();
        }

        public function atualizar (Os $ordemS){
            $conn = $this->getConnection()->connectToDB();
            $id = $ordemS->getId();
            $sobre = $ordemS->getSobre();
            $nSolicitante = $ordemS->getNSolicitante();
            $nExecutor = $ordemS->getNExecutor();
            $contatoSoli = $ordemS->getContatoSoli();
            $trouxeEquip = $ordemS->getTrouxeEquip();
            $livreExe = $ordemS->getLivreExe();

            $query = "UPDATE projetoFinal SET sobre = '$sobre', solicitante = '$nSolicitante', executor = '$nExecutor', contato = '$contatoSoli', equip = '$trouxeEquip', livreExe ='$livreExe' WHERE id = '$id' ";
            $r = mysqli_query($conn, $query);

            if(!$r){
                die("Erro ao atualizar!");
            }else{
                echo "Dados atualizados com sucesso.";
            }

            $this->connection->closeConn();
        }

        public function excluir (Os $ordemS){
            $conn = $this->getConnection()->connectToDB();
            $id = $ordemS->getId();

            $query = "DELETE FROM projetoFinal WHERE id = '$id' ";
            $r = mysqli_query($conn, $query);

            if(!$r){
                die("Erro ao excluir!");
            }else{
                echo "Dados excluídos com sucesso";
            }

            $this->connection->closeConn();
        }

        public function recuperar (){
            $conn = $this->getConnection()->connectToDB();

            $query = "SELECT * FROM projetoFinal";
            $r = mysqli_query($conn, $query);

            if(!$r){
                die("Erro ao selecionar!");
            }else{
                $ordensDeServicos = array();
                while($row = mysqli_fetch_array($r)){
                    $ordemS = new Os();
                    $ordemS->setId($row["id"]);
                    $ordemS->setSobre($row["sobre"]);
                    $ordemS->setNSolicitante($row["solicitante"]);
                    $ordemS->setNExecutor($row["executor"]);
                    $ordemS->setContatoSoli($row["contato"]);
                    $ordemS->setTrouxeEquip($row["equip"]);
                    $ordemS->setLivreExe($row["livreExe"]);
                    array_push($ordensDeServicos, $ordemS);
                }
                return $ordensDeServicos;
            }

            $this->connection->closeConn();
        }

        public function recuperarPorID ($id){
            $conn = $this->getConnection()->connectToDB();

            $query = "SELECT * FROM projetoFinal WHERE id = '$id'";
            $r = mysqli_query($conn, $query);

            if(!$r){
                die("Erro ao selecionar!");
            }else{
                while($row = mysqli_fetch_array($r)){
                    $ordemS = new Os();
                    $ordemS->setId($row["id"]);
                    $ordemS->setSobre($row["sobre"]);
                    $ordemS->setNSolicitante($row["solicitante"]);
                    $ordemS->setNExecutor($row["executor"]);
                    $ordemS->setContatoSoli($row["contato"]);
                    $ordemS->setTrouxeEquip($row["equip"]);
                    $ordemS->setLivreExe($row["livreExe"]);
                    return $ordemS;
                }
            }
            $this->connection->closeConn();
            return null;
        }
    }
?>