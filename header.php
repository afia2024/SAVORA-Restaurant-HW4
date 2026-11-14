
<?php
/*
 * ==========================================
 * SAVORA - West African Fusion Kitchen
 * CIS 344 - Homework 4
 * Shared Website Header
 * ==========================================
 */

$pageTitle = $pageTitle ?? "SAVORA | West African Fusion Kitchen";

$currentPage = basename($_SERVER["PHP_SELF"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="SAVORA - A West African fusion restaurant inspired by culture, flavor and hospitality."
    >

    <title>
        <?php
        echo htmlspecialchars(
            $pageTitle,
            ENT_QUOTES,
            "UTF-8"
        );
        ?>
    </title>

    <!-- MAIN WEBSITE STYLESHEET -->
    <link rel="stylesheet" href="style.css">

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- RESERVATION NAVIGATION STYLING -->
    <style>

        .savora-reservation-nav {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            background: #6D2E3F;
            color: #FFFFFF !important;

            padding: 13px 24px !important;
            border: 1px solid #6D2E3F;
            border-radius: 8px;

            font-family: 'Poppins', Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;

            transition: all 0.3s ease;
        }

        .savora-reservation-nav:hover {
            background: #4E1E2C;
            border-color: #4E1E2C;
            color: #FFFFFF !important;
            transform: translateY(-2px);
        }

        /* Remove the normal underline animation */
        nav a.savora-reservation-nav::after {
            display: none;
        }

        .savora-reservation-nav .calendar-icon {
            font-size: 17px;
            line-height: 1;
        }

        /* Highlight the current navigation page */
        .navbar nav a[aria-current="page"]:not(.savora-reservation-nav) {
            color: #789EBD;
        }

        .navbar nav a.savora-reservation-nav[aria-current="page"] {
            background: #4E1E2C;
        }

        /* Keep the menu responsive */
        @media (max-width: 850px) {

            .navbar nav {
                justify-content: center;
                gap: 15px;
            }

            .savora-reservation-nav {
                padding: 11px 18px !important;
                font-size: 11px;
            }
        }

        @media (max-width: 480px) {

            .navbar nav {
                gap: 10px;
            }

            .savora-reservation-nav {
                width: auto;
                padding: 10px 15px !important;
                letter-spacing: 0.5px;
            }
        }

    </style>

</head>

<body>

<!-- ==========================================
     SAVORA NAVIGATION BAR
========================================== -->

<header class="site-header">

    <div class="navbar">

        <!-- RESTAURANT LOGO -->

        <a href="index.php" class="logo">
            SAVORA<span>.</span>
        </a>

        <!-- NAVIGATION LINKS -->

        <nav aria-label="Main navigation">

            <a
                href="index.php"
                <?php
                if ($currentPage === "index.php") {
                    echo 'aria-current="page"';
                }
                ?>
            >
                Home
            </a>

            <a
                href="menu.php"
                <?php
                if ($currentPage === "menu.php") {
                    echo 'aria-current="page"';
                }
                ?>
            >
                Menu
            </a>

            <a
                href="about.php"
                <?php
                if ($currentPage === "about.php") {
                    echo 'aria-current="page"';
                }
                ?>
            >
                About
            </a>

            <a
                href="contact.php"
                <?php
                if ($currentPage === "contact.php") {
                    echo 'aria-current="page"';
                }
                ?>
            >
                Contact
            </a>

            <!-- RESERVATION BUTTON -->

            <a
                href="reservation.php"
                class="savora-reservation-nav"
                <?php
                if ($currentPage === "reservation.php") {
                    echo 'aria-current="page"';
                }
                ?>
            >

                <span class="calendar-icon" aria-hidden="true">
                    &#128197;
                </span>

                Reservation

            </a>

        </nav>

    </div>

</header>

<!-- MAIN PAGE CONTENT -->

<main id="main-content">
