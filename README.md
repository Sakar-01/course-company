
# Course-Company


This a laravel web application design for a company which sells their courses. This poject helps to showcase company profile and courses. This courses has their specific pages where users can add the request to purchase. This purcase requests managed by admin specific dashboard.




## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=horizon
    DB_USERNAME=root
    DB_PASSWORD=


## Run Locally

Clone the project

```bash
  git clone https://github.com/Sakar-01/course-company.git
```
Import database from database/course_company.sql

Go to the project directory

```bash
  cd course-company
```

Install dependencies

```bash
  composer install 
  php artisan key:generate
```

Start the server

```bash
  php artisan serve
```

