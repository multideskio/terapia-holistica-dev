<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anamneses extends Migration
{
    public function up()
    {
        //
        $db = db_connect();
        $db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'idUser' => [
                'type'       => 'BIGINT',
                'unsigned'   => true
            ],
            'idPatient' => [
                'type'       => 'BIGINT',
                'unsigned'   => true
            ],

            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'campo_mental_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'campo_mental_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'campo_emocional_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'campo_emocional_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'campo_espiritual_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'campo_espiritual_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'campo_fisico_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'campo_fisico_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],

            'chakra_coronario_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_coronario_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_coronario_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_coronario_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],

            'chakra_frontal_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_frontal_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_frontal_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_frontal_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],


            'chakra_laringeo_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_laringeo_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_laringeo_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_laringeo_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_cadiaco_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_cadiaco_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_cadiaco_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_cadiaco_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],


            'chakra_plexo_solar_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_plexo_solar_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_plexo_solar_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_plexo_solar_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],


            'chakra_sacro_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_sacro_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_sacro_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_sacro_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],


            'chakra_basico_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],
            'chakra_basico_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_basico_atividade' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'chakra_basico_afeta_glandula' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => 'não',
            ],



            'campo_aurico' => [
                'type' => 'ENUM',
                'constraint' => ['aberto', 'média', 'fechado'],
                'default' => NULL,
            ],

            'campo_aurico_comentarios' => [
                'type' => 'TEXT',
                'null' => true
            ],

            'campo_aurico2' => [
                'type' => 'ENUM',
                'constraint' => ['expandido', 'média', 'encolhido'],
                'default' => NULL,
            ],

            'campo_aurico2_comentarios' => [
                'type' => 'TEXT',
                'null' => true
            ],

            'cor_falta' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],

            'cor_excesso' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],

            'energia_saude' => [
                'type' => 'INT',
                'constraint' => '5',
                'null' => true,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('idUser',    'users',    'id', 'NO ACTION', 'NO ACTION');
        $this->forge->addForeignKey('idPatient', 'patients', 'id', 'NO ACTION', 'NO ACTION');

        $this->forge->createTable('anamneses', true);
        $db->enableForeignKeyChecks();
    }

    public function down()
    {
        //
        $this->forge->dropTable('anamneses', true);
    }
}
