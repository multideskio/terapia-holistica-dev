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
            'id_user' => [
                'type'       => 'BIGINT',
                'unsigned'   => true
            ],
            'id_custumer' => [
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
                'default' => NULL
            ],
            'chakra_coronario_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_coronario_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_coronario_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],


            'chakra_frontal_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],
            'chakra_frontal_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_frontal_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_frontal_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],


            'chakra_laringeo_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],
            'chakra_laringeo_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_laringeo_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_laringeo_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],


            'chakra_cadiaco_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],
            'chakra_cadiaco_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_cadiaco_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_cadiaco_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],


            'chakra_plexo_solar_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],
            'chakra_plexo_solar_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_plexo_solar_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_plexo_solar_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],


            'chakra_sacro_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],
            'chakra_sacro_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_sacro_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_sacro_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],


            'chakra_basico_desequilibrio' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],
            'chakra_basico_percentual' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 0,
            ],
            'chakra_basico_atividade' => [
                'type' => 'ENUM',
                'constraint' => ['HIPO', 'HIPER'],
                'default' => NULL,
            ],
            'chakra_basico_afeta_orgao' => [
                'type' => 'ENUM',
                'constraint' => ['sim', 'não'],
                'default' => NULL,
            ],

            'tamanho_aura' => [
                'type' => 'INT',
                'contraint' => 3
            ],

            'tamanho_aura_comments' => [
                'type' => 'TEXT',
                'null' => true
            ],

            'tamanho_abertura' => [
                'type' => 'INT',
                'contraint' => 3
            ],

            'tamanho_abertura_comments' => [
                'type' => 'TEXT',
                'null' => true
            ],

            'cor_falta' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'cor_excesso' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'energia_saude' => [
                'type' => 'INT',
                'constraint' => '5',
                'null' => true,
            ],

            'energia_comments' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            "area_familiar" => [
                'type' => 'ENUM',
                'constraint' => ['pessimo', 'muito mal', 'mal', 'regular', 'bom', 'muito bom', 'excelente'],
                'default' => 'regular',
            ],

            "area_afetivo" => [
                'type' => 'ENUM',
                'constraint' => ['pessimo', 'muito mal', 'mal', 'regular', 'bom', 'muito bom', 'excelente'],
                'default' => 'regular',
            ],

            "area_profissional" => [
                'type' => 'ENUM',
                'constraint' => ['pessimo', 'muito mal', 'mal', 'regular', 'bom', 'muito bom', 'excelente'],
                'default' => 'regular',
            ],

            "area_financeiro" => [
                'type' => 'ENUM',
                'constraint' => ['pessimo', 'muito mal', 'mal', 'regular', 'bom', 'muito bom', 'excelente'],
                'default' => 'regular',
            ],

            "area_missao" => [
                'type' => 'ENUM',
                'constraint' => ['pessimo', 'muito mal', 'mal', 'regular', 'bom', 'muito bom', 'excelente'],
                'default' => 'regular',
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
        $this->forge->addForeignKey('id_user',    'users',    'id', 'NO ACTION', 'NO ACTION');
        $this->forge->addForeignKey('id_custumer', 'custumer', 'id', 'NO ACTION', 'NO ACTION');

        $this->forge->createTable('anamneses', true);
        $db->enableForeignKeyChecks();
    }

    public function down()
    {
        //
        $this->forge->dropTable('anamneses', true);
    }
}
