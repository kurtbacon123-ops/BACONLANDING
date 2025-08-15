<?php
// Define the page title
$title = "Welcome to My World of Fantasy";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="This is a unique landing page with a modern design.">

    <!-- Include Google Font "Rock Salt" for graffiti style -->
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rock Salt', sans-serif; /* Use the graffiti font */
            line-height: 1.6;
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 1.5s ease-out;
            overflow: hidden; /* Ensure the animation doesn't cause a scroll */
            background-color: #333;
        }

        .wrapper {
            width: 100%;
            max-width: 1200px;
            text-align: center;
            color: white;
        }

        /* Header */
        header {
            padding: 20px 0;
            border-bottom: 2px solid #fff;
            animation: slideIn 1.5s ease-out;
        }

        header .logo h1 {
            font-size: 3em;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #ff6f61, #f9a8d4, #ffcc00, #4c6ef5, #29b6f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        /* Hero Section */
        .hero {
            background: rgba(0, 0, 0, 0.6);
            padding: 80px 20px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1.5s ease-out;
        }

        .hero h2 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            background: linear-gradient(45deg, #ff6f61, #f9a8d4, #ffcc00, #4c6ef5, #29b6f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            animation: slideInFromLeft 1s ease-out;
        }

        .hero p {
            font-size: 1.5em;
            margin-bottom: 30px;
            background: linear-gradient(45deg, #ff6f61, #f9a8d4, #ffcc00, #4c6ef5, #29b6f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            animation: fadeIn 1.5s ease-out;
        }

        .cta-button {
            background-color: #333;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            font-size: 1.5em;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            animation: fadeInUp 2s ease-out;
        }

        .cta-button:hover {
            background-color: #ff6f61;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 1em;
            color: #eee;
            animation: fadeIn 2.5s ease-out;
        }

        footer p {
            margin: 20px 0;
        }

        /* Bold and large font for "Designed by Kurt Russel Bacon" */
        .footer-text {
            font-size: 2em;
            font-weight: bold;
            background: linear-gradient(45deg, #ff6f61, #f9a8d4, #ffcc00, #4c6ef5, #29b6f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Keyframe Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            0% { transform: translateX(-100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideInFromLeft {
            0% { transform: translateX(-100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }

        /* Background Animation */
        @keyframes rainbowBackground {
            0% { background: linear-gradient(45deg, #ff6f61, #f9a8d4, #ffcc00); }
            25% { background: linear-gradient(45deg, #4c6ef5, #29b6f6, #66bb6a); }
            50% { background: linear-gradient(45deg, #ffb3e6, #f9a8d4, #ff6f61); }
            75% { background: linear-gradient(45deg, #ffcc00, #ff6f61, #ffb3e6); }
            100% { background: linear-gradient(45deg, #ff6f61, #f9a8d4, #ffcc00); }
        }

        body {
            animation: rainbowBackground 10s infinite alternate;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.5em;
            }

            .cta-button {
                padding: 12px 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Main Wrapper -->
    <div class="wrapper">
        
        <!-- Header Section -->
        <header>
            <div class="logo">
                <h1>Kurt Brand</h1>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <h2>Welcome to My World of Fantasy!</h2>
            <p>Kicking Since Day 1</p>
            <a href="#" class="cta-button">Let's Rock! CLICK HERE</a>
        </section>

        <!-- Footer Section -->
        <footer>
            <p class="footer-text">Designed by Kurt Russel Bacon</p>
        </footer>

    </div>

</body>
</html>
