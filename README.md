# Laravel api project for bus ticket system
This application uses the laravel 8

### Project Installation

cloning repo
```bash
git clone https://github.com/mmmsafry/
```

Install dependencies using composer
```bash
composer install
```


### Database migration and seeders
Create Database ``villvay``

``php artisan migrate fresh --seed`` run this command to create the table

update mysql credential in ``app\config\database.php``



### Run Project in local
```bash
php artisan serve 
```

### POSTMAN
After that, open POSTMAN `http://localhost:8080` run import ``api.postman.ticket-reservation-system.postman_collection.json`` and check the apis.

