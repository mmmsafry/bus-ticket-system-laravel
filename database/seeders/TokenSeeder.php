<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `oauth_clients`(`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES (2, NULL, 'Laravel Password Grant Client', 'oOd53OHeWd5MvYuvtE6bwy6QWM0r8fgEfwTcl8Ae', 'users', 'http://localhost', 0, 1, 0, '2022-02-09 01:24:24', '2022-02-09 01:24:24');
                              INSERT INTO `oauth_clients`(`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES (1, NULL, 'Laravel Personal Access Client', '5b7AkHxR1wQS4yvP0t0wpneqUbFWPjnFAKCkWQTG', NULL, 'http://localhost', 1, 0, 0, '2022-02-09 01:24:24', '2022-02-09 01:24:24');");
    }
}
