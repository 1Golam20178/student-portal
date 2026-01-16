# 🎓 Student Portal | Modern Student Management System

Student Portal is a sleek, high-performance student management portal designed for administrators to manage student records with ease. Built with a focus on **One UI** consistency, it provides a seamless experience from landing to dashboard using PHP and Tailwind CSS.

![UI Style: Modern Minimalist](https://img.shields.io/badge/UI_Style-Modern_Minimalist-indigo)
![Framework: Tailwind CSS](https://img.shields.io/badge/Framework-Tailwind_CSS-blue)
![Backend: PHP/MySQL](https://img.shields.io/badge/Backend-PHP%2FMySQL-777bb4)

---

## ✨ Key Features

* **Unified UI Design:** Consistent "One UI" experience across all pages (Login, Dashboard, Forms).
* **Responsive Dashboard:** A mobile-friendly layout with a professional sidebar navigation.
* **Dynamic Search:** Quick filtering for student records.
* **Full CRUD Functionality:** Add, view, edit, and delete student data effortlessly.
* **Modern UX:** Features include glassmorphism navbars, soft shadows, and high-quality Inter typography.

---

## 🛠️ Technology Stack

| Layer | Technology |
| :--- | :--- |
| **Frontend** | [Tailwind CSS](https://tailwindcss.com/), HTML5, FontAwesome Icons |
| **Typography** | Inter Font Family (via Google Fonts) |
| **Backend** | PHP 8.x |
| **Database** | MySQL |

---

## 🚀 Getting Started

### 1. Prerequisites
* A local server environment (XAMPP, WAMP, or MAMP).
* PHP 7.4 or higher installed.

### 2. Database Setup
1. Create a database named `student_portal` in your phpMyAdmin.
2. Import the provided SQL file or create the `students` table:
   ```sql
   CREATE TABLE users (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(100) NOT NULL,
   email VARCHAR(100) UNIQUE NOT NULL,
   password VARCHAR(255) NOT NULL
   );
   
   CREATE TABLE students (
   id INT AUTO_INCREMENT PRIMARY KEY,
   user_id INT NOT NULL,
   student_name VARCHAR(100) NOT NULL,
   roll VARCHAR(50) NOT NULL,
   department VARCHAR(100) NOT NULL,
   semester VARCHAR(50) NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
   );
