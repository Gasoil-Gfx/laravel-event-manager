Laravel Event Manager

Laravel Event Manager is a simple event management system built with Laravel. It demonstrates how to build a CRUD (Create, Read, Update, Delete) application using Laravel's Blade templates and pure CSS for styling. This project is beginner-friendly and designed for those learning Laravel or looking for a lightweight solution for managing events.
Features

    CRUD Operations: Easily manage events with functionalities to create, view, edit, and delete.
    Pure CSS Styling: No external CSS frameworks—clean, minimal, and customizable.
    Blade Templates: Simple and efficient templating using Laravel's native Blade engine.
    Database Integration: Built with Laravel's Eloquent ORM for seamless database interactions.

Installation

    Clone the Repository:

    bash

git clone https://github.com/Gasoil-Gfx/laravel-event-manager.git
cd laravel-event-manager

Install Dependencies:

bash

composer install
npm install

Set Up Environment:

    Copy .env.example to .env:

    bash

    cp .env.example .env

    Update your database credentials in .env.

Run Database Migrations:

bash

php artisan migrate

Start the Server:

bash

    php artisan serve

Usage
Creating Events

    Navigate to the "Create Event" page to add a new event.
    Enter details like name, date, and description.

Viewing Events

    View a list of all events on the homepage.
    Click on individual events for more details.

Editing Events

    Click on the "Edit" button next to an event to modify its details.

Deleting Events

    Remove events you no longer need with the "Delete" button.

Screenshots
Event List

Screenshot of the event list
Event Creation

Screenshot of the event creation page
Folder Structure

    app/Http/Controllers/: Contains the EventController for handling CRUD logic.
    resources/views/: Blade templates for rendering pages.
    public/css/: Custom pure CSS stylesheets.
    routes/web.php: Defines the routes for event management.

Contributing

Contributions are welcome! Feel free to fork the repository and submit a pull request. If you find a bug or have a feature request, please open an issue.
License

This project is open-source and available under the MIT License.
Acknowledgments

    Built with Laravel.
    Inspired by the simplicity of minimal UI/UX designs.

This README offers a better explanation of the project's purpose and functionality while providing clear instructions for installation and usage. You can customize it further as the project evolves.
