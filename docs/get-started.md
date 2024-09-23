---
title: Get Started
---

## Overview

This guide will help you set up and run a Laravel project integrated with VuePress for documentation. The application supports user authentication, role management, payment integration, mails sending and much more.

## Requirements

-   **PHP**: Ensure you have PHP version `^8.1` or above installed on your machine.

-   **Laravel**: This project requires Laravel version `^11.0`.

-   **Node.js**: Ensure that Node.js is installed for running scripts. You can download it from [nodejs.org](https://nodejs.org/).

-   **Composer**: Composer is required for managing PHP dependencies. You can install it by following the instructions on [getcomposer.org](https://getcomposer.org/download/).

## Installation

-   **Clone the repository:**: git clone `repository-url` cd `project-directory`

-   **Laravel**: Install PHP dependencies: `composer install`.

-   **Install Node.js dependencies:**: `npm install`

-   **Set up your environment file:**: Copy the example `.env.example` file

-   **Generate application key:**: `php artisan key:generate`

## Configuration

-   Configure your `.env` file to set database connection details and other environment-specific settings.

-   Go through your authentication guards and user providers as needed in `config/auth.php`.

-   Set up CORS in `config/cors.php` to allow cross-origin requests for your API.

## Running the Project

-   To start the Laravel server, run: `php artisan serve`.
-   To run the VuePress documentation server, execute: `npm run docs:dev`.

## Authentication

This application uses Laravel breeze for web routes and Sanctum for API authentication. You can authenticate users through the following guards:

-   **web:** For regular users.
-   **admin:** For admin access.
-   **vendor:** For vendor access.
-   **employee:** For different roles and permissions using employees table.
-   **api:** For API requests.

## Payments

Stripe is integrated for handling payments. You need to configure your Stripe credentials in the `.env` file and set up routes for processing payments through your application.
