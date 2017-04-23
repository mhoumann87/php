<?php


include_once('class.poly_base_Factory.php');

$article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);
 
try {
    $writer = poly_base_Factory::getWriter();
}
catch (Exception $e) {
    $writer = new poly_writer_XMLWriter();
}
 
echo $article->write($writer);