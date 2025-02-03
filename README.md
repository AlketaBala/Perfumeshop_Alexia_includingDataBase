# Perfumeshop_Alexia_includingDataBase
# Alexia Perfume Shop

Welcome to the **Alexia Perfume Shop** project! This web application allows users to browse, purchase, and manage products (perfumes), while also providing an admin interface for managing clients and products. The application uses **PHP**, **MySQL** database, and **XAMPP** for local development.

## Table of Contents
1. [About the Project](#about-the-project)
2. [Features](#features)
3. [Installation Instructions](#installation-instructions)
4. [Usage](#usage)
5. [Admin Panel Features](#admin-panel-features)
6. [Database Structure](#database-structure)
7. [Contact](#contact)

---

## About the Project

**Alexia Perfume Shop** is a simple e-commerce web application where users can register, log in, and browse perfumes. Registered clients can add items to their basket and proceed to checkout. The admin panel allows administrators to manage clients, products, and view contact inquiries. All data is stored in a MySQL database.

---

## Features

- **Login & Registration**:
  - Users can log in or create an account to browse and purchase perfumes.
  - Admin login: Admin email: `Alketa@gmail.com`, password: `123`.
  
- **Product Management (Admin)**:
  - Admin can add, update, or delete products by their unique code.
  
- **Client Management (Admin)**:
  - Admin can view, add, and delete client profiles.
  
- **Shopping Basket**:
  - Clients can add products to their basket and review the contents before proceeding to purchase.

- **Contact Form**:
  - A contact form is available for users to share feedback or report issues.

- **Main Page**:
  - Products are displayed on the homepage with options to add to the basket.

---

## Installation Instructions

To run the application locally, follow these steps:

1. **Download and Install XAMPP**:
   - Download [XAMPP](https://www.apachefriends.org/index.html) and install it on your system.
   
2. **Set up the Project**:
   - Clone or download the project into the `htdocs` folder of your XAMPP installation (usually located at `C:/xampp/htdocs`).

3. **Set up MySQL Database**:
   - Open XAMPP Control Panel, start **Apache** and **MySQL**.
   - Open your browser and go to `http://localhost/phpmyadmin`.
   - Create a new database named `alka`.
   - Import the provided database schema (found in the `/database` folder of this project) to set up the required tables for clients, products, and contact forms.

4. **Configure Database Connection**:
   - Edit the `config.php` file (if applicable) to set up your database connection. Use the following default settings:
     ```php
     $host = "localhost";
     $username = "root"; // Default username for MySQL
     $password = ""; // Default password for MySQL (leave blank)
     $dbname = "alka"; // Name of the database
     ```

5. **Start the Application**:
   - Once everything is set up, open your browser and go to `http://localhost/your_project_folder` to view the perfume shop.

---

## Usage

1. **Login**:
   - On the homepage, click the "Kyqu" button to log in with your existing credentials or create a new account by clicking "regjistrohu" (Register).
   
2. **Shopping**:
   - Browse through the listed perfumes, and click "Add to Basket" to add items to your shopping cart.
   - To view your cart, navigate to the basket page.

3. **Admin Panel**:
   - To access the admin panel, log in using the credentials provided above (`Alketa@gmail.com` / `123`).
   - From the admin panel, you can manage clients and products.

---

## Admin Panel Features

- **Client Management**:
  - **Add Client**: Admin can add clients by entering their personal information (name, surname, birthdate, email, etc.).
  - **Delete Client**: Admin can delete a client by their unique client ID.
  
- **Product Management**:
  - **Add Product**: Admin can add new perfumes by specifying the product code (unique), name, description, price, and quantity.
  - **Delete Product**: Admin can delete a product by its unique code (Kode).

- **View Products**:
  - Once added, products will appear on the main page (`index.php`).

---

## Database Structure

The application uses the `alka` database with the following tables:

1. **Clients**: Stores information about clients (ID, name, surname, email, password, etc.).
2. **Products**: Stores perfume product information (Code, name, description, price, quantity).
3. **Contact**: Stores messages submitted via the contact form.

---

## Contact

For questions or issues with the project, please feel free to reach out to the project administrator:

- **Email**: alketabala11@gmail.com

---

Thank you for using the **Alexia Perfume Shop** application! Enjoy your shopping experience.
