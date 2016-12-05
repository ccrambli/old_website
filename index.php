<?php
// Include our newly created class
require_once 'defaultTemplate.php';

// ... some code

$news = ""; // Pulling out some data from databases, etc
$renderer = new defaultTemplate();
// Render template passing some variables and print it
print $renderer->render('index.twig', array('' => ""));