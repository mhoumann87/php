<?php

include ('../includes/connect.php');

function masterLoop() {
    global $connect;
    $mainTickerFile = fopen('../tickerMaster.txt', 'r');
    while (!feof($mainTickerFile)) {
        $companyTicker = fgets($mainTickerFile);
        $companyTicker = trim($companyTicker);

        $nextDayIncrese = 0;
        $nextDayDecrese = 0;
        $nextDayNoChange = 0;
        $total = 0;
        $sumOfIncreses = 0;
        $sumOfDecreses = 0;

       

        $sql = "SELECT date, percent_change FROM $companyTicker WHERE percent_change < 0 ORDER BY date ASC";
        $result = mysqli_query($connect, $sql);
        

        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $date = $row['date'];
                $percent_change = $row['percent_change'];

                $sql2 = "SELECT date, percent_change FROM $companyTicker WHERE date > $date ORDER BY date ASC LIMIT 1";
                $result2 = mysqli_query($connect, $sql2);
                $numberOfRows = mysqli_num_rows($result2);
               

                if ($numberOfRows == 1 ) {
                    $row2 = mysqli_fetch_array($result2);
                    $tom_date = $row2['0'];
                    $tom_percent_change = $row['1'];

                    if ($tom_percent_change > 0) {
                        $nextDayIncrese++;
                        $sumOfIncreses += $tom_percent_change;
                        $total++;
                    } else if ($tom_percent_change < 0) {
                        $nextDayDecrese++;
                        $sumOfDecreses += $tom_percent_change;
                        $total++;
                } else {
                    $nextDayNoChange++;
                    $total++;
                }

            } else if($numberOfRows == 0) {
                //no data after today
            } else {
                echo 'There is an error in analysis_a';
            }
        }
 
    } else {"Unable to select $companyTicker <br>";
    }

    $nextDayIncresePercent = ($nextDayIncrese/$total)*100;
    $nextDayDecresePercent = ($nextDayDecrese/$total)*100;
    $averageIncresePercent = $sumOfIncreses/$nextDayIncrese;
    $averageDecresePercent = $sumOfDecreses/$nextDayDecrese;



        } 

}


    function insertIntoResultTable($companyTicker, $nextDayIncrese, $nextDayIncresePercent, $averageIncresePercent, $nextDayDecrese, $nextDayDecresePercent, $averageDecresePercent) {

        $buyValue = $nextDayIncresePercent*$averageIncresePercent;
        $sellValue = $nextDayDecresePercent*$averageDecresePercent;

        $query ="SELECT * FROM analysis_a WHERE ticker='$companyTicker'";
        $res = mysqli_query($connect, $query);
        $numOfRows = mysqli_num_rows($res);

if($numberOfRows == 1){
			$sql = "UPDATE analysis_a ";
			$sql .= "SET ticker = '{$companyTicker}', ";
			$sql .= "daysInc = '{$nextDayIncrease}', ";
			$sql .= "prcntOfDaysInc = '{$nextDayIncreasePercent}', ";
			$sql .= "avgIncPrcnt = '{$averageIncreasePercent}', ";
			$sql .= "daysDec = '{$nextDayDecrease}', ";
			$sql .= "prcntOfDaysDec = '{$nextDayDecreasePercent}', ";
			$sql .= "avgDecPrcnt = '{$averageDecreasePercent}', ";
			$sql .= "buyValue = '{$buyValue}', ";
			$sql .= "sellValue = '{$sellValue}'";
			$sql .= "WHERE ticker = '{$companyTicker}' ";
			
			mysqli_query($connect, $sql);
		}else{
			$sql = "INSER INTO analysis_a (";
			$sql .= "ticker, daysInc, prcntOfDaysInc, ";
			$sql .= "avgIncPrcnt, daysDec, prcntOfDaysDec, ";
			$sql .= "avgDecPrcnt, buyValue, sellValue) ";
			$sql .= "VALUES (";
			$sql .= "'{$companyTicker}', '{$nextDayIncrease}', '{$nextDayIncreasePercent}', ";
			$sql .= "'{$averageIncreasePercent}', '{$nextDayDecrease}', '{$nextDayDecreasePercent}', ";
			$sql .= "'{$averageDEcreasePercent}', '{$buyValue}', '{$sellValue}' ";
			
			mysqli_query($connect, $sql);
    }
}

masterLoop();
?>