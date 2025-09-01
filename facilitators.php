<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Facilitators</title>
    <style>
        body { font-family: 'Roboto', system-ui, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003366; color: white; padding: 20px; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 20px; margin: 0; padding: 0; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        nav a:hover { color: #00cc66; }
        .main { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; }
        h1, h2 { color: #003366; }
        .facilitators { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .facilitator { text-align: center; background: #f4f4f4; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .facilitator img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; } /* Placeholder for images */
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
        <h1>Our Facilitators</h1>
        <p>Meet the dedicated educators guiding our students.</p>
        <div class="facilitators">
            <div class="facilitator">
                <img src="https://via.placeholder.com/150" alt="Rehan Allahwala">
                <h3>Rehan Allahwala</h3>
                <p>Founder & Lead Facilitator. Entrepreneur with experience in 150+ businesses.</p>
                <a href="#">LinkedIn</a> | <a href="#">Twitter</a>
            </div>
            <div class="facilitator">
                <img src="https://via.placeholder.com/150" alt="Doulat Education Wala">
                <h3>Doulat Education Wala</h3>
                <p>AI Specialist. Expert in AI tools and digital education.</p>
                <a href="#">LinkedIn</a> | <a href="#">Twitter</a>
            </div>
            <div class="facilitator">
                <img src="https://via.placeholder.com/150" alt="Kesser Education Wali">
                <h3>Kesser Education Wali</h3>
                <p>Online Teaching Expert. Focuses on communication and leadership.</p>
                <a href="#">LinkedIn</a> | <a href="#">Twitter</a>
            </div>
        </div>
    </section>
</body>
</html>
