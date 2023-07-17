# Calculadora com PHP

Projeto simples de uma calculadora feita com HTML, CSS e PHP.
Usei HTML para criar um pequeno formulário para simular nossa calculadora. Com PHP usei estruturas de decisão para identificar situações das operações básicas de de soma, subtração, multiplicação ou divisão e assim realizar nossos cálculos.

## Funcionalidades

- Adição: Realiza a soma de dois números.
- Subtração: Realiza a subtração de dois números.
- Multiplicação: Realiza a multiplicação de dois números.
- Divisão: Realiza a divisão de dois números.

## Requisitos do Sistema

PHP 7.0 ou superior.

## Como Usar

1. Certifique-se de ter o PHP instalado em seu servidor ou ambiente de desenvolvimento.
2. Faça o download dos arquivos do projeto ou clone o repositório.
3 .Coloque os arquivos em um servidor web compatível com PHP.
4 .Acesse o arquivo index.php pelo seu navegador.

## Exemplo de Uso

    include 'calculator.php';

    $calculator = new Calculator();

    $result1 = $calculator->add(5, 3); // Resultado: 8
    $result2 = $calculator->subtract(10, 4); // Resultado: 6
    $result3 = $calculator->multiply(2, 5); // Resultado: 10
    $result4 = $calculator->divide(15, 3); // Resultado: 5

## Contribuição

Contribuições são bem-vindas! Se você deseja melhorar ou adicionar novas funcionalidades ao projeto, sinta-se à vontade para fazer um fork do repositório e enviar um pull request.

## Autor

- Nome: Guilherme Benjamin Sordi
- GitHub: [gu1lh3rm3s0rd1](https://github.com/gu1lh3rm3s0rd1)
- LinkedIn: [guilhermesordi](https://www.linkedin.com/in/guilherme-sordi-33ab06233/)

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter mais detalhes.
