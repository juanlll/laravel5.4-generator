##PASOS:
## 1- composer install
## 2- php artisan key:generate
## 3- composer update
## 3- crear base de datos en mysql o postgresl
## 3- modificar .env:
	<pre>


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=generator
DB_USERNAME=root
DB_PASSWORD=


	</pre>
## 3- php artisan migrate
## 4- php artisan serve
