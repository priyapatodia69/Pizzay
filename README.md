# 🍕 Pizzay - A Pizza Delivery Web App

## 📘 Project Overview
**Pizzay** is an interactive pizza delivery web application developed using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**.  
It allows users to create an account, log in, browse a dynamic pizza menu, add items to a cart, apply coupons, place orders, and even reserve tables at the restaurant.  

This project was designed to demonstrate **front-end data handling**, **local storage simulation**, **database connectivity with PHP**, and a smooth, user-friendly interface.

---

## 🎯 Objectives
- To build a multi-page, database-driven pizza ordering system.
- To demonstrate user authentication and session handling in PHP.
- To implement dynamic JavaScript-based features such as cart management and coupon discounts.
- To simulate a realistic food ordering and reservation system.
- To enhance user experience with a clean UI and theme toggle.

---

## 🧠 Key Features
### 👤 User Authentication
- Signup and login using PHP and MySQL.
- Passwords are securely stored using hashing.
- Session-based authentication ensures only logged-in users can access main pages.

### 🍕 Dynamic Pizza Menu
- Displays a list of pizzas, desserts, and sides.
- Each item has a name, image, description, and price.
- Users can search and filter pizzas easily.

### 🛒 Cart & Checkout
- Add or remove pizzas dynamically.
- Change item quantities.
- Apply coupons (`SAVE10`, `FLAT50`) for discounts.
- Auto-calculate total with add-ons and coupon applied.
- Animated “Add to Cart” effect.

### 💬 Order Management
- Displays a confirmation banner upon placing an order.
- (Optional) Save orders into the database for history and admin management.

### 📅 Table Reservation
- Simple form to reserve tables with time slot selection.
- Client-side validation for phone numbers.

### 🌗 Theme Toggle
- Light and Dark Mode toggle using a single button.

---

## 🛠️ Technologies Used

| Category | Technology |
|-----------|-------------|
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | PHP |
| **Database** | MySQL |
| **Libraries** | Font Awesome, Google Fonts |
| **Local Storage** | Used for user session & data simulation |
| **IDE Used** | Visual Studio Code / Sublime / Notepad++ |

---

## 📂 Project Structure

```
Pizzay/
│
├── index.php            → Home page (user greeting + restaurant info)
├── menu.php             → Pizza menu & cart page
├── reserve.php          → Table reservation form
├── login.php            → Login page (PHP + JS auth)
├── signup.php           → Signup page (PHP + MySQL)
├── db_connect.php       → Database connection file
├── scrpt.js             → Main JavaScript file (cart, coupons, auth)
├── style.css            → Styling for all pages
├── cart.php             → (Optional) Order insertion backend
└── README.md            → Project documentation
```

---

## 🧾 Database Design

### Database Name: `pizzay_db`

#### 1️⃣ Table: `users`
| Field | Type | Description |
|-------|------|-------------|
| id | INT (Primary Key) | Auto Increment |
| name | VARCHAR(100) | User’s Full Name |
| email | VARCHAR(100) | User Email Address |
| password | VARCHAR(255) | Hashed Password |

#### 2️⃣ Table: `orders`
| Field | Type | Description |
|-------|------|-------------|
| order_id | INT (Primary Key) | Auto Increment |
| u_id | INT (Foreign Key → users.id) | User ID |
| name | VARCHAR(100) | Customer Name |
| address | TEXT | Delivery Address |
| phone | VARCHAR(15) | Customer Contact |
| total_price | DECIMAL(10,2) | Final Total |
| order_date | TIMESTAMP | Date and Time of Order |

---

## ⚙️ Setup & Installation Guide

### Step 1: Install Prerequisites
- Download and install **XAMPP** or **WAMP**.
- Make sure **Apache** and **MySQL** are running.

### Step 2: Clone or Copy the Project
Copy the entire `Pizzay` folder into your XAMPP `htdocs` directory:
```
C:\xampp\htdocs\Pizzay
```

### Step 3: Set Up the Database
1. Open [phpMyAdmin](http://localhost/phpmyadmin).
2. Create a new database named:
   ```
   pizzay_db
   ```
3. Create the following tables:
   - `users`
   - `orders`
4. You can use this SQL code:
   ```sql
   CREATE TABLE users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100),
     email VARCHAR(100) UNIQUE,
     password VARCHAR(255)
   );

   CREATE TABLE orders (
     order_id INT AUTO_INCREMENT PRIMARY KEY,
     u_id INT,
     name VARCHAR(100),
     address TEXT,
     phone VARCHAR(15),
     total_price DECIMAL(10,2),
     order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

### Step 4: Connect Database
- Open `db_connect.php` and configure credentials:
   ```php
   <?php
   $conn = new mysqli("localhost", "root", "", "pizzay_db");
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>
   ```

### Step 5: Run the Project
- Open your browser and go to:
  ```
  http://localhost/Pizzay/signup.php
  ```
- Create an account and log in.
- Explore menu, add pizzas, apply coupons, and reserve tables!

---

## 🧩 Workflow

1. **Signup/Login** → Account is stored in database.
2. **Menu** → Items dynamically displayed using JavaScript.
3. **Add to Cart** → Items and add-ons stored locally until checkout.
4. **Apply Coupon** → JS function recalculates total.
5. **Place Order** → Shows confirmation message (can be stored in DB).
6. **Reserve Table** → Submits reservation data.
7. **Logout** → Clears session/localStorage and redirects to login page.

---

## 🧰 Example Coupon Codes
| Code | Description |
|------|--------------|
| `SAVE10` | 10% off your order |
| `FLAT50` | ₹50 off total price |

---

## 🔒 Security Highlights
- User passwords hashed with `password_hash()`.
- Basic input validation for email, password, and phone number.
- Restricted access: users must be logged in to view menu or reserve tables.

---

## 💡 Future Improvements
- Admin panel to manage users and orders.
- Email confirmation for signups.
- Real payment gateway integration.
- Pizza customization (toppings, crust type).
- Live order tracking.
- API integration for real-time data.

---

## 📸 Screenshots (Add Later)
You can add screenshots like:
```
/screenshots/
├── homepage.png
├── menu_page.png
├── cart_summary.png
├── login_page.png
└── reserve_table.png
```

---

## 🧑‍💻 Developer Info
**Project Title:** Pizzay - A Pizza Delivery Web App  
**Developer:** Priya Patel  
**Year:** 2025  
**Type:** College Mini Project  

> “Great code is like great pizza — best when shared 🍕”

---

## 🏁 Conclusion
Pizzay successfully demonstrates the integration of **front-end interactivity** with **backend database management**.  
It highlights how real-world food delivery applications handle authentication, cart logic, and order management efficiently.  
The project provides a perfect foundation for building a full-stack online ordering system.

---
