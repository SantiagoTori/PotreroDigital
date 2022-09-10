<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Ejercicio 1</h2>
    <?php
      $n1=7
     ?>

     <?php if ($n1>0):
       echo "$n1 es un número positivo"; ?>

     <?php else: echo "$n1 no es un número positivo";?>

     <?php endif; ?>

<br>
<hr>

    <h2>Ejercicio 2</h2>
    <?php
      $n2=8
     ?>

     <?php if ($n2>1 & $n2<10):
       echo "$n2 es mayor que 1 y menor que 10"; ?>

     <?php else: echo "$n2 es menor que 1 o mayor que 10"; ?>

     <?php endif; ?>

<br>
<hr>

    <h2>Ejercicio 3</h2>
    <?php
      $n3=15
     ?>

     <?php if ($n3>2 or $n3<10):
       echo "$n3 es menor que 2 o mayor que 10"; ?>

     <?php else: echo "$n3 es mayor que 2 y menor que 10"; ?>

     <?php endif; ?>

<br>
<hr>


     <h2>Ejercicio 4</h2>
     <?php
       $numero1=5;
      $numero2=10;
       $suma= $numero1+$numero2;
       $resta= $numero1-$numero2;
       $div= $numero1/$numero2;
       $mult= $numero1*$numero2;
       $resto= $numero1%$numero2;
        ?>

      <?php if ($numero1>$numero2):
        echo "$numero1+$numero2 = $suma <br>";
        echo "$numero1-$numero2 = $resta"; ?>

      <?php elseif($numero1<$numero2):
        echo "$numero1*$numero2 = $mult <br>";
        echo "$numero1/$numero2 = $div <br>";
        echo "$numero1%$numero2 = $resto"; ?>

      <?php else:
        echo "Los números ingresados son iguales";
       ?>

      <?php endif; ?>

  </body>
</html>
