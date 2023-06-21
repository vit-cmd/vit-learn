<?php
  declare(strict_types=1);

  /**
   * Format amout have $
   * @param float $amout
   * @return string
   */
  function formatDolarAmount(float $amount): string {
    $isNegative = $amount < 0;
    return ($isNegative ? '-' : '').'$'.number_format(abs($amount), 2);
  }

  function formatDate(string $date): string {
    return date('M j, Y', strtotime($date));
  }
