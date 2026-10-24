<?php
// setup.php
require_once 'Database.php';

$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    echo "✅ Successfully connected to TiDB Serverless!<br><br>";

    // Phase 1 SQL Schema
    $sql = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        role ENUM('admin', 'merchant') NOT NULL DEFAULT 'merchant',
        company_name VARCHAR(255) NOT NULL,
        kyc_status ENUM('pending', 'verified', 'rejected') DEFAULT 'pending',
        password_hash VARCHAR(255) NOT NULL,
        2fa_secret VARCHAR(64) NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

    CREATE TABLE IF NOT EXISTS stores (
        store_id INT AUTO_INCREMENT PRIMARY KEY,
        merchant_id INT NOT NULL,
        store_name VARCHAR(255) NOT NULL,
        api_key VARCHAR(64) UNIQUE NOT NULL,
        webhook_url VARCHAR(255) NULL,
        qr_model ENUM('merchant_qr', 'paygem_qr') NOT NULL,
        custom_qr_image_url VARCHAR(255) NULL,
        wallet_balance DECIMAL(10,2) DEFAULT 0.00,
        is_active BOOLEAN DEFAULT TRUE,
        FOREIGN KEY (merchant_id) REFERENCES users(id) ON DELETE CASCADE
    );

    CREATE TABLE IF NOT EXISTS transactions (
        txn_id VARCHAR(36) PRIMARY KEY,
        store_id INT NOT NULL,
        customer_identifier VARCHAR(100) NOT NULL,
        amount DECIMAL(10,2) NOT NULL,
        currency VARCHAR(3) DEFAULT 'INR',
        utr_number VARCHAR(12) UNIQUE NULL,
        status ENUM('pending', 'verified', 'failed') DEFAULT 'pending',
        qr_model_used ENUM('merchant_qr', 'paygem_qr') NOT NULL,
        fee_deducted DECIMAL(10,2) DEFAULT 0.00,
        net_amount DECIMAL(10,2) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        verified_at TIMESTAMP NULL,
        FOREIGN KEY (store_id) REFERENCES stores(store_id) ON DELETE CASCADE
    );
    ";

    try {
        $conn->exec($sql);
        echo "🎉 Phase 1 Tables created successfully! The core ledger is ready.";
        
        // Security: Self-destruct logic warning
        echo "<br><br><b>⚠️ IMPORTANT:</b> Please delete this setup.php file from GitHub now so no one else can run it.";
    } catch(PDOException $e) {
        echo "❌ Error creating tables: " . $e->getMessage();
    }
}
?>
