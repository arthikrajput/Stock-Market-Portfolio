<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portfolio</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar-container">
            <h1 class="logo">Dashboard Portfolio</h1>
            <div class="nav-links">
                <!-- Navigation Buttons as Clickable Text -->
                <a href="home.php" class="btn text-button">Home</a>&nbsp;
                <a href="p_returns_stocks.php" class="btn text-button">P-Returns Stocks</a>&nbsp;
                <a href="portfolio.html" class="btn text-button">Portfolio</a>&nbsp;
                <a href="heatmap.php" class="btn text-button">Heatmap</a>&nbsp;
                <a href="pe_pb_ratios_dropdown.php" class="btn text-button">P/E & P/B Ratio</a>&nbsp;
                <a href="price_movement.php" class="btn text-button">Price Movement</a>&nbsp;
                <a href="profit_projection.php" class="btn text-button">Profit Projection</a>&nbsp;
                <a href="additional_usecases.php" class="btn text-button">Sector-wise Analysis</a>

                <!-- Login and Register Buttons with border -->
                <?php if (isset($_SESSION['username'])): ?>
                   <span class="welcome-message">Welcome,
                       <?php echo htmlspecialchars($_SESSION['username']); ?> (
                       <?php echo htmlspecialchars($_SESSION['role']); ?>)
                   </span>
                   <a href="logout.php" class="btn logout-btn">Logout</a>
               <?php else: ?>
                   <a href="login.html" class="login-button">Login</a>
                   <a href="register.html" class="login-button">Register</a>
               <?php endif; ?>
            </div>
        </div>
    </nav>
</body>
</html>
