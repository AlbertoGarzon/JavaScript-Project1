<?php
$content = array(
    'short' => 'New content',
    'regular' => 'This is the new content which has been loaded with AJAX',
    'long' => 'This content is the result of making an AJAX query to a PHP page which
    dynamically generated text as a response.'
);

echo json_encode($content);
?>