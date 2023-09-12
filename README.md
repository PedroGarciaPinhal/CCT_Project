# CCT Web App



## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Usage](#usage)

## Overview

The CCT Web App was the final project of a web/mobile development course. It was developed over two months while attending other classes on mobile development and quality assurance. The goal was to create an internal web app for company employees to use in different buildings owned by the company across the country. This need arose due to the pandemic and the growth of remote and hybrid work.

The app allows employees to reserve tables, which have a QR code that redirects to the website for registration and reservation. While it is a prototype, it demonstrates a UI interface that can be improved upon, as well as a prototype for backend and frontend features.

There is room for improvement, but it currently demonstrates the following features:

## Features

- **User Registration and Authentication:** Users can create accounts and sign in.
- **Space Listing:** Space can list coworking spaces with descriptions, photos, and pricing details
- **Booking System:** Users can easily browse available spaces and book their reservations in profile page.
- **Admin Dashboard:** Administrators have access to an admin dashboard for overall management of users listings and reservations.

## Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) (latest version)
- [Composer](https://getcomposer.org/) (latest version)
- Database System: MySQL
- Laravel v9 (Note: v10 uses a different installation method and may not be compatible)
- XAMPP or other PHP web server to run PHP (PHP version)

### Installation and Use

1. **Configure the database:**
   - Run XAMPP.
   - Create a database for the app.
   - Rename the `.env.example` file to `.env` and update the database configuration.

2. **Run database migrations:**
   ```bash
   php artisan migrate:fresh --seed

3.  **Start Project:**
    ```bash
    php artisan serve

4.  **Usage:**
    
-  The project will be available on your localhost.
- To log in, use the admin or user credentials, which can be found in the User seeder class.
- Admins have access to a CRUD dashboard for entities.

