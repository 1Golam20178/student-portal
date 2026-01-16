# 🎓 Student Portal – Full Stack Web Application

## 📌 Project Overview

The **Student Portal** is a full-stack web application developed using **HTML, Tailwind CSS, JavaScript, PHP, and MySQL**.
It allows authenticated users to manage student records securely through a web-based interface.

This project is designed for **academic submission**, **lab exams**, and **viva**, fulfilling all required criteria such as authentication, CRUD operations, search functionality, and security measures.

---

## 🛠 Technology Stack

* **Frontend:** HTML, Tailwind CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP (Apache + MySQL)

---

## 📂 Folder Structure

```
student_portal/
│
├── database/
│   └── student_portal.sql
│
├── includes/
│   ├── db.php
│   └── auth.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
│
├── index.php
├── register.php
├── login.php
├── dashboard.php
├── add_student.php
├── edit_student.php
├── delete_student.php
├── logout.php
│
└── README.md
```

---

## 🌐 Application Pages

| Page           | Description            |
| -------------- | ---------------------- |
| Home           | Portal introduction    |
| Register       | User registration      |
| Login          | User authentication    |
| Dashboard      | View & search students |
| Add Student    | Create student record  |
| Edit Student   | Update student details |
| Delete Student | Remove student record  |
| Logout         | End user session       |

---

## 🔐 Features

* User registration & login
* Secure password hashing
* Session-based authentication
* CRUD operations on student records
* Search students by name
* Input validation
* SQL injection prevention
* Access control for protected pages

---

## 🗄 Database Design

### Tables

* **users** – stores user authentication data
* **students** – stores student records linked to users

---

## 🚀 How to Run the Project

1. Install **XAMPP**
2. Start **Apache** and **MySQL**
3. Copy the project folder to:

   ```
   C:\xampp\htdocs\student_portal
   ```
4. Open **phpMyAdmin**
5. Import:

   ```
   database/student_portal.sql
   ```
6. Open browser and visit:

   ```
   http://localhost/student_portal/
   ```

---

## 🔍 Endpoints (Summary)

| Method     | URL                       |
| ---------- | ------------------------- |
| GET        | /index.php                |
| GET / POST | /register.php             |
| GET / POST | /login.php                |
| GET        | /dashboard.php            |
| GET / POST | /add_student.php          |
| GET / POST | /edit_student.php?id=ID   |
| GET        | /delete_student.php?id=ID |
| GET        | /logout.php               |

---

## 🛡 Security Measures

* Password hashing using `password_hash()`
* Password verification using `password_verify()`
* Prepared SQL statements
* Session validation for protected routes
* Output escaping to prevent XSS

---

## 🎓 Academic Use

This project satisfies the requirements for:

* Full-stack web development assignment
* Database management project
* PHP & MySQL lab exam
* Viva and project demonstration

---

## ✨ Future Enhancements

* Admin panel
* Role-based access control
* Bootstrap UI
* REST API integration
* Pagination and advanced filters

---

## 👨‍💻 Author

**Student Portal Project**
Developed for educational purposes using PHP & MySQL.

---
