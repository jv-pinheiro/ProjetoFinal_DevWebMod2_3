<?php
    class Conexao{
        
        //Credenciais do banco

        function connectToDB(){
            $conn = mysqli_connect($this->host, $this->user, $this->password);
            if(!$conn){
                die("Não foi possível conectar!");
            }else{
                $this->myconn = $conn;
                echo "Conexão foi estabelecida.";
            }
            
            mysqli_select_db($this->myconn, $this->db);
            if(mysqli_connect_error()){
                echo "Não foi possível encontrar o banco" .$this->db;
            }else{
                echo "Banco selecionado.";
            }
            
            return $this->myconn;
        }

        function closeConn(){
            mysqli_close($this->myconn);
            echo "Conexão encerrada.";
        }
    }
?>