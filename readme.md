# Laravel from scratch web application

Laravel from scratch web application with Laravel 5.5.

## Installation

Clone the repository-
```
git clone https://github.com/ToTanbir/laravel-from-scratch.git
```

Then cd into the folder with this command-
```
cd laravel-from-scratch
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `fromscratch` and then do a database migration using this command-
```
php artisan migrate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app. 
