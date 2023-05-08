<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="conteiner">
<div class=" article">
    <h1>API FATOS</h1>
    <p> &nbsp; A API em uso trás informações diversas sobre curiosidades do mundo todo, 
      contendo duas opções sendo ela diaria ou aléatoria. Fornecida pela 
      uselessfacts (<a href="https://uselessfacts.jsph.pl/">Documentação</a>),
       retorna informações em formato JSON, originalmente em inglês.</p>
</div>
<div class="efeito">
  <div class="content check"> 
    <h1>FATOS CURIOSOS</h1>
    <form method="post">
        <P><input class="input1" value="input1" name="input" type="radio"> De hoje &nbsp;<input class="input2" value="input2"
                name="input"  id="input2" type="radio"> Aleatório </P><input type="submit" value="Pesquisar" role="button" class="button" >
    </form>
    <?php 
    if($_POST){
        $input = $_POST['input'];
        if ($input == 'input1') {
            $opcao = 'today';
        } else if ($input == 'input2') {
            $opcao = 'random';
        }
    }

    $url = "https://uselessfacts.jsph.pl/api/v2/facts/{$opcao}";

    $end = json_decode(file_get_contents($url));

    echo "<div class='conteiner fato'> &nbsp; &nbsp;" . utf8_decode($end->text) . "<div />";

    ?>
</div></div></div>
</body>
<style>
    
    *{
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;     
}
 body{
    /*background-image: url("https://static.vecteezy.com/ti/vetor-gratis/t2/7722025-perguntas-e-respostas-perguntas-perguntas-frequentes-ou-solucao-de-problema-ou-apoio-ideia-conceito-empresario-e-mulher-com-exclamacao-ponto-de-interrogacao-com-fala-conversa-bolha-vetor.jpg") ;
    background-repeat: no-repeat;
    background-size: cover;*/
    background-image: url(img/fundo2.jpg);
    color: #151414;
    
     
 }
.conteiner{
    display: flex;
 
    
}
.article{
    width: 20vw;
   margin-left: 8vw;
   padding-top: 30vh;
   font-size: large;
}
 .content {
    display: flex;
    border-radius: 40px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: auto;
    background-color:rgba(241, 241, 241, 0.556);
    width: 50vw;
    padding-top: 10vh;
    padding-bottom: 10vh;
   /* border: solid 3px rgb(0, 0, 0);*/
 }
 .check{
  font-size: x-large;
  padding-left: 5px;
  
  
  
 }
 .check h1{
  border-bottom: 3px dashed;
 }

 .fato{
  margin-top: 25px; 
  max-height: 20px;

 }
 
 .efeito{ 
   width: min-content;
   height: min-content;
   display: flex;
   padding: 10px;
   justify-content: right;
   align-items:flex-end;
   flex-direction: column;
   margin: auto;
   border: 10px solid rgba(0, 0, 0, 0.908);
   border-radius: 50px;
   margin-top: 15vh;
   box-shadow: 15px 5px 30px 1px rgba(157, 157, 157, 0.678);
  }


 h1{
    border-bottom: solid 5px;
    margin-top: -10px;
    font-size: xx-large;
    
 }

 a{
        text-decoration: underline;
        color: black;
    }

.checkbox{ 
    
    height: 20px;
    width: 20px;
    background-color: #eee;
    border:0 none;
    border-radius: 2px ;
    
}

.button {
  background-color: #f6effa;
  border: 2px solid #422800;
  border-radius: 30px;
  box-shadow: #422800 4px 4px 0 0;
  color: #422800;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  font-size: 18px;
  padding: 0 18px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;

  position: relative;
    left: 40px;
    width: 60%;
  
}

.button:hover {
  background-color: #fff;
}

.button:active {
  box-shadow: #422800 2px 2px 0 0;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .button{
    min-width: 120px;
    padding: 0 25px;
  }
}
/*telas menor q 800*/
/* max-width  */
@media screen and (max-width: 900px) {
	.conteiner {
        display:block;

	}
    .article{
        width: fit-content;
        margin: 20px;
        padding-top: 10px;
    }
    .efeito{
        margin-top: 5vh;
    }
   
	
}
</style>
</html>