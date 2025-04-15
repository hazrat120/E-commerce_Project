# E-Commerce Project

A full-featured e-commerce platform built with Laravel, offering comprehensive product management, user authentication, shopping cart functionality, and order processing.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Usage](#usage)
  - [Customer Features](#customer-features)
  - [Admin Features](#admin-features)
- [Directory Structure](#directory-structure)
- [API Documentation](#api-documentation)
- [Authentication](#authentication)
- [Payment Integration](#payment-integration)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

## Overview

This e-commerce platform provides a complete solution for online stores, with separate interfaces for customers and administrators. Customers can browse products, manage their shopping cart, apply coupon codes, and place orders, while administrators can manage products, categories, orders, coupons, and customer accounts.

## Features

### Frontend (Customer)

- User registration and authentication
- Product browsing and search functionality
- Detailed product pages with images and descriptions
- Shopping cart management
- Coupon code application
- Checkout process with shipping information
- Order confirmation and email notifications
- Customer dashboard for order history

### Backend (Admin)

- Secure admin authentication
- Dashboard with sales analytics
- Product management (create, edit, delete)
- Category management
- Order management and processing
- Coupon code creation and management
- Customer account management
- Testimonial management

## Tech Stack

- **Framework**: Laravel
- **Database**: MySQL
- **Frontend**: Blade templates, CSS, JavaScript
- **Libraries**:
  - Shopping Cart: Gloudemans/Laravel-Shopping-Cart
  - Notifications: Brian2694/Toastr
  - Email: Laravel Mail

## Installation

1. Clone the repository

   ```
   git clone https://github.com/yourusername/ecommerce-project.git
   cd ecommerce-project
   ```

2. Install dependencies

   ```
   composer install
   npm install
   ```

3. Set up environment variables

   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database and mail settings in the `.env` file

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

   MAIL_MAILER=smtp
   MAIL_HOST=your_mail_host
   MAIL_PORT=2525
   MAIL_USERNAME=your_mail_username
   MAIL_PASSWORD=your_mail_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=your_email@example.com
   MAIL_FROM_NAME="${APP_NAME}"
   ```

## Database Setup

1. Create the database

   ```
   mysql -u root -p
   CREATE DATABASE your_database_name;
   exit;
   ```

2. Run migrations and seeders

   ```
   php artisan migrate
   php artisan db:seed
   ```

3. Geographic data setup (districts and upazilas)
   ```
   php artisan migrate:fresh --seed
   ```

## Usage

### Customer Features

1. **Registration and Login**

   - Navigate to `/register` to create a new account
   - Navigate to `/login` to access your account

2. **Product Browsing**

   - Browse all products at `/shop`
   - View product details at `/single-product/{product_slug}`

3. **Shopping Cart**

   - Add products to cart from product pages
   - View and manage cart at `/shopping-cart`
   - Apply coupon codes for discounts

4. **Checkout Process**

   - Proceed to checkout from cart page
   - Fill in shipping information
   - Review order and complete purchase
   - Receive order confirmation email

5. **Customer Dashboard**
   - Access your dashboard at `/customer/dashboard`
   - View order history and status

### Admin Features

1. **Admin Login**

   - Access admin login at `/admin/login`

2. **Dashboard**

   - View sales analytics and recent orders

3. **Product Management**

   - Create, edit, and delete products
   - Manage product images and inventory

4. **Category Management**

   - Create and manage product categories

5. **Order Management**

   - View and process customer orders
   - Update order status

6. **Coupon Management**

   - Create and manage discount coupons
   - Set coupon validity period and usage limits

7. **Customer Management**
   - View customer accounts and order history

## Directory Structure

- `app/` - Contains the core code of the application
  - `Http/Controllers/` - Controllers for handling requests
    - `Backend/` - Admin controllers
    - `Frontend/` - Customer-facing controllers
  - `Models/` - Database models
  - `Mail/` - Email templates
- `database/` - Database migrations and seeders
- `resources/views/` - Blade templates
  - `backend/` - Admin interface views
  - `frontend/` - Customer interface views
- `public/` - Publicly accessible files (CSS, JS, images)
- `routes/` - Route definitions
  - `web.php` - Web routes

## Authentication

The application uses Laravel's built-in authentication system with custom modifications:

- Customer authentication handles registration and login
- Admin authentication is separate from customer accounts
- Middleware checks ensure proper access control

## Troubleshooting

### Common Errors

1. **Database Connection Issues**

   - Check your database credentials in `.env`
   - Verify that your database server is running

2. **Email Configuration Issues**

   - Verify SMTP credentials in `.env`
   - Check email provider settings for security restrictions

3. **Login Problems**
   - Clear browser cookies and cache
   - Reset password if necessary

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m 'Add some feature'`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a Pull Request

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
