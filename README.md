# Laravel-9 E-commerce Website

This project is an e-commerce website developed using Laravel 9, featuring comprehensive functionality. It has been undertaken for educational purposes, with guidance and instruction provided through an online course offered by the [Instructory](https://instructory.net/courses/laravel-10-master-class-for-beginner-to-intermediate---volume-01)
 E-Learning Platform.
## Tech Stack

**FrontEnd:** HTML, CSS, Bootstrap 4 Template.

**BackEnd:** PHP, LARAVEL-9, MySQL

## Run Locally

1. In your root folder, clone the project file using the command

```bash
  git clone https://github.com/mokammeltanvir/ToHoney-Commerce-Project.git
```
2. Open the terminal (bash/cmd). Then go to the project folder using the command

```bash
  cd ToHoney-Commerce-Project
```

3. Then install the required files and libraries using

```sh
composer install
```

4. Then create a .env file and generate a key for this project using the command

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```

6. Create a database in MYSQL and connect it with your project by updating .env file.

7. After connecting the db with the project, then run the command

```sh
php artisan migrate:fresh --seed
```

After completing the migration and seeding of db, you will have 1 System Admin ready for login in this project as 'admin'.

A. Admin -> Admin
Email -> admin@gmail.com
Pass -> 12345678

Finally, we are ready to run our project using this command 😄

```sh
php artisan serve
```

## Demo

Insert gif or link to a demo

## Authors

- [@mokammeltanvir](https://www.github.com/mokammeltanvir)

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# E-commerce_Project
