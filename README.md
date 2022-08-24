<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD de rotas de API para o cadastro de bolos e lista de interessados.

Para a implementacao do CRUD fora utilizado:

- PostgreSQL v14.5
- Laravel v9.25.1
- Padrao REST
- API Resource personalizadas (https://laravel.com/docs/9.x/eloquent-resources)
- Validation com Form Request para os Controllers (https://laravel.com/docs/9.x/validation#form-request-validation)

OBS: O processo do envio de email não fora finalizado 100%.


## Instalando o projeto
#### Clonar o repositório

```
https://github.com/SidneySCosta/api-cakes.git
```

#### Instalar as depencências

```
composer install
```

OU

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```

## Testar API via Postman/Insominia
No `BODY` setar os seguintes parametros:
```bash
  content-type: application/json
  accept: application/json
```

Na `URL` setar o servidor local:
```bash
http://127.0.0.1:8000/api/bolos
http://127.0.0.1:8000/api/interessados
```


As `COLLECTIONS` estão na raiz do projeto.


