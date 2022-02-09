# Laravel api project for bus ticket system
This application uses the laravel 8

### Project Installation

cloning repo
```bash
Repo URL : https://github.com/mmmsafry/bus-ticket-system-laravel

[ssh] git clone git@github.com:mmmsafry/bus-ticket-system-laravel.git
or 
[http] git clone https://github.com/mmmsafry/bus-ticket-system-laravel.git
```

Install dependencies using composer
```bash
composer install
```


### Database migration and seeders
Create Database ``villvay``

``php artisan migrate fresh --seed`` run this command to create the table

update mysql credential in ``.env``



### Run Project in local
```bash
php artisan serve 
```

### POSTMAN
After that, open POSTMAN `http://localhost:8080` run import ``api.postman.ticket-reservation-system.postman_collection.json`` and check the apis.


### Note 
I have implemented laravel passport for authentication, please follow the official docs for more info.

```bash
php artisan passport:install
```
example output
```
Client ID: 6
Client secret: tblKwZJCLxkwPOZgmWZ39XY2XYWVIwCg23OsUaS7
```

Please update the   ```"client_id"```, ```"client_secret"```, in the login request please update in order to authenticate

```.env``` file are shared via email (please download the attachment) 
if you need please  copy the public and private keys to storage folder in the ````project_root/storage```` directory 
