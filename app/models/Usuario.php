<?php 
//Todos los modelos deben extender la clase Eloquent
class Usuario extends Eloquent { 

    protected $table = 'usuarios';

    public static function resultados()
    {
    	//$resultado = DB::select("SELECT * FROM usuarios");
    	$resultado = DB::table('usuarios')->get();
    	return $resultado;
    }
}
?>