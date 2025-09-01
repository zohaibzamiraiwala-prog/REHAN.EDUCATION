<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Courses</title>
    <style>
        body { font-family: 'Roboto', system-ui, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header { background: #003366; color: white; padding: 20px; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 20px; margin: 0; padding: 0; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        nav a:hover { color: #00cc66; }
        .main { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; }
        h1, h2 { color: #003366; }
        .courses { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .course { background: #f4f4f4; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .course:hover { transform: translateY(-5px); }
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
        <h1>Our Courses</h1>
        <p>Explore our range of courses designed to build digital mastery.</p>
        <div class="courses">
            <div class="course">
                <h3>ACCL - Artificial Creativity Communication Leadership</h3>
                <p>Daily 35-minute classes on AI, creativity, and leadership.</p>
            </div>
            <div class="course">
                <h3>English Mastery</h3>
                <p>Immersive English learning for global communication.</p>
            </div>
            <div class="course">
                <h3>AI Teacher Training</h3>
                <p>Bootcamp for educators on AI integration.</p>
            </div>
        </div>
    </section>
</body>
</html>
