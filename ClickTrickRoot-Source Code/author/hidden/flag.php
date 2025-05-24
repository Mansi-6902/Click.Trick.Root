<?php
if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') {
    http_response_code(403);
    echo "Access denied.";
    exit;
}
echo "FLAG{ssrf_accessed_internal_service}";
?>
