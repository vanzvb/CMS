1
composer create-project laravel/laravel CMS 8.0
or
composer create-project laravel/laravel:^8.0 CMS

2
https://stackoverflow.com/questions/65446578/problem-with-installing-laravel-ui-in-laravel-8
`Update manually composer.json file to have:
``"laravel/framework": "^8.12",
``"laravel/tinker": "^2.5",
``"laravel/ui": "^3.0",
```Run composer update to update packages to latest

3
https://laravelarticle.com/laravel-8-authentication-tutorial
`npm install
``npm install (2x)

4
php artisan serve



