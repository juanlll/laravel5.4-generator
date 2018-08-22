<h1>Pasos para iniciar el proyecto</h1>


## 1- composer install
## 2- php artisan key:generate
## 3- composer update
## 4- crear base de datos en mysql o postgresl
## 5- modificar .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=generator
DB_USERNAME=root
DB_PASSWORD=


## 6- php artisan migrate
## 7- php artisan serve


<h1>Generar Crud</h1>

## 1- crear post.json

[
    {
        "name": "id",
        "dbType": "increments",
        "htmlType": "",
        "validations": "",
        "searchable": false,
        "fillable": false,
        "primary": true,
        "inForm": false,
        "inIndex": false
    },
    {
        "name": "titulo",
        "dbType": "string",
        "htmlType": "text"
    },
    {
        "name": "descripcion",
        "dbType": "string",
        "htmlType": "text"
    },
    {
        "name": "created_at",
        "dbType": "timestamp",
        "htmlType": "",
        "validations": "",
        "searchable": false,
        "fillable": false,
        "primary": false,
        "inForm": false,
        "inIndex": false
    },
    {
        "name": "updated_at",
        "dbType": "timestamp",
        "htmlType": "",
        "validations": "",
        "searchable": false,
        "fillable": false,
        "primary": false,
        "inForm": false,
        "inIndex": false
    }


]


## 2- insertar en consola:
Fields From File:

php artisan infyom:scaffold Post --fieldsFile=posts.json

