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
