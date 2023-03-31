<?php 
function determinarElegibilidad($ingresos, $eventosDeVida) {
    $fpl2023 = 13080; // Número de ingresos para el nivel de pobreza federal en 2023
    $fpl150 = $fpl2023 * 1.5; // Número de ingresos para el 150% del nivel de pobreza federal en 2023
    $fpl400 = $fpl2023 * 4; // Número de ingresos para el 400% del nivel de pobreza federal en 2023
  
    $paso1 = /* calcular el ingreso bruto ajustado modificado (MAGI) */;
    $paso2 = /* calcular el tamaño de la familia */;
    $paso3 = $paso1 / $paso2;
  
    if ($paso2 <= 138 && $paso3 <= $fpl2023) {
      header("Location: /medicaid");
    } elseif ($paso2 > 138 && $paso3 >= $fpl150 && $paso3 <= $fpl400) {
      header("Location: /paso5");
    } elseif ($paso3 > $fpl400) {
      header("Location: /health-listings");
    } elseif ($paso3 >= $fpl150 && $paso3 <= $fpl400) {
      if (in_array($eventosDeVida, array("Pérdida de cobertura de salud", "Cambios con mi familia", "Comencé o dejé un trabajo", "Me mudé a un nuevo estado"))) {
        header("Location: /gracias");
      } else {
        header("Location: /health-listings");
      }
    }
  }

  function determinarElegibilidad($pobreza) {
    $ingresos2023 = 12880; // Ingresos de 2023 para un individuo soltero, para simplificar el ejemplo
    $ingresos2022 = 12880; // Ingresos de 2022 para un individuo soltero, para simplificar el ejemplo
    $paso1 = $pobreza * 1.0; // Multiplicamos por 1.0 para convertir el porcentaje en un número decimal
    $paso2 = $paso1 * $ingresos2023;
    $paso3 = $paso2 / 12; // Dividimos por 12 para obtener el ingreso mensual
    $paso4 = $paso3 / $ingresos2022;
  
    if ($paso2 <= $ingresos2023 * 1.38 && $paso3 <= $ingresos2023 * 1.38) {
      header("Location: /medicaid");
    } elseif ($paso2 <= $ingresos2022 * 4.00 && $paso3 <= $ingresos2022 * 4.00 && $paso2 >= $ingresos2022 * 1.50 && $paso3 >= $ingresos2022 * 1.50) {
      header("Location: /paso5");
    } elseif ($paso1 >= $ingresos2022 * 4.00 && $paso3 >= $ingresos2022 * 4.00) {
      header("Location: /listas-salud");
    } elseif ($paso4 >= 1.50 && $paso4 <= 4.00) {
      $eventosDeVida = ["Pérdida de cobertura de salud", "Cambio en la familia", "Comienzo o finalización de un trabajo", "Mudanza a un nuevo estado"];
      if (in_array($_GET["evento"], $eventosDeVida)) {
        header("Location: /gracias");
      } else {
        header("Location: /health-listings");
      }
    } else {
      header("Location: /error"); // En caso de no cumplir ninguna de las condiciones anteriores, redirigimos a una página de error
    }
  }
  