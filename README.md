

# Como usar el generador aleatorio de numeros letras 
## (unicos sin repetir)

## El sistem tiene dos metodos

#### numeros()
#### letras()

## El metodo numeros() permite generar un rango de numeros indicados con la cantidad solicitada

sintaxis:

numeros(ini,fin,cantidad)

## Se tienen 3 parametros para el metodo numeros
```
ini = numero inicial
fin = numero final 
cantidad = cantidad numero generados
```
El sistema cuenta con validacion que genera un reporte por lo que no se permite las siguientes reglas:
```
ini = fin               : ini no debe ser igual a fin
ini > fin               : ini no debe ser mayo a fin
fin-ini < cantidad      : al diferencia entre fin - ini  menos ini no debe ser menor a cantidad 
cantidad < 1            : cantidad no debe ser menor a 1
```
### Ejemplo 1:

randomUnico::numeros(10,50,10)

Genera 50 numeros unicos sin repetir entre 10 a 50 

### Ejemplo 2:

randomUnico::numeros(3,9,4)

Genera 4 numeros unicos entre 3 y 9


## El metodo letras() es para generar letras aleatorias UNICAS

sintaxis:

letras(ini,fin,cantidad)

Se tienen 3 parametros para colocar: 
```
ini = letra de inicio (primera letra) 
fin = letra de final  (ultima letra)
cantidad = cantidad de letras a generar
```
### Validacion para Letras:
```
> ini y fin               : no se permiten letras fuera del codigo de rango A - Z
> ini > ini               : ini no debe ser mayor a ini
> ini = fin               : ini no debe ser igual fin
> fin-ini < cantidad      : al diferencia entre fin - ini  menos ini no debe ser menor a cantidad 
> cantidad < 1            : cantidad no debe ser menor a 1
```
### Ejemplo 1:

randomUnico::letras('A','F',3);

Genera 3 letras mayusculas  de la A hasta la F sin repetir


### Ejemplo 2:

randomUnico::letras('O','Y',2);

Genera 2 letras mayusculas de la O hasta la Y sin repetir

La salida generada en los dos metodos esJSON que contiene dos llaves:
```
  report: 
  numeros:
```

Ejemplo de Salida Generada por el progrma:

Codigo:

echo randomUnico::numeros(10,50,10);

Salida para Numeros:
```
{"report":"ok","numeros":[39,44,37,12,24,47,21,27,46,43]}
```
Codigo:
echo randomUnico::letras('A','z',25);

Salida para Letras:
```
{"report":"ok","numeros":["D","O","I","R","F","P","N","T","S","C","Y","V","L","E","M","Q","H","X","J","A","K","U","G","W","B"]}
```

## Crear un archivo de pruebas dentro de un subdirectorio y colocar este codigo

```
<?php 
// se llama desde una subcarpeta 
require __DIR__.'/../vendor/autoload.php'; 

use randomUnico\randomUnico; 

echo "<br><br> Salida para Numeros: <br>";
echo randomUnico::numeros(10,50,10);

echo "<br><br> Salida para Letras: <br>";
echo randomUnico::letras('O','Y',3);

?>
```
