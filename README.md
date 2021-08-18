### install

-   git clone https://github.com/Pensirik/clbstest.git
-   cd to project
-   edit your .env file and change to your database name , username, password
-   DB_DATABASE=webdev
-   DB_USERNAME=
-   DB_PASSWORD=
-   composer install
-   php artisan key:generate

### mirgrate and seed user

-   php artisan migrate
-   php artisan db:seed --class=FormfieldSeeder

### or download database 
<p align="left">
  <a href="https://github.com/Pensirik/clbs_test/blob/main/public/webdev.sql"> webdev.sql </a>
</p>

### run test

-   php artisan serve



### screenshot

-   http://127.0.0.1:8000/

<p align="left">
  <img src="https://github.com/Pensirik/clbs_test/blob/main/public/screenshot/1.png" width="350" alt="accessibility text">
</p>
<p align="left">
  <img src="https://github.com/Pensirik/clbs_test/blob/main/public/screenshot/2.png" width="350" alt="accessibility text">
</p>
<p align="left">
  <img src="https://github.com/Pensirik/clbs_test/blob/main/public/screenshot/3.png" width="350" alt="accessibility text">
</p>
<p align="left">
  <img src="https://github.com/Pensirik/clbs_test/blob/main/public/screenshot/4.png" width="350" alt="accessibility text">
</p>
