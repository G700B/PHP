<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEDERICO</title>
</head>

<body style="
background-image: url(pp.png);
background-position: center;
background-hight: 100%;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;">
<font color="aqua" size="5"> <center><p><b>Trabajos</b></font></p></center> 
<?php
  echo "<font color=aqua size=3> <p><b>Trabajo 1</b></p> </font>";
 
    $A=23;
    $B=12; 
                $a=5;
                  $inc=$a+5;
                  echo "$a incrementado 5 es $inc . ";
                  $incr=$inc+10;
                   echo "$inc incrementado 10 es $incr";

                   echo "<font color=aqua size=3> <p><b>Trabajo 6</b></p> </font>"; 
                   $a=3;
    

                  $b=2;
                   if ($a==$b) {
                      echo "los equipos empataron";   }
                    elseif ($a>$b) {
                        echo "el primer equipo gano con $a";
                                     } else {
                                     echo "el segundo equipo gano con $b";    
                                     }    
                                     echo "<font color=aqua size=3> <p><b>Trabajo 7</b></p> </font>";
              $a=0;
              $b=1;
        if($b==0 or $a==0){
            echo "no se puede realizar la division";
        } else
        {
        $division=$a/$b; 

            echo "el resultado es $division";
        }
        echo "<font color=aqua size=3> <p><b>Trabajo 8</b></p> </font>";
             $a=2;
              $b=3;
              $resta=$a-$b;
             if ($resta<0) {
                 echo "error";
             }else{
             echo "el resultado de la resta es $resta";
             }
             echo "<font color=aqua size=3> <p><b>Trabajo 9</b></p> </font>";
        $a=0;
        $b=1;
        if($b==0 or $a==0){
            echo "no se puede realizar la division";
        }
        elseif($a>$b){
            $division= $a/$b;
            echo "se realiza la divison, el resultado es $division";
        }
        elseif ($b>=$a) {
         
            $suma= $a+$b;
            echo "se realiza la suma, el resultado es $suma";
        }
        echo "<font color=aqua size=3> <p><b>Trabajo 10</b></p> </font>"; 
        $a=3;
        $b=1;
        $suma=$a+$b;
        if ($suma>12) {
           echo "la suma es $suma, supera el N maximo, se realiza una resta ";
           $resta=$suma-3;
           echo "el resultado de la resta es $resta";
        } elseif ($suma<5) {
            $sum=$suma+2;
           echo "el resultado de la suma es menor a 5 ($suma), se reLIZA UNA SUMA $sum";
        }else
        echo "$suma";
        echo "<font color=aqua size=3> <p><b>Trabajo 11</b></p> </font>";
         $a=5;
         $b=2;
         if ($a>$b) {
            echo "$a es mayor que $b";
         } elseif ($a<$b){
            echo "$b es mayor que $a";
        }
        echo "<font color=aqua size=3> <p><b>Trabajo 12</b></p> </font>";
         $a=5;
         $b=2;
         if ($a>$b) {
            echo "$a es mayor que $b";
         } elseif ($a<$b){
            echo "$b es mayor que $a";
        }else
        echo "los numeros son iguales($a y $b)";
        echo "<font color=aqua size=3> <p><b>Trabajo 13</b></p> </font>";
        $a=4;
        $b=6;
        echo "menor y mayor ";
        if ($a>$b) {
 echo "<br>";
          echo "$a";
          echo "<br>";
          echo "$b";
        } elseif ($a<$b) {
             echo "<br>";
            echo "$b";
            echo "<br>";
          echo "$a";
        }
        echo "<font color=aqua size=3> <p><b>Trabajo 14</b></p> </font>";
  for ($i=1; $i <=10 ; $i++) { 
    echo "<br>";
      echo "$i";
  }
  echo "<font color=aqua size=3> <p><b>Trabajo 15</b></p> </font>";
    for ($i=10; $i >0 ; $i--) { 
    echo $i."<br>";
  }
  echo "<font color=aqua size=3> <p><b>Trabajo 16</b></p> </font>";
    for ($i=1; $i <=100 ; $i++) {    //while
    echo "<br>";
      echo "$i";
  }
  echo "<font color=aqua size=3> <p><b>Trabajo 17</b></p> </font>";
   for ($i=100; $i >=1 ; $i--) { 
     echo $i."<br>";
  }
  echo "<font color=aqua size=3> <p><b>Trabajo 18</b></p> </font>";
  $a=-2;
  $b=4;
  $c=4;
  if ($a>0) {
      echo " $a Es positivo ";
  }
  else {
    echo "$a es negativo";
  }
  if ($b>0) {
      echo " $b Es positivo ";
  }
  else {
    echo "$b es negativo";
  }
  if ($c>0) {
      echo " $c Es positivo ";
  }
  else {
    echo "$c es negativo";
  }

  echo "<font color=aqua size=3> <p><b>Trabajo 19</b></p> </font>";
  $a=5;
  $b=6;
  $c=7;
  $prom=$a+$b+$c;
  $pro=$prom/3;
  echo "el promedio es $pro";
  echo "<font color=aqua size=3> <p><b>Trabajo 20</b></p> </font>";
$a=3;
$b=3;
if ($a%3==0 and $b%3==0) {
    echo "$a y $b son multiplos de 3";
    echo "se realiza la suma";
    $sum=$a+$b;
    echo "$sum";
}else {
echo "$a o $b no son multiplos de 3";
}
echo "<font color=aqua size=3> <p><b>Trabajo 21</b></p> </font>";
$a=102;
$b=1;
$res=$a-$b;
if ($res>100) {
    echo "limite maximo";
}elseif ($res%2==0) {
    echo "$res son pares positivos";
}else {
    echo "Error";
}
echo "<font color=aqua size=3> <p><b>Trabajo 22</b></p> </font>";
for ($a=10; $a >=0 ; $a--) { 
   if ($a%2==0) {
 echo "los N pares son: $a <br/>";
}
}
echo "<font color=aqua size=3> <p><b>Trabajo 23</b></p> </font>";
for ($a=2; $a <=10 ; $a++) { 
    if ($a%2==0) {
  echo "los N pares son: $a <br/>";
 }
 }
 echo "<font color=aqua size=3> <p><b>Trabajo 24</b></p> </font>";
 for ($a=1; $a <=10 ; $a++) { 
     if ($a%2==1) {
   echo "los N impares son: $a <br/>";
  }
  }
  echo "<font color=aqua size=3> <p><b>Trabajo 25</b></p> </font>";
  for ($a=10; $a >=2 ; $a--) { 
      if ($a%2==1) {
    echo "los N impares son: $a <br/>";
   }
   }
   echo "<font color=aqua size=3> <p><b>Trabajo 26</b></p> </font>";  
    $contador=0;
   for ($a=1; $a <=10 ; $a++) {  
      if ($a%2==1)    {  
      $contador=$contador+1;
        echo "los N impares son: $a <br/>";
      }   
    } 
    echo "la cantidad de n impares son $contador";
    echo "<font color=aqua size=3> <p><b>Trabajo 27</b></p> </font>"; 
    $contador=0;
    for ($a=2; $a <=10 ; $a++) { 
      if ($a%2==0) {
        $contador=$contador+1;
    echo "los N pares son: $a <br/>";
   }
   }
   echo "la cantidad de n pares son $contador";
   echo "<font color=aqua size=3> <p><b>Trabajo 28</b></p> </font>"; 
   for ($a=3; $a <=30 ; $a++) { 
    if ($a%2==1) {
  echo "los N multiplos de 3 son: $a <br/>";
 }
 }
 echo "<font color=aqua size=3> <p><b>Trabajo 29</b></p> </font>"; 
 for ($a=30; $a >=3 ; $a--) { 
  if ($a%2==1) {
echo "los N multiplos de 3 son: $a <br/>";
}
}
echo "<font color=aqua size=3> <p><b>Trabajo 30</b></p> </font>"; 
$acum=0;
for ($i=1; $i <=10 ; $i++) { 
  echo $i;
  if ($i<10) {
    echo " + ";
  }
  
  $acum=$acum+$i;
}
echo " =" .$acum;
echo "<font color=aqua size=3> <p><b>Trabajo 31</b></p> </font>"; 
$b=0;
for ($a=1; $a <=30 ; $a++) { 
  if ($a%4==0) {
    $b=$b+$a;
echo "los N multiplos de 4 son: $a <br/>";
}
}
echo " la suma es=" .$b;
echo "<font color=aqua size=3> <p><b>Trabajo 32</b></p> </font>"; 
$acum=0;
$sum=0;
for ($a=1; $a <=10 ; $a++) { 
    if ($a%2==1) {
      $acum=$acum+1;
      $sum=$sum+$a;
       echo "los N multiplos de 3 son: $a <br/> ";
    }
}
echo " cantidad de N impares= $acum <br/>";
echo "la sumatoria es $sum";
echo "<font color=aqua size=3> <p><b>Trabajo 33</b></p> </font>"; 
$contador=0;
    for ($a=2; $a <=10 ; $a++) { 
      if ($a%2==0) {
        $contador=$contador+1;
    echo "los N pares son: $a <br/>";
   }
   }
   echo "la cantidad de n pares son $contador";
   echo "<font color=aqua size=3> <p><b>Trabajo 34</b></p> </font>"; 
   $a=rand(1,10);
   $b=rand(7,60);
   if ($a>=5) {
       if ($b>40) {
          Echo "Pertenece a la categoria adulto M";
       }
       elseif ($b>22) {
           Echo "Pertenece a la categoria adulto ";
       }
       elseif ($b>16) {
           Echo "Pertenece a la categoria Medio A";
       }
       elseif ($b>10) {
           Echo "Pertenece a la categoria Medio";
       }
       else {
           Echo "Pertenece a la categoria Junior";
       }
   }
   else {
       echo "No completo el minimo de vueltas";
   }
   echo "<font color=aqua size=3> <p><b>Trabajo 35</b></p> </font>"; 
$horas=36;
$sueldo=2000;

if ($sueldo>1000) {
    $r=$sueldo-100;
echo "la obra social le realiza un descuento sobre el sueldo de $100, quedaria $r";
  }elseif ($sueldo>1300) {
  $r=$sueldo-200;
  echo "se realiza un descuento de $200. quedaria $r";
  }elseif ($sueldo>1500) {
  $r=$sueldo-300;
 echo "realiza un descuento de $300. quedaria $r";
  } if ($horas>35) {
    echo "se le aumenta un 50%";
    $m=$sueldo*50/100;
    $sum=$m+$sueldo+$r;
    echo "su sueldo es $sueldo, se le aumenta $m, el sueldo total es $sum";
    }else {
      echo "no supera las horas";
    }
    echo "<font color=aqua size=3> <p><b>Trabajo 36</b></p> </font>"; 
$llamada=16;
if ($llamada>10 and $llamada<15) {
  echo " el valor de la llamada es de $0.15";
}elseif ($llamada<=3) {
  echo " el valor de la llamada es de $0.45";
}elseif ($llamada>3 and $llamada<=9) {
  echo " el valor de la llamada es de $0.35";
}else {
  echo " el valor de la llamada es de $0.10";
}
echo "<font color=aqua size=3> <p><b>Trabajo 37</b></p> </font>"; 
$m=21;
$k=5;
$l=60*$m;
$p=2*$l;
echo "la cantidad de ladrillos son $l, el precio es $p";
if ($p<150) {
  echo "no se combra flete";
}else {
  $km=15*$k;
  echo "se cobra flete de $km";
$t=$p+$km;
}echo "precio total $t";
echo "<font color=aqua size=3> <p><b>Trabajo 38</b></p> </font>"; 

for ($e=1; $e <=10 ; $e++) { 
  echo "<br>";
  for ($i=1; $i <=10 ; $i++) { 
    echo $i. "  ";
  }
}
echo "<font color=aqua size=3> <p><b>Trabajo 39</b></p> </font>"; 
$n=rand(1,100);
if ( $n%2==0 or $n%3==0 or $n%5==0 or $n%7==0 or $n%9==0) {
  echo " $n No es primo";
}else {
  echo "$n Es primo ";
}
echo "<font color=aqua size=3> <p><b>Trabajo 40</b></p> </font>"; 
$a=6;
$b=7;
$c=9;
if ($a>$b and $a>$c ) {
  echo "$a es mayor";
}elseif ($b>$a and $b>$c) {
  echo "$b es mayor";
}else {
  echo "$c es mayor";
}
echo "<font color=aqua size=3> <p><b>Trabajo 41</b></p> </font>"; 
$ma=20;
$sumo1=0;
for ($ma=2; $ma <=10 ; $ma++){
if ($ma%2==0) {
  echo $ma."<br>"  ;
  $sumo1=$sumo1+$ma;
} 
}
$sumo2=0;
for ($ma=1; $ma <=10 ; $ma++) { 
  if ($ma%2==1) {
    echo $ma.   "<br/>" ;
    $sumo2=$ma*$ma;
}
}

echo "<br/>";
echo $sumo1;
echo "<br/>";
echo $sumo2; // no hice la multiplicacion
echo "<font color=aqua size=3> <p><b>Trabajo 42</b></p> </font>"; 
$h=rand(1,24);
$m=rand(1,60);
$s=40;
$s=$s+20;
if ($s>59) {
  $m=$m+1;
 $s=$s-59;
if ($m>59) {
  $h=$h+1;
  $m=$m-59;
}elseif ($h>24) {
  $h=$h-24;
}
echo " $h : $m : $s";
}
echo "<font color=aqua size=3> <p><b>Trabajo 43</b></p> </font>"; 
$l=rand(1,100); //del 1 al 100............
$p=4*$l;
$A=2*$l;
echo "lado: $l <br/>";
echo "perimetro: $p <br/>";
echo "area: $A";
echo "<font color=aqua size=3> <p><b>Trabajo 44</b></p> </font>"; 
$x=2;
$y=6;
$c=$x*$x;
$su=$c+$y;
echo "el resultado de la ecuacion es: $su";
echo "<font color=aqua size=3> <p><b>Trabajo 45</b></p> </font>"; 
$horas=rand(1,100);
$s=$horas*3600;
echo "los segundos de $horas horas son $s";
echo "<font color=aqua size=3> <p><b>Trabajo 46</b></p> </font>"; 
$edad=rand(1,100);
$k=$edad*12;
echo "los meses de $edad años son $k";
echo "<font color=aqua size=3> <p><b>Trabajo 47</b></p> </font>"; 
$fecha=rand(1900,2023);
$l=2023-$fecha;
echo "su fecha de nacimiento es $fecha, tiene $l años";
echo "<font color=aqua size=3> <p><b>Trabajo 48</b></p> </font>"; 
$p=rand(100,1000);
$j=2;
switch ($j) {
  case "1":
    echo "no paga con tarjeta, total a pagar $p";
    break;
  default:
  $por=10*$p;
  $pp=$por/100;
  $fin=$p-$pp;
    echo "tiene que pagar $p .paga con tarjeta, se le realiza un 10% de descuento, total a pagar $fin";
    break;
}
echo "<font color=aqua size=3> <p><b>Trabajo 49</b></p> </font>"; 
$metros=rand(2,20);
$div=$metros/2;
$pre=$div*130;

echo "los metros son $metros. los rollos que se van a usar son $div; el precio es $pre";
echo "<font color=aqua size=3> <p><b>Trabajo 50</b></p> </font>"; 
$km=rand(1,300);
if ($km==100 or $km==200) {
  $r=$km*0.1;
  $pre=$r*5.90;
  echo "Hizo $km KM, consumio $r Litros cotizado en $$pre";
}else {
  $re=$km*0.1;
  $pr=$re*5.90;
  echo "hizo $km KM, Consumio $re Litros cotizado en $$pr";
}
echo "<font color=aqua size=3> <p><b>Trabajo 51</b></p> </font>"; 
$pe=4.33;
$dis=50;
$m=$dis/$pe;
echo "debe girar el pedal $m veces para  llegar a $dis m";
echo "<font color=aqua size=3> <p><b>Trabajo 52</b></p> </font>"; 
$me=rand(4,20);
$re=5*$me;
echo "se necesitan $re semillas para plantar en $me metros";
echo "<font color=aqua size=3> <p><b>Trabajo 53</b></p> </font>";//esta mal
$km=rand(100,1000);
if ($km==150) {
  $litros=$km*0.04;
$precio=$litros*4.10;
  echo "recorrio $km km, gasto $litros L de combustible, cotizado en $ $precio";
}elseif ($km>=600) {
  $litros=$km*0.04;
$precio=$litros*4.10;
  echo "tiene que pagar peaje";
$p1=rand(1,2);
switch ($p1) {
  case '1':
    $l=$precio+8;
    echo "paga peaje de $8 por ser hora no pico";
    echo "hizo $km km, gasto $litros L con un precio de $l";
    break;
  case '2':
    echo "paga peaje de $10 por ser hora pico";
    $d=$precio+10;
    echo "hizo $km km, gasto $litros L con un precio de $d";
    break;
  default:
    
    break;
}
}else {
  echo "hizo $km km, gasto $litros L con un precio de $precio";
}
echo "<font color=aqua size=3> <p><b>Trabajo 54</b></p> </font>";
$metros=rand(12,80);
$div=$metros/12;
$pre=$div*80;
echo "los metros son $metros. los rollos que se van a usar son $div; el precio es $pre";
echo "<font color=aqua size=3> <p><b>Trabajo 55</b></p> </font>";
$metros=rand(15,80);
$div=$metros/15;
$pre=$div*149;
echo "los metros son $metros. las latas que se van a usar son $div; el precio es $pre";
echo "<font color=aqua size=3> <p><b>Trabajo 56</b></p> </font>";
$hojas=80;
if ($hojas>=40) {
  $r=40-$hojas;
  $l=$hojas-$r;
  $ll=$l*0.25;
  $rr=$r*0.10;
  $re=$rr+$ll;
  echo "cantidad de hojas a fotocopiar $hojas con un precio de $re ";
}elseif ($hojas<=40) {
  $re=$hojas*0.25;
  echo "cantidad de hojas a fotocopiar $hojas con un precio de $ $re ";
}else {
}
echo "<font color=aqua size=3> <p><b>Trabajo 57</b></p> </font>";
$metros=rand(400,2000);
$div=$metros/400;
echo "los metros son $metros. los aires que se van a usar son $div"; 
echo "<font color=aqua size=3> <p><b>Trabajo 58</b></p> </font>";
$a=rand(1,100);
$b=rand(1,100);
$c=rand(1,100);
$d=rand(1,100);
echo "votos de los cadidatos:<br>
candidato 1: $a <br>
candidato 2: $b<br>
candidato 3: $c<br>
candidato 4: $d <br>";
if ($a>$b and $a>$c and $a>$d) {
  echo "el cantidato 1 gano con un porcentaje de $a en votos";
}elseif ($b>$a and $b>$c and $b>$d) {
  echo "el cantidato 2 gano con un porcentaje de $b en votos";
}elseif ($c>$a and $c>$b and $c>$d) {
  echo "el cantidato 2 gano con un porcentaje de $c en votos";
}elseif ($d>$a and $d>$c and $d>$b) {
  echo "el cantidato 2 gano con un porcentaje de $b en votos";
}
echo "<font color=aqua size=3> <p><b>Trabajo 59</b></p> </font>";
$alumnos=rand(1,40);
$bancos=$alumnos/2;
echo "los alumonos son $alumnos. los bancos que se van a usar son $bancos";
echo "<font color=aqua size=3> <p><b>Trabajo 60</b></p> </font>";
$mb=rand(690,4140);
$cd=$mb/690;
echo "los mb a gaurdar son $mb. los cd que se van a usar son $cd";
echo "<font color=aqua size=3> <p><b>Trabajo 61</b></p> </font>";
$a=rand(1,40);
$b=rand(1,40);
$c=$a+1;
$d=$b+3;
echo "el numero 1 es $a, incrementado 1 es $c <br>";
echo "el numero 2 es $b, incrementado 1 es $d";
echo "<font color=aqua size=3> <p><b>Trabajo 62</b></p> </font>";
$a=rand(1,15);
$b=rand(1,15);
$c=rand(1,15);
$d=$a*4;
$e=$b*4;
$f=$d-$c;
$g=$e-$c;
echo "el N 1 es $a, su producto es $d, restado $c es $f<br>
el N 2 es $b, su producto es $e, restado $c es $g";
echo "<font color=aqua size=3> <p><b>Trabajo 63</b></p> </font>";
$a=rand(1,15);
$b=rand(1,15);
$c=rand(1,15);
$d=rand(1,15);
$ff=$c-$d;
if ($a>$b) {
  echo " el primer N $a es mayor que el segundo $b <br>";
}else {
  echo "$b es mayor que $a <br>";
}
if ($ff<0) {
  echo "la resta entre $c y $d es $ff ";
}else {
  echo  "la resta entre $c y $d es $ff";
}
echo "<font color=aqua size=3> <p><b>Trabajo 64</b></p> </font>";
$a=rand(1,15);
$b=rand(1,15);
$c=rand(1,15);
$d=rand(1,15);
echo "Primer N:$a <br>
Segundo N: $b<br>
Tercer N: $c<br>
Cuarto N:$d<br>";
if ($a>$b and $a>$c and $a>$d) {
  echo "$a es mayor";
}elseif ($b>$a and $b>$c and $b>$d) {
  echo "$b es mayor";
}elseif ($c>$a and $c>$b and $c>$d) {
  echo "$c es mayor";
}else {
  echo "$d es mayor";
}echo "<br>";
if ($a==$b ) {
 echo "el primer N :$a y el segundo N: $b  son iguales";
}elseif ($a==$c) {
  echo " el primer N : $a y  el tercer N : $c son iguales";
}elseif ($a==$d) {
  echo " el primer N : $a y  el cuarto N : $d son iguales";
}elseif ($b==$c) {
  echo " el segundo N : $b y el tercer N : $c son iguales";
}elseif ($b==$d) {
  echo "el segundo N : $b y el cuarto N : $d son iguales";
}elseif ($c==$d) {
  echo " el tercer N : $c y  el cuarto N : $d son iguales";
}
echo "<font color=aqua size=3> <p><b>Trabajo 65</b></p> </font>";
$t=rand(1,30);
echo "tabla del $t <br>";
for ($i=1; $i < 10; $i++) { 
  $r=$t*$i;
  echo "$t x $i = $r <br>";
}
echo "<font color=aqua size=3> <p><b>Trabajo 66</b></p> </font>";
for ($i=30; $i >= 20; $i--) { 
  echo $i."<br>";
}


































 ?>










</body >

</html> 