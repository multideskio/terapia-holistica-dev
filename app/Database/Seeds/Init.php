<?php

namespace App\Database\Seeds;

use App\Models\PlansModel;
use App\Models\PlatformModel;
use App\Models\SubscriptionsModel;
use App\Models\UsersModel;
use CodeIgniter\Database\Seeder;

class Init extends Seeder
{
    public function run()
    {
        //
        $modelPlatform = new PlatformModel();
        $idPlatform = $modelPlatform->insert([
            'company' => 'Plataforma'
        ]);
        $modePlan = new PlansModel();
        $idPlan = $modePlan->insert([
            'platformId' => $idPlatform,
            'namePlan'   => 'Default',
            'idPlan'     => 123456,
            'permissionUser' => 3,
            'timeSubscription' => 0
        ]);
        $modelUser = new UsersModel();
        $idUser = $modelUser->insert([
            'platformId' => $idPlatform,
            'name' => 'Administrador',
            'email' => 'igrsysten@gmail.com',
            'password' => 123456,
            'phone' => '+55 (62) 9 8115-4120',
            'checked' => 1
        ]);
        $modelSubscription = new SubscriptionsModel();
        $idSubscription = $modelSubscription->insert([
            'idPlan' => 1,
            'idUser' => 1
        ]);
    }
}
