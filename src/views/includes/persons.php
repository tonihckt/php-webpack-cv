<?php
	class persona
	{
		private $id;
		private $nombre;
		private $telefono;

		public function __construct($pId, $pnombre, $ptelefono)
		{
			$this->id = $pId;
			$this->nombre = $pnombre;
			$this->telefono = $ptelefono;
		}

		public function __destruct()
		{
			echo "<p> destruyendo objeto </p>";
		}

		public function __set($propiedad, $valor)
		{
			$this->propiedad = $valor;
		}

		public function __get($propiedad)
		{
			if (property_exists($this, $propiedad)) {
				return $this->$propiedad;
			}
		}
	}

	function printPersona($pPersona)
	{
		echo '<p>'.$pPersona->getId.'</p>';
	}

	// se crea a la primer persona
	$persona1 = new persona(1, 'Daniel Melchor', '(502) - 12345678');
	// se crea una segunda persona en base a la primera
	$persona2 = $persona1;
	$persona3 = clone $persona1;
	//se imprime el nombre de ambas personas
	echo "persona 1 <br>". 'id = '. $persona1->id . "<br>" . 'nombre = '.$persona1->nombre . "<br>" . 'telefono : '.$persona1->telefono ."<br> <br>";
	echo "persona 2 <br>". 'id = '. $persona2->id . "<br>" . 'nombre = '.$persona2->nombre . "<br>" . 'telefono : '.$persona2->telefono ."<br> <br>";
	//cambiamos el nombre de la persona 2
	$persona2->__set('nombre', 'Jorge');
	$persona3->__set('nombre', 'Anibal');
	$persona3->__set('telefono', '(502) - 99998888');
	//mostramos de nuevo la informacion para validar que solo se haya cambiado el nombre de la persona 3
	echo "persona 1 <br>". 'id = '. $persona1->id . "<br>" . 'nombre = '.$persona1->nombre . "<br>" . 'telefono : '.$persona1->telefono ."<br> <br>";
	echo "persona 2 <br>". 'id = '. $persona2->id . "<br>" . 'nombre = '.$persona2->nombre . "<br>" . 'telefono : '.$persona2->telefono ."<br> <br>";
	echo "persona 3 <br>". 'id = '. $persona3->id . "<br>" . 'nombre = '.$persona3->nombre . "<br>" . 'telefono : '.$persona3->telefono ."<br> <br>";
	
?>