<?php
// Define your database credentials
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database');

// Define other constant values
define('API_KEY', 'your_api_key');
define('MAX_RESULTS', 10);
define('MAX_RESULTS', 10);

// Create an array to store all the configurations
$config = array(
    'db_host' => DB_HOST,
    'db_username' => DB_USERNAME,
    'db_password' => DB_PASSWORD,
    'db_name' => DB_NAME,
    'api_key' => API_KEY,
    'max_results' => MAX_RESULTS
);

// Serialize the configuration array and save it to a file
$configFile = 'config.ini';
file_put_contents($configFile, serialize($config));

echo "Configuration file created successfully!";
?>