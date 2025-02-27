<?

// Testando o IMC                      // Importante que o "calc" será apenas o nome da função, e só será retornada para mostrar o resultado pós input. Início ln 4, retorno ln 11;
function calc($peso,$altura):float{   // aqui criei uma função simples chamada calc, onde vai receber as var peso e altura;
  $imc = $altura / ($peso**2);        // aqui fiz a definição que a var imc armazenará o resultado da operação;
  return $imc;                        // retorno da operação;
}

// Gerando a resposta                  // var resposta receberá os input da função calc;
$resposta = calc(1.80,80);            // Aqui faço o input dos valores definidos na função;
echo $resposta;                       // Aqui trará a resposta da operação;
?>


