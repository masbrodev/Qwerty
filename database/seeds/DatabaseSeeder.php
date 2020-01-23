<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //RESTORAN
        DB::table('restoran')->insert([
            'nama_restoran' => 'Angkringan Jawa',
            'email_restoran' => 'j@gmail.com',
            'username_restoran' => 'jawa',
            'password_restoran' => md5('jawa'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // HIDANGAN
        DB::table('hidangan')->insert([
            'id_restoran' => '1',
            'nama_hidangan' => 'Rujak Cingur',
            'jenis_hidangan' => 'Makanan',
            'harga_hidangan' => 10000,
            'foto_hidangan' => 'cingur.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('hidangan')->insert([
            'id_restoran' => '1',
            'nama_hidangan' => 'Gurami',
            'jenis_hidangan' => 'Makanan',
            'harga_hidangan' => 25000,
            'foto_hidangan' => 'gurami.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //PEGAWAI
        DB::table('pegawai')->insert([
            'id_restoran' => '1',
            'nama_pegawai' => 'Jokowi',
            'email_pegawai' => 'jo@gmail.com',
            'username_pegawai' => 'jo',
            'password_pegawai' => md5('jo'),
            'jabatan_pegawai' => 'Admin',
            'foto_pegawai' => 'Jo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //PEMBELI
        DB::table('pembeli')->insert([
            'nama_pembeli' => 'Prabowo Subianto',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('pembeli')->insert([
            'nama_pembeli' => 'Luhut Panjaitan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('pembeli')->insert([
            'nama_pembeli' => 'Susi Puji Astuti',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // PEMESANAN
        DB::table('pemesanan')->insert([
            'id_restoran' => '1',
            'id_pembeli' => '1',
            'total_pemesanan' => 30000,
            'status_pemesanan' => 'Belum Dibayar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('pemesanan')->insert([
            'id_restoran' => '1',
            'id_pembeli' => '3',
            'total_pemesanan' => 45000,
            'status_pemesanan' => 'Belum Dibayar',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // DETIL PEMESANAN
        DB::table('pemesanan_detail')->insert([
            'id_pemesanan' => '1',
            'id_hidangan' => '1',
            'jumlah_hidangan' => '3',
            'total_harga_hidangan' => 30000,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('pemesanan_detail')->insert([
            'id_pemesanan' => '2',
            'id_hidangan' => '1',
            'jumlah_hidangan' => '1',
            'total_harga_hidangan' => 10000,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('pemesanan_detail')->insert([
            'id_pemesanan' => '2',
            'id_hidangan' => '2',
            'jumlah_hidangan' => '1',
            'total_harga_hidangan' => 25000,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
