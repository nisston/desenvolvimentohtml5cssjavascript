document.addEventListener("DOMContentLoaded", function () {
    fetch('listar_clientes.php')
      .then(res => res.text())
      .then(data => {
        document.getElementById('clientes').innerHTML = data;
      })
      .catch(err => console.error("Erro ao carregar dados:", err));
  });
  