<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Contact Us</title>
    <style>
        body { font-family: 'Roboto', system-ui, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003366; color: white; padding: 20px; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 20px; margin: 0; padding: 0; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        nav a:hover { color: #00cc66; }
        .main { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; }
        h1 { color: #003366; }
        form { display: grid; gap: 10px; max-width: 600px; margin: auto; }
        input, textarea { padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #00cc66; color: white; border: none; padding: 10px; cursor: pointer; transition: background 0.3s; border-radius: 4px; }
        button:hover { background: #00994d; }
        .success { color: green; text-align: center; }
        @media (max-width: 768px) { nav ul { flex-direction: column; } .main { padding: 10px; } }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="curriculum.php">Curriculum</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="facilitators.php">Facilitators</a></li>
                <li><a href="founders_message.php">Founder’s Message</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <section class="main">
        <h1>Contact Us</h1>
        <p>Address: Karachi, Pakistan</p>
        <p>Phone: +44 7418 359852</p>
        <p>Email: info@rehan.education</p>
        <?php if (isset($_GET['success'])): ?>
            <p class="success">Message sent successfully!</p>
        <?php endif; ?>
        <form action="process_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
</body>
</html>
