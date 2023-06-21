<?php
  declare(strict_types = 1);

  // DIRECTORY_SEPARATOR = /
  $root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

  define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
  define('FILES_PATH', $root . 'data' . DIRECTORY_SEPARATOR);
  define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

  require APP_PATH . 'App.php';
  require APP_PATH . 'helpers.php';

  $files = getTransactionFiles(FILES_PATH);

  $transactions = [];

  foreach ($files as $key => $file) {
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransaction'));
  }

  $total = calculateTotals($transactions);

  require VIEWS_PATH . 'transaction.php';

  // echo '<pre>';
  // print_r($transactions);
  // echo '</pre>';