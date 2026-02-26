<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     *
     * @var array<string, mixed>
     */
    public array $default = [
        'DSN' => '',
        'hostname' => 'localhost',  // Default for local
        'username' => 'root',        // Default for local
        'password' => '',             // Default for local
        'database' => 'ci4tutorial',  // Default for local
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug' => true,
        'charset' => 'utf8mb4',
        'DBCollat' => 'utf8mb4_general_ci',
        'swapPre' => '',
        'encrypt' => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port' => 3306,
        'numberNative' => false,
        'foundRows' => false,
        'dateFormat' => [
            'date' => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time' => 'H:i:s',
        ],
    ];

    public function __construct()
    {
        parent::__construct();

        // Auto-detect production environment
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] !== 'localhost') {
            // This is production (InfinityFree)
            $this->default['hostname'] = 'sql100.infinityfree.com';
            $this->default['username'] = 'if0_40168601';           
            $this->default['password'] = 'Stanleyson00';      
            $this->default['database'] = 'if0_40168601_ci4tutorial'; 
            $this->default['DBDebug'] = false;                      
        }



        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}