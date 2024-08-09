<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Demander - Atividades</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <?php include_once"favcon.php" ?>


<!-- Compiled and minified CSS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="estilo.css" />
  
<link rel="stylesheet" type="text/css" href="styleatv.css" />


  </head>


  
  


<header>



<nav class="nav-extended" style="background-color:#ffffff;height:100px;">

<a id="logo-container" href="index.php" class="brand-logo"><img src="Demander.png" style="margin: 5% 0;width:120px; height:75px; padding-left:15%;">  </a>

    <div class="nav-wrapper">
<?php
//include "navbarapp.php";
?>


  <ul id="slide-out" class="sidenav">
      <li><div class="user-view">
        <div class="background" style="background-color:#424242;">
        
        </div>
        <a class="asidenav" href="#user"><img class="circle"  src="demandericon.png"></a>
        <a class="asidenav" href="#email"><span class="white-text email">Demander</span></a>
        <a class="asidenav" href="#name"><span class="white-text name">Atividade 2.1 e 2.2</span></a>
        
      </div></li>
     
      <li><a class="waves-effect" href="num_romano.php"><i class="material-icons">info_outline</i>Início</a></li> 
    
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  




<script>

$(document).ready(function(){
    $('.sidenav').sidenav();
  });


</script>
      

      <ul id="nav-mobile" class="right hide-on-med-and-down">
          
          
      


    </div>
    


  </nav>
  

</header>



<body>

     
     
       <nav>



    <div class="nav-wrapper" style="background-color:#204887";>
      <div class="col s12">
       <a href="index.php" class="breadcrumb" style="padding:15px;">Início</a>
        <a href="num_romano.php" class="breadcrumb" style="padding:15px;">Conversor de números romanos</a>
          <a href="#!" class="breadcrumb">Resultado</a>
        
      </div>
    </div>
  </nav>

     <br>



 
 <br>
 
 <br>
 <div style="margin-left:15px;margin-right:15px;">

  

  
  
  
  
   <form method="POST" action="#" enctype="multipart/form-data">
     
     
     

     
      
     
     
  <div style="border-radius: 30px;" id="test-swipe-1" class="col s12 red">
  
   <ul class="collection">

    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <i class="material-icons circle gold">apps</i>
      <span class="title">Resultado</span>
     

       <div class="row">

     <div class="input-field col s4" >

<a style="font-size:20px;"><?php
				 
$btnDecimal = filter_input(INPUT_POST, 'btnDecimal', FILTER_SANITIZE_STRING);
$btnRomano = filter_input(INPUT_POST, 'btnRomano', FILTER_SANITIZE_STRING);
if($btnDecimal){
$numerodecimal = $_POST['decimal_num'];
echo num_romano($numerodecimal) ;
}
  elseif($btnRomano){
  $numeroRomano = $_POST['romano_num'];
  echo romanoParaDecimal($numeroRomano) ;
  //echo $numeroRomano;

}
  else { 
  header("Location: num_romano.php");
}
?>
</a>
</div>              
</li>
</ul> 
             
     </div>

  </div>
          
      
  </div>
             
    
      


 <?php
 
 
    function num_romano($numero) {
    if ($numero <= 0) {
        return $numero.' não pode ser transformado';
    }

    $num = (int)$numero;
    $romano = '';

//Nivel 0 
 while (($num / 10000) >= 1) {
         $y .= '_<br>X';
        $num -= 10000;
    }
   if (($num / 9000) >= 1) {
        $y .= '__<br>IX';
        $num -= 9000;
    }

      if (($num / 5000) >= 1) {
        $y .= '_<br>V';
        $num -= 5000;
    }

   

    // Nivel 1
    while (($num / 1000) >= 1) {
        $y .= 'M';
        $num -= 1000;
    }
    if (($num / 900) >= 1) {
        $y .= 'CM';
        $num -= 900;
    }
    if (($num / 500) >= 1) {
        $y .= 'D';
        $num -= 500;
    }
    if (($num / 400) >= 1) {
        $y .= 'CD';
        $num -= 400;
    }

    // Nivel 2
    while (($num / 100) >= 1) {
        $y .= 'C';
        $num -= 100;
    }
    if (($num / 90) >= 1) {
        $y .= 'XC';
        $num -= 90;
    }
    if (($num / 50) >= 1) {
        $y .= 'L';
        $num -= 50;
    }
    if (($num / 40) >= 1) {
        $y .= 'XL';
        $num -= 40;
    }

    // Nivel 3
    while (($num / 10) >= 1) {
        $y .= 'X';
        $num -= 10;
    }
    if (($num / 9) >= 1) {
        $y .= 'IX';
        $num -= 9;
    }
    if (($num / 5) >= 1) {
        $y .= 'V';
        $num -= 5;
    }
    if (($num / 4) >= 1) {
        $y .= 'IV';
        $num -= 4;
    }

    // Nivel 4
    while ($num >= 1) {
        $y .= 'I';
        $num -= 1;
    }

    return $y;
};
 
// De Romanos para Decimal



function romanoParaDecimal($romano) {
    // Define os valores dos números romanos
    $valoresRomanos = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    );

    $decimal = 0;
    $comprimento = strlen($romano);

    for ($i = 0; $i < $comprimento; $i++) {
        $valorAtual = $valoresRomanos[$romano[$i]];
        $valorProximo = ($i + 1 < $comprimento) ? $valoresRomanos[$romano[$i + 1]] : 0;

        if ($valorAtual < $valorProximo) {
            // Se o valor atual for menor que o próximo valor, subtrai
            $decimal -= $valorAtual;
        } else {
            // Caso contrário, soma
            $decimal += $valorAtual;
        }
    }

    return $decimal;
}

// Exemplo de uso
//$numeroRomano = 'MCMXCIV'; // 1994
//echo "O número romano $numeroRomano em decimal é: " . romanoParaDecimal($numeroRomano);
 
 ?>

</body>
</html>