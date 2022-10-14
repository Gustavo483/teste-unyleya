<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Passo-a-passo - Instalação do projeto
1. Em sua pasta raiz, clone o arquivo do projeto usando **git clone** https://github.com/Gustavo483/teste-unyleya.git
2. Abra a pasta do projeto em seu terminal e execute o comando:

```sh
composer install
```

4. Na pasta do projeto, crie um arquivo `.env`, e gere a chave para este projeto usando o comando:

```sh
php artisan key:generate
```

5. Em seguida, compile os dados de CSS e JS usando os comando:

```sh
npm install && npm run dev
```

6. No arquivo `.env` que foi criado, crie um banco de dados MySql:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=NAMEDB
DB_USERNAME=DB_USERNAME
DB_PASSWORD=DB_PASSWORD
```

8. Após conectar o banco de dados, execute o comando abaixo para gerar as tabelas e alguns dados para popular o banco.

```sh
php artisan migrate:fresh --seed
```

Por último, execute o comando abaixo para servir a aplicação e o projeto poderá ser acessado.

```sh
php artisan serve
```
