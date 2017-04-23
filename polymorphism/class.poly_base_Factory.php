<?php

include_once('class.poly_writer_JSONWriter.php');
include_once('class.poly_writer_XMLWriter.php');
include_once('class.poly_base_Article.php');

class poly_base_Factory {
    public static function getWriter() {
        // grab request variable
        $format = $_REQUEST['format'];
        // construct our class name and check its existence
        $class = 'poly_writer_' . strtoupper($format) . 'Writer';
        if(class_exists($class)) {
            // return a new Writer object
            return new $class();
        }
        // otherwise we fail
        throw new Exception('Unsupported format');
    }
}