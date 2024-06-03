# Laravel Property Listing API

This repository contains a REST API built with Laravel, designed for managing property listings. The API provides CRUD operations for brokers and properties, along with handling relationships between brokers and properties as well as properties and their characteristics.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [API Endpoints](#api-endpoints)
  - [Brokers](#brokers)
  - [Properties](#properties)
  - [Characteristics](#characteristics)
- [Testing](#testing)
- [License](#license)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/SidahmedBelkadi/Laravel-10-Property-Listing-Rest-API
    cd Laravel-10-Property-Listing-Rest-API
    ```

2. **Install the dependencies:**

    ```bash
    composer install
    ```

3. **Create a copy of the `.env` file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Set up the database:**

    Update the `.env` file with your database credentials.

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

6. **Run the database migrations:**

    ```bash
    php artisan migrate
    ```

## Configuration

Make sure to configure the `.env` file with the correct database credentials and other settings as needed.

## Running the Application

To run the application, use the following command:

```bash
php artisan serve
