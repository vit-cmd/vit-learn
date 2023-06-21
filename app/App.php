<?php
  declare(strict_types=1);
  
  /**
   * Get list file name in folder 'data'
   * @param string $dirPath
   * @return array
   */
  function getTransactionFiles(string $dirPath): array {
    $files = [];

    foreach(scandir($dirPath) as $file) {
      if(is_dir($file)) {
        continue;
      }
      $files[] = $dirPath . $file;
    }
    return $files;
  }

  /**
   * Get transaction data in file
   * @param string $filePath
   * @return array
   */
  function getTransactions(
    string $filePath, 
    ?callable $transactionHandler = null
  ): array {
    // check file is existed
    if(!file_exists($filePath)) {
      // 
      trigger_error('File "'. $filePath . '" does not exist.', E_USER_ERROR);
    }
    // read transaction from file
    $file = fopen($filePath, 'r');
    fgetcsv($file); // remove title in file

    $transactions = [];

    while(($transaction = fgetcsv($file)) !== false) {
      if ($transactionHandler !== null) {
        $transaction = $transactionHandler($transaction);
      } 
      $transactions[] = $transaction;
    }
    
    // return value
    return $transactions;
  }

  /**
   * Extract transaction
   * @param array $transactionRow
   * @return array
   */
  function extractTransaction(array $transactionRow): array {
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount = str_replace(['$', ','], '', $amount);

    return [
      'date' => $date,
      'checkNumber' => $checkNumber,
      'description' => $description,
      'amount' => $amount
    ];
  } 

  /**
   * Calculate total amount
   * @param array $transactions
   * @return array
   */
  function calculateTotals(array $transactions): array {
    $total = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];
    foreach($transactions as $transaction) {
      $total['netTotal'] += $transaction['amount'];
      
      if($transaction['amount'] >= 0) {
        $total['totalIncome'] += $transaction['amount'];
      } else {
        $total['totalExpense'] += $transaction['amount'];
      }
    }
    return $total;
  }
