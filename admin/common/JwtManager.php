<?php

// Include the JwtManager class
require_once '../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtManager {
    private static $secretKey;

    public static function init() {
        self::$secretKey = "This is my secret key";
        if (!self::$secretKey) {
            throw new Exception('JWT secret key is not set.');
        }
    }

    // Generate a JWT
    public static function generate($data, $expiry = 3600) {
        $issuedAt = time();
        $expirationTime = $issuedAt + $expiry;

        $payload = [
            'iat' => $issuedAt,
            'exp' => $expirationTime,
            'data' => $data
        ];

        return JWT::encode($payload, self::$secretKey,'HS256');
    }
	
	public static function decode($jwt) {
        
        return JWT::decode($jwt, new Key(self::$secretKey, 'HS256'));

    }

    // Decode and validate a JWT
    public static function validate($token) {
        try {
            return JWT::decode($token, new Key(self::$secretKey, 'HS256'));
        } catch (Exception $e) {
            return null;  // Return null if token is invalid or expired
        }
    }
}

// Initialize the JWT Helper
JwtManager::init();

?>