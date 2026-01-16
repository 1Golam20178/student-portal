<?php
$conn = new mysqli("localhost", "nayem", "nayem", "student_portal");
if ($conn->connect_error) {
die("Database connection failed");
}
session_start();