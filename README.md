<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


# Electric Components Store - Laravel Project

## Overview

This Laravel-based project is designed for a small business specializing in the sale of electric components, such as bulbs and related items. The website serves as an online platform showcasing their products, featuring neon projects as advertisements, owner information pages, and providing essential e-commerce functionalities for users.

## Features

### 1. Neon Projects Advertisement

- **Featured Projects:** Highlighting various neon projects to attract users and showcase the business's capabilities.

### 2. Owner Information Pages

- **About Pages:** Detailed information about the owners, their vision, and the business's history and goals.

### 3. E-commerce Functionality

- **User Authentication:** Secure login functionality for customers and administrators.
- **Shopping Portal:** Browse and select electric components for purchase.
- **Checkout with Invoice Delivery:** Seamless checkout process ensuring active invoice delivery for successful orders.

## Core Laravel Principles

This project follows core Laravel principles to ensure efficient development, maintainability, and scalability:

- **MVC (Model-View-Controller) Architecture:** The project is structured with Models for database interaction, Views for presentation, and Controllers for the application's logic.
- **Eloquent ORM:** The project uses Laravel's Eloquent ORM for interacting with the database, offering a simple and intuitive query builder and relationships management.
- **Routing:** Laravel's routing system provides a clean and expressive way to define routes that link URLs to controller actions.
- **Blade Templating Engine:** Blade is used as the templating engine, enabling clean and reusable templates for views.
- **Authentication:** Laravel's built-in authentication system ensures secure login and registration functionality.

## Requirements

To run this project, you'll need the following installed:

- PHP 7.3+ (Recommended PHP 8.0 or higher)
- Composer (for managing Laravel dependencies)
- XAMPP (for local development environment)
- MySQL (comes with XAMPP)

Or, simply
- Docker


2. Build and Run the Containers
Run the following command to build and start the Docker containers. This will set up the Laravel application and MySQL database.

```bash
docker-compose up --build
```

This will:

- Build the containers for the Laravel app and MySQL database.
- Start the containers and link them together.

3. Access the Application
Once the containers are up and running, you can access the Laravel application by navigating to:

Application: http://localhost:8080
phpMyAdmin (for MySQL management): http://localhost:8081

4. Application Behavior
Please note that every time you restart the application or rebuild the containers:

The database tables will be purged and recreated from scratch. This means you will lose all cart data and previous orders.
The Laravel database seeding process will populate the necessary tables with default data.
This ensures a fresh start every time you run the project, but it also means you will lose any progress in the system, such as orders or cart contents.

5. Database Credentials
phpMyAdmin:
Username: laravel_user
Password: laravel_password

You can use these credentials to manage the database using phpMyAdmin or connect directly to MySQL from the Laravel app.

User credentials:
Email: john.doe@example.com
Password: admin

You can use the above credentials to test out the cart functionalities.

6. Stopping the Containers
To stop the containers, run:

```bash
docker-compose down
```

This will stop and remove the containers but retain your database data in Docker volumes unless explicitly removed.

Note
This application will purge all data (orders, cart items) each time it is launched, as the database tables are re-created from scratch.
This is intended for testing and development purposes, and should not be used in a production environment without further adjustments.


## Setting Up the Project locally

### 1. Clone the Repository

Start by cloning the project to your local machine:

```bash
git clone https://github.com/your-username/electric-components-store.git
cd electric-components-store
```

### 2. Install Dependencies
Make sure you have Composer installed. Run the following command to install the necessary dependencies:

```bash
composer install
```
### 3. Set Up Environment File
Copy the .env.example file to .env to configure environment settings:

```bash
cp .env.example .env
```
Now, edit the .env file to configure your database and other environment settings:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tawakkol  # Use the correct database name
DB_USERNAME=root       # Replace with your MySQL username
DB_PASSWORD=           # Provide your MySQL password if needed
```

### 4. Set Up XAMPP
Start XAMPP: Open XAMPP and start both Apache and MySQL services.
Access phpMyAdmin: Go to http://localhost/phpmyadmin in your browser.
Create Database: Create a new database (e.g., tawakkol) for this project.

### 5. Run Migrations
Once the environment is set up, run the Laravel migrations to create the necessary database tables:

```bash
php artisan migrate
```

### 6. Seed Database (Optional)
If the project has seeders to populate initial data (e.g., products, users), run the following command:

```bash
php artisan db:seed
```
### 7. Start the Application
To run the application locally, use the built-in Laravel development server:

```bash
php artisan serve
```
This will start the application on http://localhost:8000.

### 8. Access the Application
Open your browser and go to: http://localhost:8000
You should see the homepage of the Electric Components Store.

Testing the Application
1. Authentication: Test the login and registration functionality for customers and administrators.
2. Product Listing: Browse through the available electric components, view details, and add to the cart.
3. Checkout and Invoice: Proceed through the checkout process and ensure that invoices are correctly generated and delivered.


#### Directory Structure
Here’s a brief overview of the project directory structure:

- app/: Contains controllers, models, and other core logic of the application.
- resources/views/: Contains Blade templates for rendering the front-end views.
- routes/web.php: Defines the routes for the application.
- database/migrations/: Contains migration files to set up the database schema.
- public/: The public directory, which contains assets such as CSS, JS, and images.

#### Additional Notes
Debugging: Ensure that you have debugging enabled in the .env file by setting APP_DEBUG=true to view error messages during development.
Customization: You can easily add more products, modify the e-commerce functionality, or extend the project as per your requirements.
Contributing
Feel free to contribute to this project by opening issues or submitting pull requests. All contributions are welcome!

License
This project is open-source and available under the MIT License.

Enjoy experimenting with the project! Let me know if you run into any issues or need further help.