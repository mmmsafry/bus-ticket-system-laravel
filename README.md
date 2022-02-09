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


### Note 
I have implemented laravel passport for authentication, please follow the official docs for more info.

```oauth-public.key```, ```oauth-public.key``` & ```.env``` files are shared via email (please download the attachment) 
if you need please  copy the public and private keys to storage folder in the ````project_root/storage```` directory 
