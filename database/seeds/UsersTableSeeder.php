<?php

use App\Http\Models\Backend\Permission;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();

        $user = User::create([
            'name'     => 'Halil Coşdu',
            'email'    => 'halilcosdu@gmail.com',
            'password' => 'harab31983',
        ]);

        Permission::truncate();

        $systemPermission  = Permission::create([
            'label' => 'SİSTEM YÖNETİMİ',
        ]);
        $userPermission    = Permission::create([
            'label' => 'KULLANICI YÖNETİMİ',
        ]);
        $backendPermission = Permission::create([
            'label' => 'PANEL YÖNETİMİ',
        ]);

        $casePermission = Permission::create([
            'label' => 'DAVA YÖNETİMİ',
        ]);

        $clientPermission = Permission::create([
            'label' => 'MÜVEKKİL YÖNETİMİ',
        ]);

        $attorneyPermission = Permission::create([
            'label' => 'AVUKAT YÖNETİMİ',
        ]);

        DB::table('permission_user')->truncate();

        $user->assignPermission($systemPermission);
        $user->assignPermission($userPermission);
        $user->assignPermission($backendPermission);
        $user->assignPermission($casePermission);
        $user->assignPermission($clientPermission);
        $user->assignPermission($attorneyPermission);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


    }
}
