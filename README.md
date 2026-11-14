
# SAVORA — West African Fusion Kitchen

## CIS 344 — Homework 4
**Course:** Database Design & Programming  
**College:** Lehman College — CUNY  
**Student:** Afia M. Boateng  
**Project Type:** PHP & MySQL Restaurant Reservation Website

---

## 1. Project Overview

SAVORA is a fictional West African fusion restaurant website developed using PHP, HTML, CSS, and MySQL.

The website celebrates West African culinary traditions while providing an interactive restaurant reservation system.

Customers can explore the restaurant's menu, learn about its story, view contact information, and submit reservation requests.

The reservation system connects to a MySQL database and securely stores customer information using PHP Data Objects (PDO) and prepared SQL statements.

This project demonstrates PHP development, database connectivity, form handling, input validation, and SQL data storage.

---

## 2. Project Objectives

The main objectives of this project are to:

- Develop a functional PHP website.
- Establish a connection between PHP and MySQL.
- Create an interactive reservation form.
- Capture and validate customer information.
- Save reservation data into a MySQL database.
- Display a confirmation page after successful submission.
- Demonstrate secure database operations using PDO prepared statements.

---

## 3. Technologies Used

| Technology | Purpose |
|------------|---------|
| PHP | Server-side programming and form processing |
| MySQL | Database management |
| HTML5 | Website structure |
| CSS3 | Website styling and responsive design |
| PDO | Secure PHP database connection |
| XAMPP | Local Apache and MySQL environment |
| MySQL Workbench | Database creation and testing |
| Visual Studio Code | Code development |
| GitHub | Project repository and documentation |

---

## 4. Website Pages

### Home — index.php
Introduces SAVORA and highlights its West African culinary inspiration.

### Menu — menu.php
Displays signature African dishes, fusion favorites, traditional drinks, mocktails, and cocktails.

### About — about.php
Explains SAVORA's story, cultural inspiration, and restaurant concept.

### Contact — contact.php
Provides restaurant information and navigation links.

### Reservations — reservation.php
Allows customers to submit reservation requests through an HTML form.

### Reservation Processing — save_reservation.php
Processes submitted form information, validates user input, saves the reservation in MySQL, and displays a thank-you confirmation page.

---

## 5. Reservation Form

The reservation form collects the following information:

1. Full Name
2. Email Address
3. Phone Number
4. Reservation Date
5. Reservation Time
6. Number of Guests
7. Special Requests (optional)

The form uses the HTTP POST method to submit customer information to `save_reservation.php`.

### Form Processing

When a customer submits the reservation form:

1. PHP receives the submitted information.
2. The application validates the required fields.
3. PHP connects to MySQL using `db.php`.
4. A prepared SQL INSERT statement saves the information.
5. MySQL generates a unique reservation ID.
6. The website displays a thank-you confirmation page containing the reservation details.

If the information is invalid or the database operation fails, the website displays an error message instead of a success confirmation.

---

## 6. Database Design

**Database Name:** `savora_reservations`

**Table Name:** `reservations`

| Column | Data Type | Description |
|--------|-----------|-------------|
| reservation_id | INT | Primary key, auto-increment |
| full_name | VARCHAR(100) | Customer's full name |
| email | VARCHAR(150) | Customer's email |
| phone | VARCHAR(20) | Customer's phone number |
| reservation_date | DATE | Requested reservation date |
| reservation_time | TIME | Requested reservation time |
| guests | INT | Number of guests |
| special_requests | TEXT | Optional requests |
| created_at | TIMESTAMP | Date and time submitted |

The SQL script for creating the database and table is included in `database.sql`.

---

## 7. Installation and Setup Instructions

### Requirements

Install the following applications:

- XAMPP
- MySQL Workbench (optional, for viewing database records)
- Visual Studio Code
- A web browser

### Step 1: Download the Project

Download or clone this GitHub repository.

Place the project folder inside the XAMPP `htdocs` directory.

Example Windows location:

`C:\xampp\htdocs\restaurant_hw4`

### Step 2: Start XAMPP

Open the XAMPP Control Panel.

Start:

- Apache
- MySQL

Both services must be running before using the reservation system.

### Step 3: Create the Database

Open MySQL Workbench or phpMyAdmin.

Open the included `database.sql` file.

Execute the SQL statements to create:

- The `savora_reservations` database
- The `reservations` table

### Step 4: Configure the Database Connection

Open `db.php`.

The local development configuration uses:

```php
$host = "127.0.0.1";
$port = "3306";
$dbname = "savora_reservations";
$username = "root";
$password = "";
```

These settings are intended for a local XAMPP environment.

If your MySQL installation uses different credentials or a different port, update the connection settings.

Do not publish real production database passwords.

### Step 5: Open the Website

Open a browser and visit:

`http://localhost/restaurant_hw4/`

To open the reservation page directly:

`http://localhost/restaurant_hw4/reservation.php`

### Step 6: Test the Reservation Form

1. Open the Reservations page.
2. Enter the customer's name, email, and phone number.
3. Select a reservation date and time.
4. Select the number of guests.
5. Enter special requests if necessary.
6. Click **Submit Reservation Request**.
7. The website should display a thank-you confirmation page after the reservation is saved.

### Step 7: Verify the Database

Open MySQL Workbench.

Run:

```sql
USE savora_reservations;

SELECT *
FROM reservations
ORDER BY reservation_id DESC;
```

The newly submitted reservation should appear in the results.

---

## 8. Project File Structure

```text
restaurant_hw4/
│
├── index.php
├── menu.php
├── about.php
├── contact.php
├── reservation.php
├── save_reservation.php
├── db.php
├── header.php
├── footer.php
├── style.css
├── database.sql
├── README.md
│
└── images/
    └── Restaurant and food images
```

---

## 9. Security Features

The reservation system includes:

- PDO prepared statements to help prevent SQL injection.
- Server-side validation of required fields.
- Email address validation.
- Validation of reservation dates and times.
- Validation of guest counts.
- HTML escaping when displaying customer information.
- Error handling for failed database operations.

The project is designed for local educational demonstration.

---

## 10. Unique Features

SAVORA includes several customized features:

- West African fusion restaurant concept.
- Menu inspired by Ghanaian and other West African dishes.
- Burgundy, cream, and light-blue website theme.
- Responsive restaurant pages.
- Reusable PHP header and footer.
- Interactive reservation form.
- MySQL database integration.
- Automatic reservation ID generation.
- Personalized thank-you confirmation page.
- Reservation details displayed after successful submission.

---

## 11. Testing

The following functionality was tested during development:

- PHP website pages load in the local XAMPP environment.
- Database connection is established successfully.
- Reservation form accepts customer information.
- PHP processes submitted form data.
- Reservation information is inserted into MySQL.
- The thank-you page displays after successful submission.
- Saved reservation records can be viewed in MySQL Workbench.

---

## 12. Project Limitations

SAVORA is a fictional restaurant website created for an academic assignment.

The reservation system records reservation requests but does not check real-time table availability or send automatic confirmation emails.

The project is intended for demonstration and learning purposes.

---

## 13. Conclusion

The SAVORA restaurant website demonstrates how PHP can be integrated with a MySQL database to create a functional web application.

The project successfully captures reservation information through an HTML form, validates the submitted data, stores it in a relational database, and displays a confirmation message to the user.

This project fulfills the main objectives of CIS 344 Homework 4 by combining PHP development, MySQL connectivity, form processing, and database operations.

---

## Author

**Afia M. Boateng**  
Lehman College — CUNY  
Computer Information Systems  
CIS 344 — Database Design & Programming  
Fall 2026
