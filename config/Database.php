<?php
class Database {
    private $conn;

    public function getConnection() {
        $this->conn = null;

        // Pulled securely from Render's Environment Variables
        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT') ?: '4000'; // TiDB defaults to 4000
        $db_name = getenv('DB_NAME');
        $username = getenv('DB_USER');
        $password = getenv('DB_PASS');

        try {
            $dsn = "mysql:host={$host};port={$port};dbname={$db_name};charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::ATTR_PERSISTENT         => true, // Keeps connection open for faster API responses
                PDO::MYSQL_ATTR_SSL_CA       => '/etc/ssl/certs/ca-certificates.crt' // Required for TiDB Serverless
            ];
            
            $this->conn = new PDO($dsn, $username, $password, $options);
        } catch(PDOException $exception) {
            error_log("Database Connection Error: " . $exception->getMessage());
            header('HTTP/1.1 500 Internal Server Error');
            echo json_encode(["error" => "Critical systems unavailable."]);
            exit;
        }

        return $this->conn;
    }
}
?>
