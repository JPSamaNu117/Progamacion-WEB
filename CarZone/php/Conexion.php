
<?php 
    
        include "db.php";
        $user = new ApptivaDB();

        class ApptivaDB{

            //OPTIMUZANDO UNA CONEXION MYSELI VERSION PHP
            /*
                include "db.php";
                $user = new ApptivaDB();
            */
            


            private $host ="localhost";
            private $usuario="root";
            private $clave="";
            private $db="CarZoneBD";
            public $conexion;

            public function __construct()
            {
                $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db) 
                or die(mysqli_error("ERROR"));
                $this->conexion->set_charset("uft8");
            }


            
            //insertar
            public function insertar($tabla , $datos){
                $resultado = $this->conexion->query("INSERT INTO $tabla 
                VALUES (null,$datos)") or die($this->conexion->error) ;
                if($resultado) return true;
                return false;
            }

            /*
                FORMA DE USO
                $u = $user ->insertar("usuario","'parametro1','parametro2','cualquierOtro'");
                if($u)
                    echo "Insertado";
                else
                    echo "No insertado";
            */


            //eliminar
            public function eliminar($tabla , $condicion){
                $resultado = $this->conexion->query("DELETE FROM $tabla 
                WHERE $condicion") or die($this->conexion->error) ;
                if($resultado) return true;
                return false;
            }
            /*
                FORMA DE USO DE ELIMINAR
                $u=$user->eliminar("usuario","id=1");
                if($u)
                    echo "Eliminado";
                else
                    echo "No borrado";
            */


            //Update
            public function update($tabla , $campos, $condicion){
                $resultado = $this->conexion->query("UPDATE $tabla 
                SET $campos WHERE $condicion") or die($this->conexion->error) ;
                if($resultado) return true;
                return false;
            }
            /* 
                FORMA DE USO DE UPDATE
                $u=$user->actualizar("usuario","nombre='ANAMARIA'","id=1");
                    if($u)
                        echo "Actualizado";
                    else
                        echo "No actualizado";
            
            */

            //Seleccion
            public function seleccion($tabla , $condicion){
                $resultado = $this->conexion->query("SELECT * 
                FROM $tabla WHERE $condicion") or die($this->conexion->error) ;
                if($resultado) return true;
                return false;
            }
            /*
                FORMA DE USO DE SELECCION
                if($resultado=$user->seleccion("usuario","1")) //para tabla usuarios
                    foreach ($resultado as $value)
                        echo $value[id]."-".$value['nombre']."<br>";
                else
                    echo "No hay registro";
            */
    
        }
    
?> 
