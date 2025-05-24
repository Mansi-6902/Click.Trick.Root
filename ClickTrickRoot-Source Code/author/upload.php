<?php
if (isset($_POST['file_url'])) {
    $url = $_POST['file_url'];

    echo "<h3>Fetching URL: " . htmlspecialchars($url) . "</h3>";

    $response = @file_get_contents($url);

    if ($response === FALSE) {
        echo "<p>Failed to fetch content. The URL might be invalid or inaccessible.</p>";
    } else {
        echo "<h4>Response from server:</h4>";
        echo "<pre>" . htmlspecialchars($response) . "</pre>";
    }
}
?>

