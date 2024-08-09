<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Demander - Força de vendas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  


<!-- Compiled and minified CSS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

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
        
        
      </div>
    </div>
  </nav>

     <br>



 
 <br>
 
 <br>
 <div style="margin-left:15px;margin-right:15px;">

  

  
  
  
  
   <form method="POST" action="conversornum.php" enctype="multipart/form-data">
     
     
     

     
      
     
     
  <div style="border-radius: 30px;" id="test-swipe-1" class="col s12 red">
  
   <ul class="collection">
    <li class="collection-item avatar">
      <img src="images/decimal.jpg" alt="" class="circle">
      <i class="material-icons circle blue">apps</i>
      <span class="title">Decimal</span>
     

       <div class="row">

     <div class="input-field col s4" >
                  <input placeholder="Digite o número" name="decimal_num" id="decimal_num" type="text" class="validate">
                   <input class="button" style="color:white;border-radius: 30px;" id="logintxt" type="submit" name="btnDecimal" value="Confirmar">
  </div>
    <li class="collection-item avatar">
      <img src="images/romano.jpg" alt="" class="circle">
      <i class="material-icons circle green dark">XI</i>
      <span class="title">Romano</span>
     

       <div class="row">

     <div class="input-field col s4" >
                  <input placeholder="Digite o número romano" name="romano_num" id="romano_num" type="text" class="validate">
                   <input class="button" style="color:white;border-radius: 30px;" id="logintxt" type="submit" name="btnRomano" value="Confirmar">
 </div>
  </ul>                    

 </li>

             
     </div>

  </div>
          
      
  </div>
             
    
      
   
</form>

 


</body>
</html>

