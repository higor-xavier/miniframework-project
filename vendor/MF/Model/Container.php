<?php 

	namespace MF\Model;
	use App\Connection;

	class Container{
		
		public static function getModel($model){

			//Retornar modelo solicitado já instanciado, inclusiva com a conexão estabelecida
			$class = "\\App\\Models\\".ucfirst($model);
			$conn = Connection::getDb();
			return new $class($conn);
		}
	}

 ?>