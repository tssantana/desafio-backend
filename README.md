## Sobre o Desafio

Criar uma aplicação para consumir uma API e mostrar algumas informações relevantes sobre as empresas da bolsa.

Neste repositório você conseguirá:
 - Autenticar o usuário;
 - Consultar as informações da empresa;
 - Visualizar a documentação da API;
 - Realizar teste na API.

## Como Instalar?

Esse repositório contém uma aplicação LARAVEL(https://laravel.com/docs), portanto os pré-requisitos do próprio framework são esseciais para iniciar essa aplicação, veja alguns:
 - Composer;
 - PHP (^7.3|^8.0).

Depois de instalar as informações acima, basta abrir o diretório raiz desde reposítório e executar:
```
composer install
```
O composer irá baixar os pacotes necessários para iniciar a aplicaçao. Quando terminar, certifique-se que o arquivo **.env** está no diretório. Abra-o e compare com o arquivo **.env.example**. Esse arquivo já está pré-configurado.

No arquivo .env você deverá informar algumas variáveis para conectar com o banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[nome do banco de dados]
DB_USERNAME=[nome do usuário]
DB_PASSWORD=[senha do usuário]
```
Além disso, os dados de conexão da api também serão necessários:
```
IEXCLOUD_URL=https://cloud.iexapis.com/v1
IEXCLOUD_TOKEN=[token de autorização da api]
```

Depois de configurado, basta executar:
```
php artisan migrate
```

Pronto, para subir a aplicação execute ```php artisan serve ``` e acesse o link ***http://localhost:8000*** no seu navegador.

## Dependências

Foram utilizas dois pacotes importantes para agilizar o desenvolvimento:
 - Laravel Breeze (https://laravel.com/docs/9.x/starter-kits#laravel-breeze)
 - DarkaOnLine/L5-Swagger (https://github.com/DarkaOnLine/L5-Swagger)
