<?php 

function getFpl($year, $state, $householdSize) {
  $fplApiUrl = "https://aspe.hhs.gov/topics/poverty-economic-mobility/poverty-guidelines/api/$year/$state/$householdSize";
  $fplApiResponse = file_get_contents($fplApiUrl);
  $fplResponseData = json_decode($fplApiResponse, true);
  return $fplResponseData["data"]["poverty_threshold"];
}

function checkIncomeStepFour($householdSize, $income, $state) {
    $fpl2022 = getFpl(2022, $state, $householdSize);
    $fpl2023 = getFpl(2023, $state, $householdSize);
    $incomePercent2022 = ($income / ($fpl2022 * $householdSize)) * 100;
    $incomePercent2023 = ($income / ($fpl2023 * $householdSize)) * 100;
    $medicaidLimit = 1.38 * $fpl2023;
    $step5LowerLimit = 1.50 * $fpl2022;
    $step5UpperLimit = 4.00 * $fpl2022;
    
    if ($incomePercent2023 <= 138 && $incomePercent2022 <= 138) {
        header("Location: goverment-health/medicare.php");
        exit;
    } 
    
    if ($incomePercent2023 >= 150 && $incomePercent2023 <= 400) {
        header("Location: step5.php");
        exit;
    }
    
    if ($income >= $step5UpperLimit * $householdSize && $incomePercent2022 >= $step5UpperLimit) {
        header("Location: health-listings.php");
        exit;
    }
}

function checkIncomeStepfive($householdSize, $income, $lifeEvents, $state) {
    $fpl2023 = getFpl(2023, $state, $householdSize);
    $incomePercent2023 = ($income / ($fpl2023 * $householdSize)) * 100;
    
    if ($incomePercent2023 <= 138) {
        header("Location: goverment-health/medicare.php");
        exit;
    }
    
    if ($incomePercent2023 >= 150 && $incomePercent2023 <= 400) {
        if (in_array($lifeEvents, array("Lost health coverage", "Changes with my family", "Started or left a job", "Moved to a new state"))) {
            header('Location: thanks.php');
            exit;
        } else {
            header('Location: health-listings.php');
            exit;
        }
    }
    
    header('Location: health-listings.php');
    exit;
}
