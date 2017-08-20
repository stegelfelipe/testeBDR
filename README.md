# Teste Analista Desenvolvedor PHP da BDR

Este repositório contém as soluções dos exercícios 1 a 3 requisitados na prova de Analista PHP para a BDR. O exercício 4 trata de um projeto de gerenciamento de tarefas.

## Requisitos

Servidor web
PHP >= 5.3
Composer disponível para a instalação.
Regras definidas pela PSR-2
Banco de dados MySQL
Framework CakePHP (opcional)

## Como usar

git clone https://github.com/stegelfelipe/testeBDR nomedoprojeto

Coloca o diretório em uma área de teste ex: localhost

Para testar local você pode usar o XAMPP ou WAMPP, ambos possuem o (Apache, PHP e MySQL).


 - Questão 1

Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

Solução:

Função simples com calculo de módulo de 3 e 5.

Acesse http://localhost/nomedoprojeto/questao1/

Arquivo index.php na pasta questao1


- Questão 2

Refatore o código abaixo, fazendo as alterações que julgar necessário.

<?
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}

Solução:

* Inserido o inicio da session para gravar a e a opção caso o usuário não esteja logado.
* Adequada às regras da psr-2

Instalação

O mesmo deve ser aberto em um editor de texto ou IDE de sua preferência.

Acesse http://localhost/nomedoprojeto/questao2/

Arquivo index.php na pasta questao2

- Questão 3

Refatore o código abaixo, fazendo as alterações que julgar necessário.

<?php

class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');

        sort($results);

        return $results;
    }
}

Solução:

* Foi inserido os dados do banco e inserido a busca para trazer os resultados
* Adequada às regras da psr-2

Instalação

O mesmo deve ser aberto em um editor de texto ou IDE de sua preferência.

Acesse http://localhost/nomedoprojeto/questao3/

Arquivo index.php na pasta questao3


- Questão 4

Desenvolva uma API Rest para um sistema gerenciador de tarefas
(inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por
prioridade.

Solução:

* Framework Cakephp
* Criado interface do painel para gerenciamento das tarefas
* Adequada às regras da psr-2
* Totalmente responsivo (desktop e mobile)

Instalação

Colocar a pasta "questao4" no servidor
Importar o arquivo "question4/bancodedados/dbase.sql" no PhpMyAdmin ou diretamente no console mysql
Reconfigurar os dados de acesso a banco no arquivo "question4/config/app.php" adequando "host", "username" e "password".
Por padrão encontra-se:

'username' => 'root',
'password' => 'root',
'database' => 'bdr_tarefas',


Foi utilizado o Framework CakePHP 3, com isso para ter acesso visual ao projeto, você pode estar startando o servidor,
através do diretório testeBDR/questao4/bin e execute o comando:

cake server

Após isso acesse http://localhost:8765/

## ScreenShots do Projeto

Listas de Tarefas - http://prntscr.com/gaqybr
Add Nova Tarefa - http://prntscr.com/gaqyg8
Ver a Tarefa - http://prntscr.com/gaqynh
Editar a Tarefa - http://prntscr.com/gaqz05
Remover a Tarefa - http://prntscr.com/gaqz96





