<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateCustomer extends Migration
{
    public function up()
    {
        //
        $db = db_connect();
        $db->disableForeignKeyChecks();

        $fields = [
            'doc' => [
                'type' => 'varchar',
                'constraint' => 15,
                'after' => 'phone'
            ],
            'generous' => [
                'type' => 'varchar',
                'constraint' => 30,
                'after' => 'doc'
            ],
        ];

        $this->forge->addColumn('customers', $fields);

        $db->enableForeignKeyChecks();
    }

    public function down()
    {
        //
        $this->forge->dropColumn('customers', ['doc', 'generous']);
    }
}
