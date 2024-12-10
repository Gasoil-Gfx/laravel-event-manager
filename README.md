# Laravel Event Manager

This project is a beginner-friendly CRUD application built with Laravel. It is designed to learn the basics of Laravel, including how to use Blade templating for views. The front-end is styled using pure CSS and Blade templates, without any additional front-end frameworks.

## Features

- Basic CRUD operations (Create, Read, Update, Delete) for managing events.
- Views are created using Laravel's Blade templating engine.
- Simple styling with pure CSS for a custom look and feel.
- Themed around rave events in Morocco.

## Getting Started

Follow these steps to set up the project locally:

### Clone the Repository

Copy the repository to your local machine using the following command:

```bash
git clone https://github.com/Gasoil-Gfx/laravel-event-manager.git
```

### Navigate to the Project Directory

```bash
cd laravel-event-manager
```

### Install Dependencies

Run the following command to install the necessary dependencies:

```bash
composer install
```

### Set Up Environment Variables

Copy the example .env file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

### Configure Your Database

Edit the .env file and update your database information:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### Run Migrations

This will create the necessary database tables:

```bash
php artisan migrate
```

### Start the Development Server

Run the following command to start the server:

```bash
php artisan serve
```

### Access the Application

Open your browser and go to:

```
http://127.0.0.1:8000
```
