<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengarsipan extends Migration
{
    public function up()
    {
        // membuat tabel users
        $this->forge->addField([
            'id'                 => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'email'              => ['type' => 'VARCHAR', 'constraint' => 255],
            'password'           => ['type' => 'VARCHAR', 'constraint' => 255],
            'id_tingkatan'       => ['type' => 'INT'],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addUniqueKey('id_tingkatan');
        $this->forge->createTable('users', TRUE);

        // menambah data ke dalam tabel users 
        $dataUsers = ['email' => 'admin@gmail.com', 'password' => password_hash('admin', PASSWORD_BCRYPT), 'id_tingkatan' => 3];
        $this->db->table('users')->insert($dataUsers);

        // membuat tabel id tingkatan
        $this->forge->addField([
            'id_tingkatan'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'tingkatan'          => ['type' => 'VARCHAR', 'constraint' => 255,]
        ]);
        $this->forge->addKey('id_tingkatan', TRUE);
        $this->forge->addForeignKey('id_tingkatan', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('tb_tingkatan', true);

        // menambah data ke dalam tabel id_tingkatan 
        $dataTingkatan = ['tingkatan' => 'admin'];
        $this->db->table('tb_tingkatan')->insert($dataTingkatan);

        // membuat tabel tb_data
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint'     => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_file'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'tahun'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'berkas'           => ['type' => 'text'],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
            'deleted_at'       => ['type' => 'datetime', 'null' => true]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tb_data', true);
    }

    public function down()
    {
        $this->forge->dropTable('users', true);
        $this->forge->dropTable('tb_tingkatan', true);
        $this->forge->dropTable('tb_data', true);
    }
}
