Project title: Savings and Investment Strategy Maker
Frontend: html, css, js
Backend: Laravel
Database: mysql

Step 1- Download zip file.
1) Download zip file of the project.
2) Open the project folder location in command prompt.

Step 2- Download composer
1) Download composer form the link https://getcomposer.org/download/ 
2) Run command 'composer install'.
3) After the Composer is installed, check the installation by typing the 'composer' command.

Step 3- Download XAMPP
1) Download XAMPP from the the link given below:
   https://www.apachefriends.org/download.html
2) Installation:
   Complete the basic installation steps like installation folder selection and accepting the license agreement, etc.
3) Switch on (START) the database service (MySQL) and the Apache server and then you are good to go.

Step 4-Download Laravel
1) Run the following command:
   composer global require laravel/installer
   This will install all the laravel files in the project folder.
2) Run the following commands one after another.
	php artisan config:cache
	php artisan cache:clear
	php artisan key:generate
	php artisan migrate
	php artisan serve
3) The last command will start the deployment server. Copy the link (https://http://127.0.0.1:8000) in the command prompt and paste it in the browser and you are good to go.
