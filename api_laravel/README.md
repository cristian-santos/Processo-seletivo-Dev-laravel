# 🚀 CRUD API - Laravel

# O projeto resulta em dois cruds, um para a manipulação de produtos e o outro para a manipulação e autenticação de usuários.

# 👨🏼‍💻 Tecnologias utilizadas

01 - PHP 8.1

02 - Laravel 9 para a criação da API.

03 - Laravel sanctum para a criação do token de autenticação.

04 - MySQL para o banco de dados.

05 - Insomnia para o envio de dados via API.


# Utilização

Para utilizar basta importar o dump do banco de dados disponibilizado e realizar as alterações no arquivo .env do laravel ou rodar as migrations para gerar o banco de dados. Depois você terá que registrar um usuário e realizar o login do mesmo para que possa usar o token de autenticação da API e poder realizar as operações que necessitam de autenticação de um usuário.

## Buscando produto
- GET produto: Utilizando o método GET todos os produtos registrados serão exibidos e caso queria buscar um produto em específico basta informa o id do mesmo.

## Adicionando produto
- POST produto: Para adicionar um produto é necessário informar no form os campos nome, descrição e valor.

## Atualizando produto
- PUT produto: Para atualizar um produto é necessário informar no form os campos nome, descrição e valor e os novos valores a serem salvos.

## Deletando produto
- DELETE produto: Para deletar um produto basta informar o seu respectivo id.

## Registrando usuário
- POST usuário: Para registrar um usuário é preciso informar no form os campos name, email, password e password_confirmation.

## Realizando o login
- POST login: Para realizar o login é preciso informar no form os campos name e password.

## Realizando o logout
- POST logout: Para realizar o logout e deletar o token de autentiação basta usar a rota logout.

## Deletando usuário
- DELETE usuarios: Para deletar um usuario basta informar o seu respectivo id.