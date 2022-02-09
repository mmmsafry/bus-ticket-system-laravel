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
        DB::unprepared("INSERT INTO `oauth_clients`(`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES (3, NULL, 'Laravel Personal Access Client', 'LoyYh56pnN6m4287KIo3L0aEmI6MMxETCkzXQthP', NULL, 'http://localhost', 1, 0, 0, '2022-02-09 07:11:53', '2022-02-09 07:11:53');
INSERT INTO `oauth_clients`(`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES (4, NULL, 'Laravel Password Grant Client', 'd2PToyicHl4rxpkjwYPOldpgZoxBRLEOYFOo1c8J', 'users', 'http://localhost', 0, 1, 0, '2022-02-09 07:11:53', '2022-02-09 07:11:53');
INSERT INTO `oauth_personal_access_clients`(`id`, `client_id`, `created_at`, `updated_at`) VALUES (2, 3, '2022-02-09 07:11:53', '2022-02-09 07:11:53');
;
");
    }
}
