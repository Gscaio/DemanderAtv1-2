<?php include_once 'conexao.php';?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Demander - Força de vendas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  
<?php include_once "styledemander.php"?>


  </head>


  <style>
.grid-treemap { 
  text-align:center;
  color: white;
  text-shadow: 1px 1px 2px black;

  width: 800px;
  height: 600px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  gap: 1px 1px;
  grid-auto-flow: row;


   
}
.div1:hover{color: #60db95;transition: 0.15s;}
.div2:hover{color: #60db95;transition: 0.15s;}
.div3:hover{color: #60db95;transition: 0.15s;}
.div4:hover{color: #60db95;transition: 0.15s;}
.div5:hover{color: #60db95;transition: 0.15s;}
.div6:hover{color: #60db95;transition: 0.15s;}




#gridtemplate0{

  grid-template-areas:
          "div1 div1 div2"
          "div3 div3 div2"
          "div4 div5 div6";

}

#gridtemplate1{

  grid-template-areas:
          "div1 div1 div2"
          "div3 div3 div2"
          "div4 div5 div6";

}

#gridtemplate2{

  grid-template-areas:
          "div1 div2 div2"
          "div3 div3 div6"
          "div4 div5 div5";

}

#gridtemplate3{

  grid-template-areas:
          "div1 div2 div2"
          "div3 div3 div3"
          "div4 div5 div6";

}


.div1 { grid-area: div1;
 display: flex;
  justify-content: center;
  align-items: center; }

.div2 { grid-area: div2; 
 display: flex;
  justify-content: center;
  align-items: center;}

.div3 { grid-area: div3;
 display: flex;
  justify-content: center;
  align-items: center; }

.div4 { grid-area: div4;
 display: flex;
  justify-content: center;
  align-items: center; }

.div5 { grid-area: div5;
 display: flex;
  justify-content: center;
  align-items: center; }

.div6 { grid-area: div6; 
 display: flex;
  justify-content: center;
  align-items: center;}






.btnR {
 
    
    background-image: url(backgrounds/flag-24.png);
      background-repeat: no-repeat;
         background-position: center center;
        background-size: 24px 24px;
      
  background-color: #204887; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 8px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
  margin-left:70%;
}

/* Darker background on mouse-over */
.btnR:hover {
  background-color: #5487ff;
}


  </style>
  


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
      <a href="index.php" class="breadcrumb" style="padding:15px;">início</a>
        <a href="#" class="breadcrumb">Treemap</a>
        
        
      </div>
    </div>
  </nav>

     <br>



 
 <br>
 
 <br>




 <div style="margin-left:15px;margin-right:15px;">

  <blockquote>Variação nas vendas de veículos(junho e julho 2024) </blockquote>
  <button style="border-radius: 10px;" class="btnR" onclick="location.href='treemap_edit.php';">
  <i class="material-icons">settings</i></button>
    <ul class="collection">
    
   <li class="collection-item avatar">

  
<?php

$sqlquadro =mysqli_query($conn, "SELECT * FROM treemap where 1");

 while($line = mysqli_fetch_array($sqlquadro)){
  $idquadro = $line['id'];
  $qtd_venda_quadro = $line['qtd_venda'];
  



//switch para definir o tamanho dos quadros

switch ($idquadro){
 case 1:

    switch (true) {
        case ($qtd_venda_quadro >= 20000):
          $gridtemplate="gridtemplate1"; 
            break;
        case ($qtd_venda_quadro >= 15000):
          $gridtemplate="gridtemplate2"; 
            break;
        case ($qtd_venda_quadro >= 4000):
          $gridtemplate="gridtemplate3"; 
            break;
        default:
          $gridtemplate="gridtemplate1"; 
            break;
    };

}
 }
?>






  

<div class="grid-treemap" id=<?php echo $gridtemplate;?>>



  <?php 
 


//exibir o total de veículos vendidos no mês atual
 $sqltotal = mysqli_query($conn, "SELECT sum(qtd_venda) FROM treemap");
 $linhas = mysqli_num_rows($sqltotal);
while($linhas = mysqli_fetch_array($sqltotal)){
  $totalatual = $linhas['sum(qtd_venda)'];

    //echo "total de carros vendidos ".$totalatual."<br>";
}



 //definir variáveis de marca e qtd de vendas

 $sql =mysqli_query($conn, "SELECT * FROM treemap where 1");

 while($line = mysqli_fetch_array($sql)){
  $id = $line['id'];
  $marca = $line['marca'];
  $qtd_venda = $line['qtd_venda'];
  $qtd_venda_old = $line['qtd_venda_old'];

//va-vb/vb x 100
//echo $qtd_venda;
//$totalatual +=$qtd_venda;



//descobrir porcentagem de variação de um mês para outro
$porcentagem_variacao = (($qtd_venda - $qtd_venda_old)/$qtd_venda_old) * 100;  
$porcentagem_variacao = number_format($porcentagem_variacao, 2, '.', '');


//echo "porcentagem de variação de ".$marca.": ".$porcentagem_variacao."%<br>";


$resultadoporcentagem=($qtd_venda / $totalatual) * 100;
$resultadoporcentagem = number_format($resultadoporcentagem, 2, '.', '');




  ?>

<?php 
//switch para definir a cor no treemap
    switch (true) {
        case ($porcentagem_variacao >= 5):
            $cor = '#008c15';
            break;
        case ($porcentagem_variacao >= 2):
            $cor = '#5ee072';
            break;
        case ($porcentagem_variacao <= -2):
            $cor = '#a3342c';
            break;
        case ($porcentagem_variacao <= 0):
            $cor = '#ff867d';
            break;
    }

    
?>


  <div class=<?php
  

$div = 'div'.$id;





  echo $div; ?> style=<?php echo "background-color:".$cor;?>><?php echo $marca."<br>".$porcentagem_variacao."%"."<br>";?></div>
 
        
 
<?php 

  

 }
  


?>



</div>
<!--fechar fundo branco-->


      </li>

  </ul>   


  </div>









</body>
</html>