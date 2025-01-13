<?php
session_start(); // Start session at the top of the page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portfolio</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Navbar Section -->
    <header class="navbar">
        <div class="navbar-container">
            <h1 class="logo">Dashboard Portfolio</h1>
            <div class="nav-links">
                <!-- Navigation Buttons as Clickable Text -->
                <button class="btn text-button"><a href="home.php">Home</a></button>&nbsp

                <button class="btn text-button"><a href="p_returns_stocks.php">P-Returns Stocks</a></button>&nbsp
                <button class="btn text-button"><a href="portfolio.html">Portfolio</a></button>&nbsp
                <button class="btn text-button"><a href="heatmap.php">Heatmap</a></button>&nbsp
                <button class="btn text-button"><a href="pe_pb_ratios_dropdown.php">P/E & P/B Ratio</a></button>&nbsp
                <button class="btn text-button"><a href="price_movement.php">Price Movement</a></button>&nbsp
                <button class="btn text-button"><a href="profit_projection.php">Profit Projection</a></button>&nbsp
                <button class="btn text-button"><a href="additional_usecases.php">Sector-wise Analysis</a></button>

                <!-- Login and Register Buttons with border-->
                <?php if (isset($_SESSION['username'])): ?>
                    <span class="welcome-message">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> (<?php echo htmlspecialchars($_SESSION['role']); ?>)</span>
                    <a href="logout.php" class="btn logout-btn">Logout</a>
                <?php else: ?>
                    <a href="login.html" class="btn login-btn login-register-btn">Login</a>
                    <a href="register.html" class="btn register-btn login-register-btn">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Intro Header Section -->
    <section class="intro-header">
        <h2>Welcome to My Financial Dashboard</h2>
        <p>Explore a range of financial analysis tools to gain insights into market performance and your portfolio. Get detailed analytics and projections to empower your investment decisions.</p>
    </section>
    
    <!-- Image Section -->
    <img src="people.png" alt="People" class="header-image">

    <!-- Main Content Section -->
    <section class="home-content">
        <!-- Embedding Another HTML File using iframe -->
        <!-- <iframe src="gross_profit_volatility.html" class="embedded-frame" title="Embedded Content"></iframe> -->
        <!-- <a href="portfolio.html" class="action-btn">Go to portfolio</a> -->
    </section>

    <!-- Footer Section -->
    <footer>
        <p>© <?php echo date("Y"); ?> Dashboard Portfolio. All rights reserved.</p>
    </footer>

</body>
</html>
