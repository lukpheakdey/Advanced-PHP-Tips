<?php

$feed = apc_fetch('news');

if ($feed === FALSE) {
    $feed = file_get_contents('http://example.org/news.xml');
    // Store this data in shared memory for five minutes.
    apc_store('news', $feed, 300);
}

// Do something with $feed.

?>