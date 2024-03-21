# Installation

## Install composer dependencies
```bash
composer install
```

## Set up database
1. Create a postgres or mysql database.
2. Create a new `.env` file in the root folder.
3. Copy the content of the `.env.example` into `.env` file
4. Change environment variables of the database.
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_password_user
    ```

## Set up the app key
Run the following command
```bash
php artisan key:generate
```

## Run migrations
```bash
php artisan migrate
```

## Install npm dependencies.
Run the following command in your terminal
```bash
npm install
```

## Run the project
```bash
npm run dev
```
```bash
php artisan serve
```
