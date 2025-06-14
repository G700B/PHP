<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $cadena="monitores";
   $long=strlen($cadena);
   echo "$long";
   echo "<br>";
   for ($i=0; $i <$long ; $i++) { 
       echo $cadena[$i]. "<br>";
   }
   $str="Palabra";
for($i=0;$i<strlen($str);$i++){
echo$str[$i]."\n";
}
echo "<br>";
$str="EnunlugardelaMancha...";
strpos($str,"En");//Devuelveun(int)0
strpos($str,"Walter");//Devuelveun(bool)FALSE
strpos($str,"Mancha");//Devuelveun18
strpos($str,"l",10);//Devuelveun15(segunda'l');
if(strpos($str,"X")!==FALSE){
echo"¡Encontrado!";
}else{
echo"Noencontrado:(";
}
   ?> 
</body>
</html>