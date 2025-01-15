<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKosTables extends Migration
{
    public function up()
    {
        // Tabel bukti
        $this->forge->addField([
            'id_bukti' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'nama_penghuni' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'foto_bukti' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_bukti', true);
        $this->forge->createTable('bukti');

        // Tabel kamar
        $this->forge->addField([
            'id_kamar' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kamar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type'    => 'BOOLEAN',
                'default' => false,
            ],
            'token' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'foto_kamar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'fasilitas' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'id_user' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_kamar', true);
        $this->forge->createTable('kamar');

        // Tabel sewa
        $this->forge->addField([
            'id_sewa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_kamar' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'tanggal_mulai' => [
                'type' => 'DATE',
            ],
            'tanggal_akhir' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id_sewa', true);
        $this->forge->addForeignKey('id_kamar', 'kamar', 'id_kamar', 'CASCADE', 'CASCADE');
        $this->forge->createTable('sewa');
    }

    public function down()
    {
        $this->forge->dropTable('sewa', true);
        $this->forge->dropTable('kamar', true);
        $this->forge->dropTable('bukti', true);
    }
}
