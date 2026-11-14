
-- =====================================================
-- SAVORA - WEST AFRICAN FUSION KITCHEN
-- CIS 344 - DATABASE DESIGN & PROGRAMMING
-- HOMEWORK 4 - PHP AND MYSQL DATABASE CONNECTION
-- =====================================================

-- PROJECT DESCRIPTION:
-- This database stores customer reservation requests
-- submitted through the SAVORA restaurant website.
--
-- The PHP reservation form collects:
-- 1. Full Name
-- 2. Email Address
-- 3. Phone Number
-- 4. Reservation Date
-- 5. Reservation Time
-- 6. Number of Guests
-- 7. Special Requests
--
-- Reservation information is saved using PHP and PDO.
-- =====================================================


-- =====================================================
-- STEP 1: CREATE THE DATABASE
-- =====================================================

CREATE DATABASE IF NOT EXISTS savora_reservations
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;


-- =====================================================
-- STEP 2: SELECT THE DATABASE
-- =====================================================

USE savora_reservations;


-- =====================================================
-- STEP 3: CREATE THE RESERVATIONS TABLE
-- =====================================================

CREATE TABLE IF NOT EXISTS reservations (

    -- Unique reservation number
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,

    -- Customer information
    full_name VARCHAR(100) NOT NULL,

    email VARCHAR(150) NOT NULL,

    phone VARCHAR(20) NOT NULL,

    -- Reservation details
    reservation_date DATE NOT NULL,

    reservation_time TIME NOT NULL,

    guests INT NOT NULL,

    -- Optional customer requests
    special_requests TEXT,

    -- Automatically records submission date and time
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- =====================================================
-- STEP 4: VIEW ALL RESERVATIONS
-- =====================================================

SELECT *
FROM reservations;


-- =====================================================
-- STEP 5: VIEW NEWEST RESERVATIONS FIRST
-- =====================================================

SELECT *
FROM reservations
ORDER BY reservation_id DESC;


-- =====================================================
-- STEP 6: COUNT TOTAL RESERVATIONS
-- =====================================================

SELECT COUNT(*) AS total_reservations
FROM reservations;


-- =====================================================
-- STEP 7: VIEW CUSTOMER BOOKING DETAILS
-- =====================================================

SELECT
    reservation_id,
    full_name,
    email,
    phone,
    reservation_date,
    reservation_time,
    guests,
    special_requests,
    created_at
FROM reservations
ORDER BY reservation_date ASC,
         reservation_time ASC;


-- =====================================================
-- END OF SAVORA DATABASE SCRIPT
-- =====================================================

-- NOTE:
-- Customer reservations are inserted automatically
-- through save_reservation.php.
--
-- No manual INSERT statements are required.
--
-- Existing reservations will not be deleted
-- when this script is executed again.
-- =====================================================
