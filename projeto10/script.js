const getValores = () => {
  const valor1 = parseFloat(document.getElementById('valor1').value);
  const valor2 = parseFloat(document.getElementById('valor2').value);
  if (isNaN(valor1) || isNaN(valor2)) {
    alert("Por favor, preencha os dois valores corretamente.");
    return null;
  }
  return { valor1, valor2 };
};

const exibirResultado = (resultado) => {
  document.getElementById('resultado').textContent = resultado;
};

const soma = () => {
  const valores = getValores();
  if (!valores) return;
  exibirResultado(valores.valor1 + valores.valor2);
};

const subtracao = () => {
  const valores = getValores();
  if (!valores) return;
  exibirResultado(valores.valor1 - valores.valor2);
};

const multiplicacao = () => {
  const valores = getValores();
  if (!valores) return;
  exibirResultado(valores.valor1 * valores.valor2);
};

const divisao = () => {
  const valores = getValores();
  if (!valores) return;
  if (valores.valor2 === 0) {
    alert("Divisão por zero não é permitida.");
    return;
  }
  exibirResultado(valores.valor1 / valores.valor2);
};
