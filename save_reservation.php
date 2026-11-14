
<?php
/*
 * SAVORA - CIS 344 Homework 4
 * Save Reservation and Display Confirmation
 */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: reservation.php");
    exit;
}

require_once "db.php";

// Get form information
$full_name = trim($_POST["full_name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$reservation_date = trim($_POST["reservation_date"] ?? "");
$reservation_time = trim($_POST["reservation_time"] ?? "");
$guests = filter_var(
    $_POST["guests"] ?? null,
    FILTER_VALIDATE_INT
);
$special_requests = trim($_POST["special_requests"] ?? "");

// Validate the form
$validDate = DateTimeImmutable::createFromFormat(
    "!Y-m-d",
    $reservation_date
);

$validTime = DateTimeImmutable::createFromFormat(
    "!H:i",
    $reservation_time
);

$error = "";

if (
    $full_name === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $phone === "" ||
    !$validDate ||
    $validDate->format("Y-m-d") !== $reservation_date ||
    $reservation_date < date("Y-m-d") ||
    !$validTime ||
    $validTime->format("H:i") !== $reservation_time ||
    $guests === false ||
    $guests < 1 ||
    $guests > 10
) {
    $error = "Please return to the reservation form and enter valid information.";
}

// Save reservation only if valid
if ($error === "") {
    try {
        $sql = "INSERT INTO reservations
                (
                    full_name,
                    email,
                    phone,
                    reservation_date,
                    reservation_time,
                    guests,
                    special_requests
                )
                VALUES
                (
                    :full_name,
                    :email,
                    :phone,
                    :reservation_date,
                    :reservation_time,
                    :guests,
                    :special_requests
                )";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":full_name" => $full_name,
            ":email" => $email,
            ":phone" => $phone,
            ":reservation_date" => $reservation_date,
            ":reservation_time" => $reservation_time,
            ":guests" => $guests,
            ":special_requests" => $special_requests
        ]);

        $reservation_id = $pdo->lastInsertId();

    } catch (PDOException $e) {
        error_log("SAVORA reservation error: " . $e->getMessage());
        $error = "We could not save your reservation. Please check the database connection and try again.";
    }
}

// Escape information before displaying it
function safe($value) {
    return htmlspecialchars(
        (string)$value,
        ENT_QUOTES,
        "UTF-8"
    );
}

$pageTitle = $error === ""
    ? "Thank You | SAVORA"
    : "Reservation Error | SAVORA";

include "header.php";
?>

<style>
.confirmation-section {
    background: #FAF5E9;
    min-height: 75vh;
    padding: 90px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.confirmation-card {
    background: #FFFFFF;
    border: 1px solid #DED3C5;
    border-radius: 18px;
    box-shadow: 0 15px 45px rgba(78,30,44,0.10);
    padding: 55px 40px;
    max-width: 700px;
    width: 100%;
    text-align: center;
}

.confirmation-icon {
    font-size: 60px;
    color: #6D2E3F;
    margin-bottom: 15px;
}

.confirmation-card h1 {
    color: #6D2E3F;
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 6vw, 58px);
    margin-bottom: 15px;
}

.confirmation-card p {
    color: #493F3D;
    line-height: 1.9;
}

.confirmation-subtitle {
    color: #789EBD;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 2px;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 20px;
}

.confirmation-details {
    background: #E4EFF9;
    border-radius: 12px;
    padding: 30px;
    margin: 30px 0;
    text-align: left;
}

.confirmation-details h2 {
    color: #6D2E3F;
    font-size: 27px;
    text-align: center;
    margin-bottom: 20px;
}

.confirmation-details p {
    margin-bottom: 10px;
    overflow-wrap: anywhere;
}

.confirmation-details strong {
    color: #6D2E3F;
}

.confirmation-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-top: 25px;
}

.confirmation-buttons a {
    background: #6D2E3F;
    color: white;
    padding: 13px 25px;
    border-radius: 7px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
}

.confirmation-buttons a:hover {
    background: #4E1E2C;
    color: white;
}

@media (max-width: 600px) {
    .confirmation-card {
        padding: 35px 20px;
    }

    .confirmation-details {
        padding: 22px;
    }
}
</style>

<section class="confirmation-section">

    <div class="confirmation-card">

        <?php if ($error === ""): ?>

            <div class="confirmation-icon">✓</div>

            <p class="confirmation-subtitle">
                SAVORA • WEST AFRICAN FUSION KITCHEN
            </p>

            <h1>Thank You!</h1>

            <p>
                Dear <?php echo safe($full_name); ?>,
                your reservation request has been
                received successfully.
            </p>

            <p>
                We look forward to welcoming you
                to the SAVORA experience!
            </p>

            <div class="confirmation-details">

                <h2>Your Reservation Details</h2>

                <p>
                    <strong>Reservation Number:</strong>
                    #<?php echo safe($reservation_id); ?>
                </p>

                <p>
                    <strong>Name:</strong>
                    <?php echo safe($full_name); ?>
                </p>

                <p>
                    <strong>Email:</strong>
                    <?php echo safe($email); ?>
                </p>

                <p>
                    <strong>Phone:</strong>
                    <?php echo safe($phone); ?>
                </p>

                <p>
                    <strong>Date:</strong>
                    <?php echo safe($reservation_date); ?>
                </p>

                <p>
                    <strong>Time:</strong>
                    <?php
                    echo safe(
                        date(
                            "g:i A",
                            strtotime($reservation_time)
                        )
                    );
                    ?>
                </p>

                <p>
                    <strong>Guests:</strong>
                    <?php echo safe($guests); ?>
                </p>

                <?php if ($special_requests !== ""): ?>
                    <p>
                        <strong>Special Requests:</strong>
                        <?php echo nl2br(safe($special_requests)); ?>
                    </p>
                <?php endif; ?>

            </div>

            <p>
                Your request has been saved.
                This is a demonstration reservation
                for the SAVORA student project.
            </p>

        <?php else: ?>

            <div class="confirmation-icon">!</div>

            <h1>Something Went Wrong</h1>

            <p>
                <?php echo safe($error); ?>
            </p>

            <p>
                Your reservation has not been confirmed.
            </p>

        <?php endif; ?>

        <div class="confirmation-buttons">

            <a href="index.php">
                Back to Home
            </a>

            <a href="reservation.php">
                <?php echo $error === ""
                    ? "Make Another Reservation"
                    : "Try Again"; ?>
            </a>

        </div>

    </div>

</section>

<?php include "footer.php"; ?>
