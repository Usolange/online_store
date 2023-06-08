* databasename:online_store
* modalname:categories
* regno:20RP04191
# Online_Store category Management API. 

This is an API for managing categories in an online_store. It is built using Laravel and MySQL.
also this laravel project with database migration,models,controllers,and routes.
this laravel project has table colled categories and this table contain columns:id,name,lft,rgt,created_at,and updated_art.

# Requirement/Prerequisites

* PHP 7.4 or higher
* Composer
* MySQL
* Laravel 8

 # Configure the database connection:

 * Create a new MySQL database for the project
 * In `.env` file and update the following lines with your database credentials:
                        DB_CONNECTION=mysql
                        DB_HOST=127.0.0.1
                        DB_PORT=3306
                        DB_DATABASE=online_store
                        DB_USERNAME=root
                        DB_PASSWORD=
 
# to Start the local development server for running application:

* php artisan serve
* The API will be available on `http://127.0.0.1:8000` this link is required.

# for accessing we will need to use this API Endpoints

* GET /categories: Retrieve all categories in XML format.
* GET /categories/{id}: Retrieve a specific category by its ID in XML format.
* POST /categories: Create a new category.
* PUT /categories/{id}: Update an existing category by its ID. 
* DELETE /categories/{id}: Delete a category by its ID.

# if you want to Test use the following commands
* php artisan make:test CategoryTest
* To run the unit tests, execute the following command 
* "php artisan test":
