<?php
class Funciones
{
	//	Función que permita verificar si un número n es par o impar.
	public function es_par($numero)
	{
		if ($numero%2==0){
    			return true;
		}else{
    			return false;
		}		

	}
}