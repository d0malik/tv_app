<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<h1>What's your favourite TV show?</h1>

<h2>A Laravel developed administrative application that allows users to save quotes from their favourite TV shows to a MySQL database.</h2>

<h4>Created by d0malik</h4>

---

This was developed and tested using a local connection to a MySQL database. If testing is required please locate the .env file in the home directory and change lines 9 through 14.

---

Installation instructions:

1. Navigate to the home directory:

        tv_app/

2. (OPTIONAL) Use the console and type:

        npm install

3. Modify the .env file with correct database information (Lines 9-14):

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=wise
        DB_USERNAME=phpmyadmin
        DB_PASSWORD=123456

4. For database migration, use the console and type:

        php artisan migrate

5. To start the web application, use the console and type:

        php artisan serve

6. Authentication is enabled. Once the database is migrated, the web application running, you can register for an account. To edit/delete quotes, begin by clicking on your name at the top-right of the page, followed by the Edit button.


>By: [Daniel Domalik](mailto:dd.domalik@gmail.com?Subject=Subject%Wise%Publishing%20Assessment), Tuesday, May 7th, 2019 @ 11:59 PM