<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000', 'http://127.0.0.1:8000'],
    'allowed_headers' => ['*'],
    'allowed_credentials' => true,
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
    
];
