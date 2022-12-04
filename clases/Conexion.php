<?php 
	class conectar{
		
		private $servidor="localhost";
		private $usuario="root";
		private $password="";
		private $bd="siscaso";

		public function conexion(){
			$conexion = mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}

		public function existe($tabla, $campos, $Where){
			$conn = $this->conexion();
            $sql="SELECT ".$campos." FROM ".$tabla." WHERE ".$Where." LIMIT 1";
            $result=mysqli_query( $conn, $sql);
			if( $result ){
				if(is_null(mysqli_fetch_row($result))){
					return false;
				}else{
					return true;
				}
			}else{
				return "error";
			}
        }

		public function Select($tabla, $campos, $Where){
			$conn = $this->conexion();
            $sql="SELECT ".$campos." FROM ".$tabla." WHERE ".$Where." LIMIT 1";
            $result=mysqli_query( $conn, $sql);
			if( $result ){
				return  mysqli_fetch_row( $result );
			}else{
				return "error";
			}
        }

		public function Update($tabla, $campos, $Where){
			$conn = $this->conexion();
            $sql="UPDATE ".$tabla." SET ".$campos." WHERE ".$Where;
            $result=mysqli_query( $conn, $sql);
			if( $result ){
				return true;
			}else{
				return false;
			}
        }

	}
 ?>