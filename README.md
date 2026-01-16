# 🎓 EduPortal | Modern Student Management System

EduPortal is a sleek, high-performance student management portal designed for administrators to manage student records with ease. Built with a focus on **One UI** consistency, it provides a seamless experience from landing to dashboard using PHP and Tailwind CSS.

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
   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       student_name VARCHAR(100),
       roll VARCHAR(50),
       department VARCHAR(50),
       semester VARCHAR(50)
   );
