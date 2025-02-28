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

**Alexia Perfume Shop** is a simple e-commerce web application where users can sign up, sign in, and browse perfumes. Registered clients can add items to their basket and proceed to checkout. The admin panel allows administrators to manage clients, products, and view contact inquiries. All data is stored in a MySQL database.

---

## Features

- **Login & Registration**:
  - Users can sign in or create an account to browse and purchase perfumes.
  - Admin login: Admin email: `Alketa@gmail.com`, password: `123`.
    
- **Logout & Delete your account**:
  - After sign in you have the icon and the name shown into the upper-right side of index.php, after putting the mouse there there is a vertical navigation shown that you can logout or if you want completely 
    delete the account from database.
  
- **Product Management (Admin)**:
  - Admin can add, update, or delete products by their unique code.
    
- **Client Management (Admin)**:
  - Admin can view, add, and delete client profiles.
  
- **Shopping Basket**:
  - Clients can add products to their basket and review before proceeding to purchase.

- **Contact Form**:
  - A contact form is available for users to share feedback or report issues.

- **Main Page**:
  - Products are displayed on the homepage, their names and prices with options to add to the basket.
  - The sign in is displayed and after sign in, you can always put the mouse into the icon or name shown into the upper-right side of the page so that a vertical navigation is shown and you can logout or delete 
    your account.
  - You can open click aboutus to know more about the parfume shop or contact to give the chances to people to give feedback or report a problem.

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
   - Edit the `funksionet.php` file to set up your database connection. Use the following default settings:
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
   - On the homepage, click the "Sign in" button to log in with your existing credentials or create a new account by clicking "Sign up" (Register).
     
2. **Logout/Delete your account**:
   - On the homepage, after "Signing in" in the upper right side you have the icon and then name of the clients that is signed in, put your mouse to the icon or name of the client, so that it can show the 
    vertical navigation where you have two choices logout of your account or completely delete your account from database.
   
3. **Shopping**:
   - Browse through the listed perfumes, and click "Add to Basket" to add items to your shopping cart.
   - After clicking in link "Add to Basket" you shopping cart will open and you can navigate into the basket page.
   - You can click "Add items in the basket" to turn in index.php and to add more products if you want to buy more.
   - If you mistakenly put a item that you decide not to buy, you can click "Delete items from basket" so your basket will be deleted and you can start from the start to add products.
   - Or click Buy now to make the purchase.

4. **Admin Panel**:
   - To access the admin panel, log in using the credentials provided above (`Alketa@gmail.com` / `123`).
   - From the admin panel, you can manage clients and products.
   - You can logout from admin aswell by clicking the red button "Logout". 

---

## Admin Panel Features

- **Client Management**:
  - **Add Client**: Admin can add clients by entering their personal information (name, surname, birthday, address, email and password).
  - **Delete Client**: Admin can delete a client by their unique client ID.
  - **Edit Client**: Admin can edit clients information by editing any info, and then clicking the green button(that is put in the side of each field) to confirm the changes you have done on each field.
  
- **Product Management**:
  - **Add Product**: Admin can add new perfumes by specifying the product code (unique), name, description, price, and quantity.
  - **Delete Product**: Admin can delete a product by its unique code (Kode).
  - **Edit Product**: Admin can edit products information by editing any info, and then clicking the green button(that is put in the side of each field) to confirm the changes you have done on each field.
  
- **View Products**:
  - Once added, products will appear on the main page (`index.php`).

---

## Database Structure

The application uses the `alka` database with the following tables:

1. **antaret**: Stores information about clients (ID_A, Emri, Mbiemri, Ditelindja, Adresa, Emajli, Pasi).
2. **produktet**: Stores perfume product information (Kodi, Emri_P, Pershkrimi, Qmimi, Sasia).
3. **kontaktii**: Stores messages submitted via the contact form (id, name, email, phone, message).
4. **porosite**: Stores purchases made by different clients after clicking "Buy now" in the basket page, the columns(id, idantari, data, totali).
5. **porosi_detaje**: A table that saves all the details of the purchase that is made, the columns(id, idporosia, idprodukti, sasia, qmimi).
6. **wk**: A table that connects two tables **antaret** and **produktet**, the columns(ID, idantari, idprodukti, sasiaeporosis).
---

## Contact

For questions or issues with the project, please feel free to reach out to the project administrator:

- **Email**: alketabala11@gmail.com

---

Thank you for using the **Alexia Perfume Shop** application! Enjoy your shopping experience.
