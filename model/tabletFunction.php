<?php
function isTablet() {
    // Array of tablet user agent keywords
    $tabletKeywords = array(
        'iPad',
        'Android',
        'webOS',
        'BlackBerry',
        'PlayBook',
        'Windows Phone',
        'Kindle',
        'Silk'
    );
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    // Check if the user agent contains any tablet keywords
    foreach ($tabletKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true;
        }
    }
    
    return false;
}
?>