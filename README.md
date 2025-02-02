# RANCANGAN-BANGUN-SISTEM-INFORMASI-TOUR-TRAVEL
TUGAS AKHIR

## Langkah instalasi


For PHP dependencies
`composer install`

For Node.js dependencies
`npm install`

<br>

## Copy the .env.example File:
Copy the .env.example file to create a new .env file.

<br>

## Generate the Application Key:
`php artisan key:generate`

<br>

## Configure the Environment:
Open the .env file and configure your database

`DB_CONNECTION=mysql` <br>
`DB_HOST=127.0.0.1` <br>
`DB_PORT=3306` <br>
`DB_DATABASE=travel_agency_db` <br>
`DB_USERNAME=root` <br>
`DB_PASSWORD=` <br><br>
`APP_NAME=SriLankaTours` <br>

<br>

## Run Database Migrations:
> [!WARNING]
> Run Database Migrations is not recomandaed for this
`php artisan migrate `

<br>

> [!NOTE]
> Becouse if your are  Run Database Migrations website has not any data. > ( Blogs, Travel Packages) <br>
> #But you can Add this data using admin panel

> [!TIP]
> ### Recomanded
> In this files has " `Database SQL` " folder and this folder has database file(sql)
> Name " `travel_agency_db` " use this sql file for database

<br><br>

<h1 align="center"> Deploy Web Application </h1>
    
## Run the Vite Development Server:
`npm run dev`

<br>

## Start Laravel Development Server:
`php artisan serve`

<br>

## Access Your Application:
Open your browser and navigate to http://127.0.0.1:8000 to verify that your application is working correctly.

<br><br>

<h1 align="center"> For Login </h1>

> [!NOTE]
> If You are use `Database SQL`  folder's database file (sql), Then you can use this login details.<br>
> Or register as a new user. <br>
    

   
