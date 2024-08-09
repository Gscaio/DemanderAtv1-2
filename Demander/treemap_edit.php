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
  
  width: 800px;
  height: 600px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  gap: 1px 1px;
  grid-auto-flow: row;


   
}
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


.div1 { grid-area: div1; }

.div2 { grid-area: div2; }

.div3 { grid-area: div3; }

.div4 { grid-area: div4; }

.div5 { grid-area: div5; }

.div6 { grid-area: div6; }



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
        <a href="treemap.php" class="breadcrumb" style="padding:15px;">Treemap</a>
         <a href="#" class="breadcrumb" style="padding:15px;">Editar</a>
        
      </div>
    </div>
  </nav>

     <br>



 
 <br>
 
 <br>




 <div style="margin-left:15px;margin-right:15px;">


  
    <ul class="collection">
   <li class="collection-item avatar">

 

<div class="grid-treemap" id="gridtemplate1">



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

//$totalatual, $qtd_venda

 

  //função para descobrir a porcentagem de cada marca em relação ao total
  
//function descobrir_porcentagem(float $valor_base, float $valor): float
//{
 
   //echo $resultado = $valor / $valor_base * 100;
  
//}

//var_dump(descobrir_porcentagem ($totalatual, $qtd_venda)); 

 //$resultadoporcentagem = descobrir_porcentagem ($totalatual, $qtd_venda);


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


//switch para definir o tamanho dos quadros




  echo $div; ?> style=<?php echo "background-color:".$cor;?>><?php echo $marca."<br>".$porcentagem_variacao."%"."<br>".$qtd_venda;?>
  <br>
  <form method="POST" action="atualiza_treemap.php" enctype="multipart/form-data">
  <input value=<?php echo $id;?> id="id" type="hidden" name="id" class="validate">
   <input value=<?php echo $qtd_venda;?> id="venda" type="venda" name="venda" class="validate"><br>
          <label for="venda" style="color:black">Qtd. Vendas do mês atual</label> <br>
          <input class="button" style="color:white;" id="logintxt" type="submit" name="btnAtualiza" value="Atualizar">
          </form>
  </div>

 
       
       
       
 
<?php 

  

 }
  

  //if($resultadoporcentagem==)
?>

</div>
<!--quadro branco-->
      </li>

  </ul>   


   
      


 
  </div>









</body>
</html>