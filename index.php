<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Home</title>
    <style>
        body { font-family: 'Roboto', system-ui, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003366; color: white; padding: 20px; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 20px; margin: 0; padding: 0; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        nav a:hover { color: #00cc66; }
        .main { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; }
        h1, h2 { color: #003366; }
        .features { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .feature { background: #f4f4f4; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .feature:hover { transform: translateY(-5px); }
        footer { background: #003366; color: white; text-align: center; padding: 10px; }
        .social a { color: white; margin: 0 10px; text-decoration: none; }
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
        <h1>Digital Mastery for a Connected World</h1>
        <p>Welcome to Rehan Education, an AI-enabled platform empowering teens to unleash their digital potential, positively impact 10 million lives, and achieve financial independence.</p>
        <h2>Unique Features</h2>
        <div class="features">
            <div class="feature">
                <h3>AI-Enabled Education</h3>
                <p>Leverage cutting-edge AI tools for personalized learning experiences.</p>
            </div>
            <div class="feature">
                <h3>Digital Skills Acquisition</h3>
                <p>Master essential digital skills for the modern world.</p>
            </div>
            <div class="feature">
                <h3>Online Teaching Proficiency</h3>
                <p>Learn methodologies to teach and earn online effectively.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>Contact: Call/WhatsApp: +44 7418 359852</p>
        <div class="social">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter/X</a>
        </div>
    </footer>
</body>
</html>
