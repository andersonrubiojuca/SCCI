## Sistema de Infraestrutura
Baseado em um antigo projeto usando html, css, javascript, php e mysql para criar uma espécie de ouvidoria caso um hospital tivesse problema estrutural.

Este projeto foi usado em meu TCC de Sistema de Informação e precisou de um pequeno ajuste em termos de encapsulamento e Orientação a Objetos, embora ele ainda esteja um pouco distante em termos de um projeto ideal.
Na época que eu o criei eu ainda sabia apenas o básico de PHP e quase nada de JS, então ele foi feito de forma bem estrutural e simples. Hoje foi levemente atualizado no conceito de Model-View ainda sem o Controller, mas foi muito útil para encapsular o Objeto e as responsabilidades; no entanto, ainda é um projeto simples de PHP puro mas que possui um carinho de ser o meu primeiro projeto.

#### Para Instalar
Caso queira ve-lo em seu sistema o ideal é usar o XAMPP dentro da pasta htdocs, exportar o BD que é o feedback.sql que está na pasta raiz e configurar o database.json (também na pasta raiz) que é o arquivo usado para entrar no BD.
Caso não use o XAMPP (ou outro banco de dados) talvez seja necessário também ir na pasta 
php/dao e alterar os arquivos que chama o MYSQL e as querys.