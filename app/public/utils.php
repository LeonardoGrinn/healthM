<?php 
function checkIncome($householdSize, $income, $lifeEvents) {
  // Calculate income percentages based on 2022 numbers
  $fpl = 13084;
  $incomePercent = ($income / ($fpl * $householdSize)) * 100;

  // Calculate income percentages based on 2023 numbers
  $fpl2023 = 13660;
  $incomePercent2023 = ($income / ($fpl2023 * $householdSize)) * 100;

  // Check which page to redirect to based on income and life events
  if ($incomePercent2023 <= 138) {
      header('Location: /medicaid');
  } elseif ($incomePercent2023 >= 150 && $incomePercent2023 <= 400) {
      if ($lifeEvents == "Lost health coverage" || $lifeEvents == "Changes with my family" || $lifeEvents == "Started or left a job" || $lifeEvents == "Moved to a new state") {
          header('Location: /thanks');
      } else {
          header('Location: /health-listings');
      }
  } elseif ($incomePercent > 400) {
      header('Location: /health-listings');
  }
}
