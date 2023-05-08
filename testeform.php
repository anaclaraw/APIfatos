<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>

<body>

    <h1>Fatos Inuteis</h1>
    <form >
        <P><input class="input1" value="input1" name="input" type="radio"> Aleatório<input class="input2" value="input2"
                name="input"  id="input2" type="radio"> De hoje</P>
                <input type="button" id="ajaxButton" value="Pesquisar">
    </form>
    <div id="resposta"></div>
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

    echo "<br><strong>Fato:</strong> " . utf8_decode($end->text) . "<br />";

    ?>

<script type="text/javascript" src="/js/example.js"></script>

<script>
  var form = document.querySelector('form');
form.addEventListener('submit', function(e) {
  e.preventDefault(); // <--- isto pára o envio da form

  var url = this.action; // <--- o url que processa a form
  var formData = new FormData(this); // <--- os dados da form
  var ajax = new XMLHttpRequest();
  ajax.open("POST", url, true);
  ajax.onload = function() {
    if (ajax.status == 200) {
      var dados = JSON.parse(ajax.responseText);
      alert('Dados enviados:\n' + JSON.stringify(dados, null, 4));
    } else {
      alert('Algo falhou...');
    }
  };
  ajax.send(formData);
});


</script>


</body>

</html>