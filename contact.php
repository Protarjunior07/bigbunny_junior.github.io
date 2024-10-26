<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact BigBunny_Junior</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact BigBunny_Junior</h1>
    </header>

    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="links.html">Links</a>
        <a href="contact.php">Contact</a>
    </nav>

    <main>
        <section>
            <h2>Send Me a Message</h2>
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $message = htmlspecialchars($_POST["message"]);

                $to = "keano.godts@gmail.com"; 
                $subject = "Nieuw bericht van $name";
                $body = "Naam: $name\nEmail: $email\n\nBericht:\n$message";
                $headers = "From: $email";

                if (mail($to, $subject, $body, $headers)) {
                    echo "<p>Bedankt voor je bericht, $name!</p>";
                } else {
                    echo "<p>Er is een fout opgetreden. Probeer het later opnieuw.</p>";
                }
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 BigBunny_Junior. All rights reserved.</p>
    </footer>
</body>
</html>
