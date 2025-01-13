<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portfolio</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(0, 0, 0, 0.85);
            color: #fff;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
            padding: 15px 30px;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1800px;
            margin: 0 auto;
        }

        .logo {
            font-size: 24px;
            color: #00adb5;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .nav-links a,
        .welcome-message {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
            white-space: nowrap;
        }

        .nav-links a:hover {
            color: #00adb5;
        }

        .btn {
            border: none;
            border-radius: 20px;
            padding: 6px 10px;
            background: #fff;
            transition: all 0.3s ease;
            font-size: 12px;
            cursor: pointer;
        }

        .btn:hover {
            background: #00adb5;
            color: #fff;
        }

        /* Text-only buttons */
        .btn.text-button {
            background: transparent;
            color: #fff;
            font-size: 14px;
            padding: 0;
        }

        .btn.text-button:hover {
            background: transparent;
            color: #00adb5;
        }

        /* Login/Logout Button Styling */
        .logout-btn {
            background: #f44336;
            border-color: #f44336;
        }

        .logout-btn:hover {
            background: #b71c1c;
            border-color: #b71c1c;
        }

        /* Header Image Styling */
        .header-image {
            width: 150%;
            max-width: 1500px;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        /* Intro Header Styling */
        .intro-header {
            text-align: center;
            padding: 40px 20px;
            position: relative;
            background-color: rgba(0, 0, 0, 0.75);
        }

        .intro-header h2 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #00adb5;
        }

        .intro-header p {
            font-size: 18px;
            color: #ddd;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Main Content Section */
        .home-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Footer Styling */
        footer {
            padding: 20px;
            background: rgba(0, 0, 0, 0.9);
            box-shadow: 0px -5px 20px rgba(0, 173, 181, 0.4);
            text-align: center;
            color: #00adb5;
            font-size: 14px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 173, 181, 0.1), transparent);
            z-index: 0;
        }

        footer p {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <!-- Content goes here -->

    <!-- Footer -->
    <footer>
        <p>©
            <?php echo date("Y"); ?> Dashboard Portfolio. All rights reserved.
        </p>
    </footer>
</body>
</html>
