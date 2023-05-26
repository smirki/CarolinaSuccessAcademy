<?php
// Set the page title
$page_title = "Home";

// Get the value of the 'page' URL parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define allowed pages
$allowed_pages = [
    'home', 'dashboard', 'courses', 'pricing_packages', 'camps', 'resources',
    'testimonials', 'about', 'blog', 'contact_us', 'profile', 'login', 'logout'
];

// Check if the requested page is in the allowed pages array
if (in_array($page, $allowed_pages)) {
    // Include the header
    include('includes/header.php');
  

    // Load the appropriate content based on the 'page' parameter
    $file_path = "pages/{$page}/{$page}.php";
    if (file_exists($file_path)) {
        include($file_path);
    } else {
        include('pages/home/home.php');
    }

    // Include the footer
    include('includes/footer.php');
} else {
    // Redirect to the home page if the requested page is not allowed
    header('Location: index.php');
    exit;
}
