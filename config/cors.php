<?php

return [

    'paths' => ['api/*', 'storage/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // Permite todos os métodos HTTP

    'allowed_origins' => ['*'], // Permite todas as origens
    // Ou, se quiser permitir origens específicas:
    // 'allowed_origins' => ['http://localhost:54743', 'http://localhost:60215'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Permite todos os cabeçalhos

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
