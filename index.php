<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>The Contact Form</h1>
        <div class="contact-form-container">
            <form class="contact-form" action="index.php" method="POST">
                 <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter your first name" class="input-box" required>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name" class="input-box" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" class="input-box" required>
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Phone Number (Optional):</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" class="input-box">
                </div>

                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" placeholder="Type your message here..." class="input-box" rows="5" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>