<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /**
     * Base Site URL
     * Auto-detects between local and production
     */
    public string $baseURL = (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost')
        ? 'http://localhost/bookshop-app/'
        : 'https://adhd.infinityfree.me/';

    /**
     * Allowed Hostnames
     */
    public array $allowedHostnames = [];

    /**
     * Index File - Remove for cleaner URLs
     */
    public string $indexPage = '';

    /**
     * URI PROTOCOL
     */
    public string $uriProtocol = 'REQUEST_URI';

    /**
     * Allowed URL Characters
     */
    public string $permittedURIChars = 'a-z 0-9~%.:_\-';

    /**
     * Default Locale
     */
    public string $defaultLocale = 'en';

    /**
     * Negotiate Locale
     */
    public bool $negotiateLocale = false;

    /**
     * Supported Locales
     */
    public array $supportedLocales = ['en'];

    /**
     * Application Timezone
     */
    public string $appTimezone = 'Europe/London'; // Changed to UK timezone

    /**
     * Default Character Set
     */
    public string $charset = 'UTF-8';

    /**
     * Force Global Secure Requests
     */
    public bool $forceGlobalSecureRequests = false;

    /**
     * Reverse Proxy IPs
     */
    public array $proxyIPs = [];

    /**
     * Content Security Policy
     */
    public bool $CSPEnabled = false;
}
