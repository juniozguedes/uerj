## Instalação Git
```
sudo apt-get update
sudo apt install git
```

## Instalação Docker Engine

* [Instalando Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/
) 
* [Instalando Docker Compose](https://docs.docker.com/compose/install/
) 

## Buildar a maquina com compose

Acessar raiz do projeto e digitar
```
sudo docker-compose up --build -d
```
Entrar na pasta lsapp
```
cd lsapp
```
Copiar o .env
```
cp .env.example .env
```
Dar permissão para que o laravel possa escrever no storage
```
sudo chmod -R 777 storage
```
## Rodar Compose php

### AINDA DENTRO DA PASTA SRC
```
sudo docker run --rm -v $(pwd):/app composer install
```
Erro conhecido: Connection.php line 664
could not find driver (Não afeta funcionamento da aplicação)

## Acessar a maquina de aplicacao
```
sudo docker exec -i -t uerj_app_1 /bin/bash

OU

sudo docker exec -i -t uerj_app_1 /bin/sh

```
Limpar Cash configuracao PHP
```
php artisan config:clear
```
Instalar o migrate
```
php artisan migrate:install
```
Migrar as tabelas do banco
```
php artisan migrate
```
Gerar chave Artisan
```
php artisan key:generate
```

### Considerações:

Em caso de erros durante a migração pode ser utilizado os seguintes comandos dentro da máquina docker:

php artisan config:clear
php artisan cache:clear

Após rodar o projeto, importar o dump que se encontra na raíz do projeto dentro da pasta dump para criar o usuário admin com login: uerj@uerj.com.br // senha: uerj2019resiste