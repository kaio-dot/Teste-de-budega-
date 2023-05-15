<?php
/*if(!empty($_GET['nome']) && !empty($_GET['nascimento'])){
   $nome = $_GET['nome'];
   $nascimento =$_GET['nascimento'];
}*/
?>

<html>
   
      <input type="text" name="num1" id="num1">X
      <input type="text" name="num2" id="num2">
      <button id="btn" onclick="capturar();">Calcular</button>
   
     <span id="imprima"></span>
   

<?php
  
  /*if(!empty($nome) && !empty($nascimento)){

    //echo "Olá ".$nome.", é muito bom te-lo aqui<br>";
    //echo "Seu aniversário é ".$nascimento;
    echo '<span id="imprima">Olá '.$nome.', como vai?';

  }*/
?>
<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
<script>

    function capturar(){
        /*var nome = document.getElementById("nome").value;
        var nascimento = document.getElementById("nascimento").value;
        
        document.getElementById("imprima").innerHTML = "<br> Olá "+nome+" como vai? Sua data  de nascimento é "+nascimento+"";
        document.getElementById("nome").innerHTML ='';
        document.getElementById("nascimento").innerHTML ='';

        console.log(nome)*/

        var num1 = $('#num1').val();
        var num2 = $('#num2').val();
        var total = num1*num2;
        $('#imprima').html('<br> Resultado:'+total);
        $('#num1').val('');
        $('#num2').val('');
        console.log(total)

    }
    /*var kaio =  '<?php if(!empty($nome)){echo $nome;}?>';
    console.log(kaio)
    if(kaio != ''){
    document.getElementById("imprima").innerHTML = "Olá José, como vai?";
    }*/
</script>

</html>