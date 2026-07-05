# Book Writer Platform

![Book Writer Banner](banner.png)

## Overview
**Book Writer** is a premium, beautifully designed platform built with Laravel. It is designed to provide authors, writers, and publishers with a seamless and elegant interface to manage their book writing journey, showcase their portfolio, and connect with their audience.

## Features
- **Clean and Minimalist UI**: An elegant design focusing on what matters most—writing.
- **Robust Laravel Backend**: Secure, scalable, and fast architecture.
- **Author Portfolio**: Beautifully present your published and upcoming works.
- **Responsive Design**: Works seamlessly on desktops, tablets, and mobile devices.

## Getting Started
To get this project up and running locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/developerdushyant2013-art/book_writer.git
   ```
2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```
3. **Install Frontend Dependencies:**
   ```bash
   npm install
   npm run build
   ```
4. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. **Database Setup:**
   Configure your database in the `.env` file, then run:
   ```bash
   php artisan migrate
   ```
6. **Start the Development Server:**
   ```bash
   php artisan serve
   ```

## License
This project is open-sourced software licensed under the MIT license.
