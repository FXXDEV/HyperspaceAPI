# HyperspaceAPI

#### Framerworks e Lingagens Utilizadas 
  - Laravel 7.0.2
  - PHP ^7.2
#### Banco de dados utilizado
 - MySQL 5.7

###### Configuração de Ambiente
Após clonar o repositório...

1. Executar o comando "composer install" no diretório api;
1. renomear ".env.example" para ".env"
	1. Alterar nome do banco de dados para "DB_DATABASE"="hyperspace";
	1. Alterar alterar "DB_USERNAME=''" para seu usuário do banco de dados;
	1. Aleterar "DB_PASSWORD=''" para a senha referente ao usuário do banco de dados;
1. Executar o comando "php artisan key:gen";
1. Executar o comando "php artisan migrate:fresh --seed" ( seeders recebidos através de requisições a [swapi](https://swapi.co/) );
1. Executar o comando "php artisan serve" para executar o servidor;


#### Rotas permitidas para requisições


- Listagem de planetas: '/api/planets/all' **(Método GET)**;
- Detalhe de planeta por ID: '/api/planets/id/{id}'  **(Método GET)**;
- Detalhe de planeta por NAME: '/api/planets/name/{name}'  **(Método GET)**; 

- Listagem de pessoas: '/api/people/all' **(Método GET)**;
- Detalhe de pessoa por ID: '/api/people/id/{id}  **(Método GET)**;
- Detalhe de pessoa por NAME: '/api/people/name/{name} **(Método GET)**;

- Listagem de visitas: '/api/visits/list' **(Método GET)**;
- Ranking de visitas: '/api/visits/ranking' **(Método GET)**;
- Cadastro de visitas: '/api/visits?people_id=(PARARMETRO)&planet_name=(PARAMETRO)' **(Método POST)**;


#### Procedimentos para execução de testes

###### Digite os seguintes comandos para rodar os testes
Os testes de navegador serão executados pelo PHPUnit

###### PHPUnit
 - ./vendor/bin/phpunit ||  *Para executar todos os testes*;
 - ./vendor/bin/phpunit --filter testRanking || *Para executar o teste do ranking de visitas*;
 - ./vendor/bin/phpunit --filter testVisitsList || *Para executar o teste da lista de visitas*;
 - ./vendor/bin/phpunit --filter testStoreVists || *Para executar o teste de cadastrar uma nova visita*;

 - ./vendor/bin/phpunit --filter testPeopleList || *Para executar o teste da lista de pessoas*;
 - ./vendor/bin/phpunit --filter testPeopleDetailsByName || *Para executar o teste dos detalhes das pessoas por nome*;
 - ./vendor/bin/phpunit --filter testPeopleDetailsById || *Para executar o teste dos detalhes das pessoas por id*;


 - ./vendor/bin/phpunit --filter testPlanetsList || *Para executar o teste da lista de planetas*;
 - ./vendor/bin/phpunit --filter testPlanetDetailsByName || *Para executar o teste dos detalhes dos planetas por nome*;
 - ./vendor/bin/phpunit --filter testPlanetDetailsById || *Para executar o teste dos detalhes dos planetas por id*;



