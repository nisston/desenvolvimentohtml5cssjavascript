// Condicional simples e composta
const verificarNumero = () => {
  const num = parseInt(document.getElementById('numeroCond').value);
  let resultado = '';

  if (num > 0) {
    resultado = "O número é positivo.";
  } else if (num < 0) {
    resultado = "O número é negativo.";
  } else {
    resultado = "O número é zero.";
  }

  document.getElementById('resultadoCond').textContent = resultado;
};

// Switch
const verificarDia = () => {
  const dia = document.getElementById('diaSemana').value.toLowerCase();
  let resultado = '';

  switch(dia) {
    case 'segunda':
      resultado = "Começo da semana!";
      break;
    case 'sexta':
      resultado = "Sextou!";
      break;
    case 'sábado':
    case 'sabado':
    case 'domingo':
      resultado = "É fim de semana!";
      break;
    default:
      resultado = "Dia comum.";
  }

  document.getElementById('resultadoSwitch').textContent = resultado;
};

// Estrutura de repetição: For
const mostrarFor = () => {
  let resultado = '';
  for (let i = 1; i <= 5; i++) {
    resultado += `For: ${i} `;
  }
  document.getElementById('resultadoRepeticao').textContent = resultado;
};

// Estrutura de repetição: While
const mostrarWhile = () => {
  let resultado = '';
  let i = 1;
  while (i <= 5) {
    resultado += `While: ${i} `;
    i++;
  }
  document.getElementById('resultadoRepeticao').textContent = resultado;
};

// Estrutura de repetição: Do...While
const mostrarDoWhile = () => {
  let resultado = '';
  let i = 1;
  do {
    resultado += `DoWhile: ${i} `;
    i++;
  } while (i <= 5);
  
  document.getElementById('resultadoRepeticao').textContent = resultado;
};
