<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TimeLine extends Migration
{
    public function up()
    {
        //
        $db = db_connect();
        $db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'idUser' => [
                'type' => 'BIGINT',
                'unsigned' => true
            ],
            'idPatient' => [
                'type' => 'BIGINT',
                'unsigned' => true
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'description' => [
                'type' => 'TEXT'
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],
            'ico' => [
                'type' => 'VARCHAR',
                'constraint' => 60
            ],
            'observation' => [
                'type' => 'TEXT',
                'null' => true,
                'COMMENT' => 'Se necessário, suba o html template para essa coluna'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('idUser', 'users', 'id', 'NO ACTION', 'NO ACTION');
        $this->forge->addForeignKey('idPatient', 'patients', 'id', 'NO ACTION', 'NO ACTION');

        $this->forge->createTable('timeLines', true);
        $db->enableForeignKeyChecks();
    }

    public function down()
    {
        //
        $this->forge->dropTable('timeLines', true);

    }
}
