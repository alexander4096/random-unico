<?php

namespace randomUnico;

class randomUnico
{

  // PARA NUMEROS
  public static function numeros($ini, $fin, $cantidad) {
        // validacion
        $reporte ='ok';
        if ($fin-$ini < $cantidad) {  $reporte =' Err: Cantidad > a rango'; }
        if ($cantidad < 1) { $reporte = ' Err: Cantidad == 0'; }
        if ($ini == $fin) { $reporte = ' Err:  ini  = fin'; }
        if ($ini > $fin ) { $reporte = ' Err: ini >  fin'; }

        // inicializacion
        $arreglo =array();
        $arreglo['report'] = $reporte;
        $arreglo['numeros']=NULL;

      if ($reporte=='ok') {
          $numeros = range($ini, $fin);
          shuffle($numeros);
          $arreglo['numeros']= array_slice($numeros, 0, $cantidad);
          $arreglo['report'] = $reporte;
      }
        // salida como json
        return json_encode($arreglo);
}



// PARA LETRAS
public static function letras($ini, $fin, $cantidad) {
      // convertir en numero ASCII mayusculas
      $ini = ord(strtoupper($ini)); 
      $fin = ord(strtoupper($fin));
      
      // validacion
      $reporte ='ok';
      if ($cantidad < 1) { $reporte = ' Err: Cantidad == 0'; }
      if ($ini == $fin) { $reporte = ' Err:  ini  = fin'; }
      if ($ini > $fin ) { $reporte = ' Err: ini >  fin'; }
      if ($ini < 65 || $ini > 90) { $reporte = 'Err: ini caracter no permitido: solo A-Z'; }
      if ($fin < 65 || $fin > 90) { $reporte = 'Err: fin caracter no permitido: solo A-Z'; }
      if ($fin - $ini + 1 < $cantidad) { $reporte = 'Err: cantidad es mayor al rango de caracteres'; }
      
      // inicializacion
      $arreglo =array();
      $arreglo['report'] = $reporte;
      $arreglo['numeros']=NULL;
    
    if ($reporte=='ok') {
        $numeros = range($ini, $fin);
        shuffle($numeros);
        // convertir en letras
        for ($i=0; $i < count($numeros); $i++) { 
          $numeros[$i]= chr($numeros[$i]);
        }
        $arreglo['numeros']= array_slice($numeros, 0, $cantidad);
        $arreglo['report'] = $reporte;
    }
      // salida como json
      return json_encode($arreglo);
    }

}


?>