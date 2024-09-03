# :oncoming_bus: Bus Booking System


## Overview

The fork-bus-booking-system is a customized version of a bus booking system designed for Indian Atlantic Transportation. It enhances the original system by integrating additional features and optimizations for better real-time bus schedule searches, ticket bookings, reservation management, and user experience.

## Table of Contents

* [Main Technologies](#main-technologies)
* [Features](#features)
* [Installation](#installation)
* [Environment Configuration](#environment-configuration)
    * [Database](#database---mysql)
    * [Queue connection - Redis](#queue-connection---redis)
    * [Email service](#email-service)
* [Live Demo](#live-demo)

## Main Technologies

* Laravel 7
* Blade templates
* Vue.js 2
* Bootstrap 4
* Sass (SCSS)
* MySQL
* Redis

## Features

## Features

* **Responsive Design:** Fully optimized for various devices.
* **User Authentication:**
  * Register and login.
  * Email verification.
  * Password reset.
* **User Profile Management:** Edit and update user profiles.
* **User Roles:** Different access levels (Super Admin, Admin, User).
* **Bus Search and Booking:** Search for bus rides, book seats, and manage bookings.
* **Advanced Bus Search:** Enhanced search capabilities with advanced filtering options.
* **Optimized Ticket Booking:** Improved booking process with additional payment options.
* **Custom Admin and Operator Panels:** Tailored tools for route, schedule, and booking management.
* **Real-Time Bus Tracking:** GPS tracking with estimated arrival times.
* **Email Notifications:** Updates on booking status changes.
* **Booking Management:** View, modify, or cancel bookings up to two hours before departure.
* **Admin Panel:**
  * Dashboard with charts and stats.
  * CRUD operations for buses, locations, routes, rides, and users.
  * DataTables integration (search, ordering, pagination).
  * Single and cyclic bus rides.
  * Manual and automatic booking confirmations.

## Installation

### Prerequisites

To correctly configure the application, you need to prepare all the following requirements on your development machine:

* PHP 7.4 and Composer
* Node.js 12 and npm
* MySQL 8 database
* Redis database (optional if you intend to use the `sync` queue driver)

### Setup

1. Clone the repository and open the project directory.

```bash
git clone git@github.com:Thando12345/Fork-bus-booking-system.git && cd Fork-bus-booking-system

```

2. Install Composer dependencies.

```bash
composer install
```

3. Create an environment configuration file and set required variables (see
   the [Environment Configuration section](#environment-configuration) for a description of how to configure your
   environment variables).

```bash
cp .env.example .env
```

4. Generate Laravel application key.

```bash
php artisan key:generate
```

5. Install Node.js dependencies and compile frontend assets.

```bash
npm install
```

6. Run database migrations and populate the database with some dummy data.

```bash
php artisan migrate:fresh --seed
```

7. Run Redis queue worker (if you are using `redis` queue driver).

```bash
php artisan queue:work redis
```

8. Start Laravel's local development server.

```bash
php artisan serve
```

9. At this point, the application should be ready to go at http://localhost:8000/.

## Environment Configuration

This section describes how to configure environment variables in the .env file. For more detailed
information [see the official Laravel documentation](https://laravel.com/docs/7.x).

### Database - MySQL

Although Laravel supports various database backends, MySQL is recommended for this project. The application runs some
raw SQL queries, therefore errors may arise when using a different database driver. The following environment variables
must be properly configured in the .env file.

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_db
DB_USERNAME=root
DB_PASSWORD=null
```

### Queue connection - Redis

By default, Redis is set up as the queue driver. If you want to use the queuing feature for some jobs, you must
configure a connection to the Redis database by setting the variables listed below. Alternatively, you can set the queue
driver to `sync`. When using this driver, queued jobs will be executed immediately (synchronously) within the current
process.

```dotenv
QUEUE_CONNECTION=redis 

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
REDIS_CLIENT=predis
```

### Email Service

The application has several functionalities related to sending emails, so you need some service to handle them. In a
development environment, you can use a test tool such as Mailtrap or MailHog. However, if you want to send real emails,
you need to configure some email service. You can use API-based drivers such as Mailgun, Postmark, Amazon SES or any
SMTP server. The connection with chosen email service should be configured using the following variables.

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=189cd2ae392d8a
MAIL_PASSWORD=d26dc55ea441f2
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=nogtech2021@gmail.com
MAIL_FROM_NAME="Bus Booking System"

```


### :information_source: Notes

* The database is automatically refreshed and populated with dummy data every two hours in this demo.

* The first load of the website may take a while because the Heroku dyno may be asleep.

* You can create a new user account or log in using one of the following credentials:

| Role | Email | Password |
|---|---|---|
| Admin | admin@bbs.xyz | BbsAdmin123 |
| User | user@bbs.xyz | BbsUser123 |
