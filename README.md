## Construído com

* [Docker](https://www.docker.com/)
* [Nginx](https://www.nginx.com)
* [Laravel 11](https://laravel.com/)
* [MySQL](https://www.mysql.com/)
* [PHP 8.2](https://nodejs.org)
* [Node](https://nodejs.org)
* [NPM](https://www.npmjs.com)

## Instruções

Segue abaixo as instruções para a execução do projeto!

### Pré requisitos

- Download - [Docker](https://docs.docker.com/engine/install/)

## Comandos Makefile

- `make run-app` : Inicia a aplicação com todos comandos necessários, na porta 8001
- `make kill-app` : Derruba a aplicação
- `make enter-nginx-container` : Entra no container do NGINX
- `make enter-php-container` : Entra no container do PHP
- `make enter-mysql-container` : Entra no container do MYSQL
- `make flush-db` : Executa as migrations novamente
- `make flush-db-with-seeding` : Executa as migrations novamente com as seeders

## Nota

- Caso encontre problemas de permissão, execute os comando com ```sudo```.
- Para realizar o primeiro login, utilize as seguintes credenciais:
- Email: admin@example.com
- Senha: admin123

## Fontes

- UI utilizada - [KUI Breeze](https://github.com/Kamona-WD/kui-laravel-breeze)
- Template Laravel utilizado - [ishaqadhel](https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter)
- Cálculo de IMC - [fetalmed](https://www.fetalmed.net/calculadoras/calculadora-de-indice-de-massa-corporal-imc-e-peso-ideal/)
