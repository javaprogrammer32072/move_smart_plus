<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Credentials
    |--------------------------------------------------------------------------
    |
    | Single, hardcoded admin account. The plain password is never stored
    | anywhere — only a bcrypt hash, kept in the environment (.env, which is
    | gitignored). The Settings screen can override this hash by writing to
    | the admin_settings table without touching code or .env.
    |
    */

    'email' => env('ADMIN_EMAIL'),

    'password_hash' => env('ADMIN_PASSWORD_HASH'),

    // How long an admin login session stays valid.
    'session_lifetime_days' => 7,

];
