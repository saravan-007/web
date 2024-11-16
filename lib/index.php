<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="navbar">
        <header>
            <div class="logo"><h1>Library Management System</h1></div>
            <div class="navs">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#content">Content</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="signup">
                <button><a href="studentLogin.php">Student Login</a></button>
                <button><a href="adminLogin.php">Admin Login</a></button>
            </div>
        </header>
    </section>

    <section id="about">
        <h1>About Us</h1>
        <p>
            Welcome to the Library Management System! Our platform aims to provide a seamless experience for managing library resources. Whether you're a student looking to borrow books or an administrator overseeing library operations, we've got you covered. 
        </p>
        <p>
            The system is designed to ensure efficient tracking of book inventory, easy management of lending/borrowing processes, and quick access to library statistics.
        </p>
    </section>

    <section id="content">
        <h1>Content</h1>
        <p>
            The Library Management System offers a range of features, including:
        </p>
        <ul>
            <li>Student portal to search and borrow books.</li>
            <li>Admin portal to manage book inventory and monitor transactions.</li>
            <li>Detailed records of borrowed and returned books.</li>
            <li>Notifications for due dates and overdue books.</li>
            <li>User-friendly interface for efficient library management.</li>
        </ul>
    </section>

    <section id="contact">
        <h1>Contact Us</h1>
        <p>
            Have any questions or need assistance? Feel free to get in touch with us.
        </p>
        <form action="contactform.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer style="background-color: #4CAF50; color: white; padding: 10px 0; text-align: center;">
        <p>&copy; 2024 Library Management System | All Rights Reserved.</p>
    </footer>
</body>
</html>
