<?php

include('./includes/connect.php');

function createUrl($ticker) {

    $currentMonth = date('n');
    $currentMonth = $currentMonth - 1;
    $currentDay = date('j');
    $currentYear = date('Y');

    return "http://chart.finance.yahoo.com/table.csv?s=$ticker&a=1&b=28&c=2016&d=$currentMonth&e=$currentDay&f=$currentYear&g=d&ignore=.csv";

    
    
}


function getCvsFile($url, $outputFile) {

    $content = file_get_contents($url);
    $content = str_replace('Date,Open,High,Low,Close,Volume,Adj Close', '', $content);
    $content = trim($content);
    file_put_contents($outputFile, $content);
}

function fileToDatabase($txtFile, $tableName) {

    global $connect;

    $file = fopen($txtFile, 'r');
    while(!feof($file)) {
        $line = fgets($file);
        $pieces = explode(',', $line);

        $date = $pieces[0];
        $open = $pieces[1];
        $high = $pieces[2];
        $low = $pieces[3];
        $close = $pieces[4];
        $volume = $pieces[5];
        $ammountChange = $close - $open;
        $percentChange = ($ammountChange/$open)*100;


        $sql = "SELECT * FROM $tableName";
        $result = mysqli_query($connect, $sql);

        if(!$result) {

            $sql2 = "CREATE TABLE $tableName (date DATE, PRIMARY KEY(date), open FLOAT, high FLOAT, low FLOAT, close FLOAT, volume INT, ammount_change FLOAT, percent_change FLOAT)"; 
            mysqli_query($connect, $sql2);
        }

        $sql3 = "INSERT INTO $tableName (date, open, high, low, close, volume, ammount_change, percent_change) VALUES ('$date','$open','$high','$low','$close','$volume','$ammountChange','$percentChange')";
        mysqli_query($connect, $sql3);
        
    }
    fclose($file);
}

function main() {

    $mainTickerFile = fopen('tickerMaster.txt', 'r');

    while (!feof($mainTickerFile)) {
        $companyTicker = fgets($mainTickerFile);
        $companyTicker = trim($companyTicker);

        $fileURL = createUrl($companyTicker);
        $companyTxtFile = 'textfiles/'.$companyTicker.'.txt';
        getCvsFile($fileURL, $companyTxtFile);
        fileToDatabase($companyTxtFile, $companyTicker);


    }
}

main();
?>