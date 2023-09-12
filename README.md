
![cttdash](https://github.com/PedroGarciaPinhal/CCT_Project/assets/143652858/4f1ca664-e5a8-41d1-a62c-068538e6d610)


Table of Contents

Overview
Features
Getting Started
Prerequisites
Installation
Usage



Overview
The CCT APP was the final project of a course if web/mobile development, the project was built over 2 months while attending other classes on mobile development and QA.
The goal was to create an internal web app for company employees to use in the different buidlings that the company owns across the country
this was necessity that arose from the pandemic years and with growth of  remote and hybrid work.
and be able to reserve the table which would have a qr code that would redirect to the website for the register and reservation.
The app is a prototype that demostrates  a UI interface tha can be improved upon and a prototype for backend and front end features.
There is alot of improvement to be made eventually, still, it is able to demonstrate the following features,

Features

User Registration and Authentication: Members can create accounts and sign in.

Space Listing: Space owners can list their coworking spaces, complete with descriptions, photos, and pricing details.

Booking System: Members can easily browse available spaces, book their reservations.

Admin Dashboard: Employees can manage their listings in the profile page, while administrators have access to an admin dashboard for overall management.


Getting Started

Prerequisites

Node.js (latest version)
composer (latest version)
Database System: MySQL 
Laravel v9 ( v10 uses different set of installation and it might not compatible)
xamp or other php  web server to rung php ( php version


Configure the database:
run xampp
Create a database for the app.
Rename the .env.example file to .env and update the database configuration.
Run database migrations: php artisan migrate:fresh --seed

run project

php artisan serve

Test/usage/checkfeatures

- the project will be available in your localhost
- to login use the admin or the users, you can find them on the seeders User seeder class
- admin will have available a crud dashboard for the entities





 
 
