<?php
session_start(); // Start session if needed
include('header.php');
?>

<!-- Link to the external CSS -->
<link rel="stylesheet" href="heatmap.css">

<!-- Page content -->
<section class="content">
    <br>
    <br>
    <h2 style="text-align: center;">Heatmap Analysis</h2>
    <br>
    
    <!-- Container for the iframes (3 per row) -->
    <div class="iframe-container">
        <div class="iframe-row">
            <iframe src="heatmap6.html" class="embedded-frame" title="Heatmap 6 Analysis"></iframe>
            <iframe src="heatmap5.html" class="embedded-frame" title="Heatmap 5 Analysis"></iframe>
            <iframe src="heatmap4.html" class="embedded-frame" title="Heatmap 4 Analysis"></iframe>
        </div>
        <div class="iframe-row">
            <iframe src="heatmap3.html" class="embedded-frame" title="Heatmap 3 Analysis"></iframe>
            <iframe src="heatmap2.html" class="embedded-frame" title="Heatmap 2 Analysis"></iframe>
            <iframe src="heatmap1.html" class="embedded-frame" title="Heatmap 1 Analysis"></iframe>
        </div>
        
        <div class="iframe-row">
            <iframe src="heatmap0.html" class="embedded-frame" title="Heatmap 0 Analysis"></iframe>
        </div>
    </div>
    
    <br>
    <br>
    <!-- Extended Description Section -->
    <div class="description">
        <div class="card">
            <h3>Heatmap Analysis</h3>
            <br>
            <p>Heatmaps are a great way to visualize data trends and patterns. In stock market analysis, heatmaps provide an overview of various metrics, such as price movements, volatility, or sector performance, in a highly visual format. By using color codes and gradients, heatmaps allow investors to quickly assess which stocks, sectors, or assets are performing well and which are underperforming.</p>
            <p>In our heatmap analysis, we present different visualizations for various aspects of the stock market, each represented in a grid format where color intensity or variation indicates the strength or weakness of a given metric. Whether it's price changes over time or sector-specific trends, the heatmap can quickly show the key data points for decision-making.</p>
            <p>Heatmaps are widely used in many areas of finance, especially for risk management, portfolio monitoring, and performance tracking. They can be used for market sentiment analysis, asset allocation, and monitoring fluctuations in real-time. By comparing different heatmaps side-by-side, investors can gain a multi-dimensional view of the market landscape and adjust their strategies accordingly.</p>
            <p>By examining the performance of various stocks through the heatmaps, investors can make more informed decisions about which assets to invest in, which sectors are currently outperforming others, and where potential opportunities or risks lie in the market.</p>
        </div>
    </div>
</section>
<br>
<br>
<?php include('footer.php'); ?>
