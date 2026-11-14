
<?php
/*
 * SAVORA - CIS 344 Homework 4
 * Centered Restaurant Reservation Page
 */

$pageTitle = "Reservations | SAVORA";
include "header.php";
?>

<style>
/* HERO */

.reservation-hero {
    background:
        linear-gradient(
            rgba(78,30,44,.70),
            rgba(78,30,44,.82)
        ),
        url("images/restaurant.jpg")
        center / cover no-repeat;

    padding: 105px 20px;
    text-align: center;
}

.reservation-hero .eyebrow {
    color: #A9C8E5;
}

.reservation-hero h1 {
    color: #FAF5E9;
    font-size: clamp(46px, 7vw, 82px);
    margin-bottom: 15px;
}

.reservation-hero p:last-child {
    max-width: 680px;
    margin: auto;
    color: #FAF5E9;
    font-size: 16px;
    line-height: 1.9;
}

/* MAIN SECTION */

.reservation-section {
    background: #FAF5E9;
    padding: 90px 20px;
    text-align: center;
}

.reservation-heading {
    max-width: 750px;
    margin: 0 auto 45px;
    text-align: center;
}

.reservation-heading h2 {
    color: #6D2E3F;
    font-size: clamp(35px, 5vw, 54px);
    margin-bottom: 15px;
}

.reservation-heading p:last-child {
    color: #716865;
    font-size: 15px;
    line-height: 1.9;
}

/* CENTERED FORM */

.reservation-form {
    width: 100%;
    max-width: 850px;
    margin: 0 auto;

    background: #FFFFFF;
    padding: 50px;
    border: 1px solid #DED3C5;
    border-radius: 16px;
    box-shadow: 0 12px 35px rgba(78,30,44,.08);
}

.reservation-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0,1fr));
    gap: 25px;
}

.reservation-field {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    min-width: 0;
    text-align: center;
}

.reservation-field label {
    color: #6D2E3F;
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 14px;
    font-weight: 600;
}

.reservation-field small {
    color: #716865;
    font-size: 12px;
    line-height: 1.6;
    min-height: 38px;
}

.reservation-field input,
.reservation-field select,
.reservation-field textarea {
    width: 100%;
    min-height: 52px;
    padding: 13px 15px;
    border: 1px solid #DED3C5;
    border-radius: 7px;
    background: #FAF5E9;
    color: #493F3D;
    font-family: 'DM Sans', Arial, sans-serif;
    font-size: 14px;
    text-align: center;
    box-sizing: border-box;
}

.reservation-field textarea {
    min-height: 125px;
    resize: vertical;
}

.reservation-field input:focus,
.reservation-field select:focus,
.reservation-field textarea:focus {
    outline: 2px solid #A9C8E5;
    border-color: #6D2E3F;
}

.reservation-full {
    grid-column: 1 / -1;
}

.reservation-submit {
    width: 100%;
    max-width: 400px;
    margin: 35px auto 0;
    padding: 17px;

    background: #6D2E3F;
    color: #FFFFFF;
    border: none;
    border-radius: 7px;

    font-family: 'Poppins', Arial, sans-serif;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
}

.reservation-submit:hover {
    background: #4E1E2C;
}

/* CONTACT INFORMATION BELOW FORM */

.reservation-contact {
    background: #E4EFF9;
    padding: 90px 20px;
    text-align: center;
}

.reservation-contact-inner {
    max-width: 850px;
    margin: auto;
}

.reservation-contact h2 {
    color: #6D2E3F;
    margin-bottom: 40px;
}

.reservation-contact-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0,1fr));
    gap: 30px;
    margin-bottom: 45px;
}

.reservation-contact-card {
    background: #FFFFFF;
    border: 1px solid #DED3C5;
    border-radius: 12px;
    padding: 35px 20px;
}

.reservation-contact-card .icon {
    color: #789EBD;
    font-size: 34px;
    margin-bottom: 12px;
}

.reservation-contact-card h3 {
    color: #6D2E3F;
    font-size: 27px;
    margin-bottom: 10px;
}

.reservation-contact-card a {
    color: #6D2E3F;
    font-size: 19px;
    font-weight: 600;
}

.reservation-contact-card a:hover {
    color: #789EBD;
}

/* DECORATIVE DIVIDER */

.reservation-divider {
    display: flex;
    align-items: center;
    gap: 18px;
    max-width: 550px;
    margin: 45px auto;
    color: #6D2E3F;
    font-size: 28px;
}

.reservation-divider::before,
.reservation-divider::after {
    content: "";
    height: 2px;
    background: #A9C8E5;
    flex: 1;
}

/* OPENING HOURS */

.reservation-hours {
    max-width: 650px;
    margin: auto;
    text-align: center;
}

.reservation-hours h2 {
    margin-bottom: 30px;
}

.reservation-hours-item {
    margin-bottom: 25px;
}

.reservation-hours-item h3 {
    display: inline-block;
    background: #FFFFFF;
    padding: 5px 22px;
    border-radius: 6px;
    font-size: 21px;
    color: #6D2E3F;
    margin-bottom: 8px;
}

.reservation-hours-item p {
    color: #493F3D;
    font-size: 17px;
}

/* LET'S EAT SECTION */

.reservation-ending {
    background: #6D2E3F;
    text-align: center;
    padding: 90px 20px;
}

.reservation-ending .eyebrow {
    color: #A9C8E5;
}

.reservation-ending h2 {
    color: #FAF5E9;
    font-size: clamp(40px, 6vw, 65px);
    margin-bottom: 20px;
}

.reservation-ending p:not(.eyebrow) {
    color: #FAF5E9;
    max-width: 650px;
    margin: 0 auto 25px;
}

.reservation-ending .button {
    margin: 10px;
}

/* MOBILE */

@media (max-width: 650px) {
    .reservation-grid,
    .reservation-contact-grid {
        grid-template-columns: 1fr;
    }

    .reservation-form {
        padding: 30px 20px;
    }

    .reservation-section,
    .reservation-contact,
    .reservation-ending {
        padding: 65px 15px;
    }

    .reservation-field small {
        min-height: 0;
    }
}
</style>

<!-- RESERVATION HERO -->

<section class="reservation-hero">

    <p class="eyebrow">
        SCHEDULE YOUR VISIT WITH EASE
    </p>

    <h1>Reservation.</h1>

    <p>
        A seat at our table. A taste of home.
        Discover bold West African flavors,
        beautiful traditions, and unforgettable hospitality.
    </p>

</section>

<!-- CENTERED BOOKING FORM -->

<section class="reservation-section" id="book-table">

    <div class="reservation-heading">

        <p class="eyebrow">
            ARE YOU HUNGRY?
        </p>

        <h2>Come, Dine With Us!</h2>

        <p>
            Experience the vibrant flavors of West Africa
            in a beautiful, welcoming atmosphere.
            Whether you're celebrating a special occasion
            or enjoying a memorable meal,
            your seat at SAVORA awaits.
        </p>

    </div>

    <form
        class="reservation-form"
        action="save_reservation.php"
        method="POST"
    >

        <div class="reservation-grid">

            <!-- FULL NAME -->

            <div class="reservation-field">

                <label for="full_name">
                    Full Name *
                </label>

                <small>
                    Please enter your full name.
                </small>

                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    placeholder="Enter your full name"
                    maxlength="100"
                    required
                >

            </div>

            <!-- EMAIL -->

            <div class="reservation-field">

                <label for="email">
                    Email Address *
                </label>

                <small>
                    Enter an email where we can contact you.
                </small>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email address"
                    maxlength="150"
                    required
                >

            </div>

            <!-- PHONE -->

            <div class="reservation-field">

                <label for="phone">
                    Phone Number *
                </label>

                <small>
                    Provide a contact number where we can reach you.
                </small>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="+1 (000) 000-0000"
                    maxlength="20"
                    required
                >

            </div>

            <!-- GUESTS -->

            <div class="reservation-field">

                <label for="guests">
                    Number of Guests *
                </label>

                <small>
                    Select the number of guests for your reservation.
                </small>

                <select
                    id="guests"
                    name="guests"
                    required
                >

                    <option value="">
                        Select an option
                    </option>

                    <?php for ($i = 1; $i <= 10; $i++): ?>

                        <option value="<?php echo $i; ?>">
                            <?php echo $i; ?>
                            <?php echo $i === 1 ? " Guest" : " Guests"; ?>
                        </option>

                    <?php endfor; ?>

                </select>

            </div>

            <!-- DATE -->

            <div class="reservation-field">

                <label for="reservation_date">
                    Reservation Date *
                </label>

                <small>
                    Select your preferred reservation date.
                </small>

                <input
                    type="date"
                    id="reservation_date"
                    name="reservation_date"
                    min="<?php echo date('Y-m-d'); ?>"
                    required
                >

            </div>

            <!-- TIME -->

            <div class="reservation-field">

                <label for="reservation_time">
                    Reservation Time *
                </label>

                <small>
                    Select your preferred reservation time.
                </small>

                <input
                    type="time"
                    id="reservation_time"
                    name="reservation_time"
                    required
                >

            </div>

            <!-- SPECIAL REQUESTS -->

            <div class="reservation-field reservation-full">

                <label for="special_requests">
                    Special Requests
                </label>

                <small>
                    Any special requests for your reservation?
                </small>

                <textarea
                    id="special_requests"
                    name="special_requests"
                    maxlength="1000"
                    placeholder="Tell us about your occasion..."
                ></textarea>

            </div>

        </div>

        <button
            type="submit"
            class="reservation-submit"
        >
            Submit Reservation Request
        </button>

    </form>

</section>

<!-- CONTACT BELOW FORM -->

<section class="reservation-contact">

    <div class="reservation-contact-inner">

        <p class="eyebrow">
            CONNECT WITH SAVORA
        </p>

        <h2>We're Here to Welcome You</h2>

        <div class="reservation-contact-grid">

            <div class="reservation-contact-card">

                <div class="icon">☎</div>

                <h3>For Restaurant</h3>

                <a href="tel:+16315612518">
                    631 561 2518
                </a>

            </div>

            <div class="reservation-contact-card">

                <div class="icon">☎</div>

                <h3>Private Dining</h3>

                <a href="tel:+10987654321">
                    098 765 4321
                </a>

            </div>

        </div>

        <div class="reservation-divider">
            ✦
        </div>

        <!-- OPEN HOURS -->

        <div class="reservation-hours">

            <p class="eyebrow">
                PLAN YOUR VISIT
            </p>

            <h2>Open Hours</h2>

            <div class="reservation-hours-item">

                <h3>Monday</h3>

                <p>5 PM – 11:30 PM</p>

            </div>

            <div class="reservation-hours-item">

                <h3>Tuesday – Thursday</h3>

                <p>2 PM – 11 PM</p>

            </div>

            <div class="reservation-hours-item">

                <h3>Friday</h3>

                <p>2 PM – 12 AM</p>

            </div>

            <div class="reservation-hours-item">

                <h3>Weekends</h3>

                <p>Saturday &amp; Sunday</p>
                <p>2 PM – 12 AM</p>

            </div>

        </div>

        <p style="font-size:12px; color:#716865; margin-top:35px;">
            Contact details and opening hours are sample
            information for the SAVORA student project.
        </p>

    </div>

</section>

<!-- LET'S EAT -->

<section class="reservation-ending">

    <p class="eyebrow">
        THE SAVORA EXPERIENCE
    </p>

    <h2>Let's Eat.</h2>

    <p>
        From smoky jollof rice to flavorful dibi
        and beautiful West African fusion creations,
        there's something special waiting for you.
        Come hungry, leave inspired.
    </p>

    <a
        href="#book-table"
        class="button button-light"
    >
        Reserve Your Table
    </a>

    <a
        href="menu.php"
        class="button button-light"
    >
        Explore Our Menu
    </a>

</section>

<?php include "footer.php"; ?>
