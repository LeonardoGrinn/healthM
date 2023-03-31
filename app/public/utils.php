<?php 

function getFpl2023($state, $householdSize) {
  $fplApiUrl = 'https://aspe.hhs.gov/topics/poverty-economic-mobility/poverty-guidelines/api/2023/' . $state . '/' . $householdSize;
  $fplApiResponse = file_get_contents($fplApiUrl);
  $fplResponseData = json_decode($fplApiResponse, true);
  return $fplResponseData["data"]["poverty_threshold"];
}

function getFpl2022($state, $householdSize) {
  $fplApiUrl = 'https://aspe.hhs.gov/topics/poverty-economic-mobility/poverty-guidelines/api/2022/' . $state . '/' . $householdSize;
  $fplApiResponse = file_get_contents($fplApiUrl);
  $fplResponseData = json_decode($fplApiResponse, true);
  return $fplResponseData["data"]["poverty_threshold"];
}

function checkIncome($householdSize, $income, $lifeEvents, $state) {
  // Define the FPL for 2022 and 2023
  $fpl2022 = getFpl2022($state, $householdSize);
  $fpl2023 = getFpl2023($state, $householdSize);
  
  // Calculate the income percentage based on 2022 and 2023 FPL
  $incomePercent2022 = ($income / ($fpl2022 * $householdSize)) * 100;
  $incomePercent2023 = ($income / ($fpl2023 * $householdSize)) * 100;
  
  // Check if the user is eligible for Medicaid
  if ($incomePercent2023 <= 138) {
      header('Location: /medicaid');
  }
  // Check if the user's income is between 150% and 400% of the FPL
  elseif ($incomePercent2023 >= 150 && $incomePercent2023 <= 400) {
      // Check if the user has any qualifying life events
      if ($lifeEvents == "Lost health coverage" || $lifeEvents == "Changes with my family" || $lifeEvents == "Started or left a job" || $lifeEvents == "Moved to a new state") {
          header('Location: /thanks');
      } else {
          header('Location: /health-listings');
      }
  }
  // Check if the user's income is greater than 400% of the FPL
  elseif ($incomePercent2023 > 400) {
      header('Location: /health-listings');
  }
}
