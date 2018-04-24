<?php
error_reporting(0);

if(!function_exists("run_query"))
{
    function run_query($query, $params = null) {
        //MySQL credentials
        $host = '35.196.165.173';
        $db   = 'themightyfivedatabase';
        $user = 'mightyfive';
        $pass = '02GzqFl1DHfxEqF5';
        $charset = 'utf8mb4';

        //establish connection to MySQL server using PDO object
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        //execute SQL statement
        if($params == null) $sql_statement = $pdo->query($query);
        else
        {
            $sql_statement = $pdo->prepare($query);
            $sql_statement->execute($params);
        }

        // Fetch result from MySQL
        $result = $sql_statement->fetchAll();

        // Close MySQL connection by setting PDO objects to null.
        $pdo = null;
        $sql_statement = null;

        //return MySQL result
        return $result;
    }
}
?>
