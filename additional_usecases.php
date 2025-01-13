<?php
session_start(); // Start session if needed
include('header.php');
?>

<!-- Link to the external CSS -->
<link rel="stylesheet" href="additional_usecases.css"> <!-- Make sure this file exists and has the correct CSS -->

<!-- Page content -->
<section class="content">
    <br>
    <br>
    <h1 style="text-align: center;">Sector-wise Analysis (2010-2016)</h1>
    
    <!-- Container for the iframes -->
    <div class="iframe-container">
        <!-- First row (3 iframes) -->
        <div class="iframe-row">
            <iframe src="72.html" class="embedded-frame" title="Price Movement Analysis"></iframe>
            <iframe src="71.html" class="embedded-frame" title="Price Movement Analysis"></iframe>
        </div>

        <!-- Second row (3 iframes) -->
        <div class="iframe-row">
        <iframe src="76.html" class="embedded-frame" title="Price Movement Analysis"></iframe>
            <iframe src="75.html" class="embedded-frame" title="Price Movement Analysis"></iframe>
            
        </div>

        <div class="iframe-row">
        <iframe src="74.html" class="embedded-frame" title="Price Movement Analysis"></iframe>
        <iframe src="73.html" class="embedded-frame" title="Price Movement Analysis"></iframe>  
</div>

        <!-- Third row (1 iframe centered) -->
        <div class="iframe-center">
            <iframe src="77.html" class="embedded-frame" title="Price Movement Analysis"></iframe>
        </div>
    </div>

    <br>
    <br>
    <!-- Description Section for Profit Projection -->
    <div class="description">
    <div class="card">
        <h2>Sector-wise Analysis (2010-2016)</h2>
        <p>The sector-wise analysis from 2010 to 2016 provides an in-depth look at the performance of various industries over a six-year period. This analysis helps businesses and investors understand how different sectors have evolved, highlighting growth patterns, challenges, and key trends. By studying sector performance, stakeholders can gain valuable insights into which industries have thrived, which have faced difficulties, and how external factors like market conditions, economic shifts, and technological advancements have influenced sector dynamics.</p>
        <p>Each sector's analysis considers factors such as revenue growth, profitability, market share changes, and the impact of global events on their performance. This information is crucial for making informed decisions about where to allocate resources, which sectors show potential for future growth, and where the risks might lie.</p>
        <p>Through this sector-wise analysis, businesses and investors can assess the long-term stability of specific industries, project future trends, and determine the best course of action for growth and profitability in the coming years.</p>
    </div>
</div>


</section>
<br>
<br>

<?php include('footer.php'); ?>
