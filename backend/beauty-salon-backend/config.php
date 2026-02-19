<?php
return [
    'site_name' => 'Beauty Salon',
    'author' => 'Name',
    'email' => 'name@example.com'
];

$host = 'localhost';
// or database address from the hosting provider
$db = 'my_database';
// database name
$user = 'my_user';
// database login
$pass = 'my_password';
// password
$charset = 'utf8mb4';

// PDO setup
// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];

try {
    $pdo = new PDO( $dsn, $user, $pass, $options );
} catch ( PDOException $e ) {
    exit( 'DB Connection failed: ' . $e->getMessage() );
}
?>