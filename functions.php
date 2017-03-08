<?php
/**
 * Displays page content. It takes the data from 
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
 
function pageContent() {
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd().'/pages/'.$page.'.php';
    if (file_exists($path)) {
        include $path;
    } else {
        include 'pages/404.php';
    }
}
?>