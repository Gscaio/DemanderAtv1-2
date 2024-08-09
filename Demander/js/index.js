 $(document).ready(function (){
    $("#logintxt").click(function (){
       var form = new FormData($("#formulario")[0]);
       $.ajax({
           url: 'recebeDataAPP.php',
           type: 'post',
           dataType: 'json',
           cache: false,
           processData: false,
           contentType: false,
           data: form,
           timeout: 8000,
           success: function(resultado){
               $("#resposta").html(resultado);
           }
       });
    });
});
