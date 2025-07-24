# 📬 Simple PHP Contact Form

A basic contact form built using **PHP**, **MySQL**, **HTML**, and **CSS**.  
This project demonstrates how to handle form submissions and store user input into a MySQL database.

---

## ✨ Features

- Collects user details: First name, last name, email, phone number, and message
- Validates required fields
- Submits and stores data in MySQL using PHP
- Displays success message after submission
- Basic styling with external CSS
- Uses plain PHP (no frameworks)

---

## 🛠 Tech Stack

- PHP
- MySQL
- HTML5
- CSS3

---

## 📂 Folder Structure

contact-form/
├── index.php
├── styles.css
└── README.md

yaml
Copy
Edit

---

## 🧪 How to Run Locally

1. **Install XAMPP or MAMP** to get PHP + MySQL.
2. **Create a MySQL database** named `contact-form`:
    ```sql
    CREATE DATABASE contact-form;
    ```
3. **Create a table** named `form`:
    ```sql
    CREATE TABLE `form` (
      `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `firstname` VARCHAR(255),
      `lastname` VARCHAR(255),
      `email` VARCHAR(255),
      `phoneNumber` VARCHAR(20),
      `message` TEXT,
      `dt` DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    ```
4. **Clone or download** this repository.
5. Place it inside the `htdocs/` folder if using XAMPP.
6. Visit [http://localhost/contact-form](http://localhost/contact-form) in your browser.

---

## 🚀 Live Demo

> _Coming soon_ – You can deploy it locally using XAMPP or host it on any LAMP-based server.

---

## 🧠 Learning Purpose

This project was created to practice:

- Handling form inputs with PHP
- Working with MySQL using `mysqli`
- Sending and storing data from the frontend to the backend
- Creating a minimal full-stack project with PHP

---

## 📌 Author

**Aditya Ghamat**  
[GitHub Profile](https://github.com/AdityaGhamat)

---

## 📄 License

This project is open-sourced for learning purposes. No license attached.
