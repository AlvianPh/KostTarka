<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kost Tarka</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="<?= base_url('images/logo.png'); ?>" alt="Kost Tarka Logo">
        </div>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Sign Up</a>
        </nav>
    </header>

    <main>
        <h1 align="center">Welcome To Kost Tarka</h1>
        <div class="hero-section" style="background-image: url('<?= base_url('images/background.jpg'); ?>');">
            <div class="content">
                <h2>Manage Your Room and Ensure Security</h2>
                <p>Adjust Payment Settings Quickly</p>
                <a href="<?= base_url('dashboard_pemilik') ?>" class="button">Manage</a>
            </div>
        </div>

        <section class="features">
            <h2>Why Kost Tarka?</h2>
            <p>Discover the key features that make managing your boarding house simple, secure, and convenient.</p>
            <div class="features-container">
                <div class="feature">
                    <img src="<?= base_url('images/reminder.png'); ?>" alt="Payment Reminder">
                    <h3>Payment Reminder</h3>
                    <p>Never miss a payment deadline with our automated reminders tailored for you.</p>
                </div>
                <div class="feature">
                    <img src="<?= base_url('images/property.png'); ?>" alt="Manage Your Property">
                    <h3>Manage Your Property</h3>
                    <p>Track and control your property’s status effortlessly from anywhere.</p>
                </div>
                <div class="feature">
                    <img src="<?= base_url('images/option.jpg'); ?>" alt="Payment Option">
                    <h3>Payment Options</h3>
                    <p>Flexible payment methods to suit your and your tenant’s preferences.</p>
                </div>
                <div class="feature">
                    <img src="<?= base_url('images/history.png'); ?>" alt="Payment History">
                    <h3>Payment History</h3>
                    <p>Access detailed records of all past transactions in one place.</p>
                </div>
            </div>
        </section>


        <section class="cta">
            <div class="cta-content">
                <h2>Ready to Start?</h2>
                <p>Discover the best way to manage your boarding house effortlessly. Get insights, reminders, and complete control at your fingertips!</p>

                <!-- template saja,get started nya nanti ganti ke login -->
                <a href="<?= base_url('dashboard_penghuni') ?>" class="btn">Get Started</a>


            </div>
            <div class="cta-image">
                <img src="<?= base_url('images/start.png'); ?>" alt="Get Started Illustration">
            </div>
        </section>


        <section class="feedback">
            <h2>Feedback Form</h2>
            <form action="/submit-feedback" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <label for="comments">Comments</label>
                <textarea id="comments" name="comments" placeholder="Add your comments..." required></textarea>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="<?= base_url('images/logo.png'); ?>" alt="Kost Tarka Logo">
                <p>Simplify Your Property with Tarka</p>
            </div>
            <div class="footer-links">
                <a href="0895375150908" target="_blank" class="footer-icon">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://www.instagram.com/phew.zzz/?hl=en" target="_blank" class="footer-icon">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://github.com/AlvianPh/KostTarka.git" target="_blank" class="footer-icon">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Kost Tarka. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>