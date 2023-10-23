<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);

        Permission::create(['name' => 'tambah-siswa']);
        Permission::create(['name' => 'edit-siswa']);
        Permission::create(['name' => 'hapus-siswa']);
        Permission::create(['name' => 'lihat-siswa']);

        Permission::create(['name' => 'tambah-guru']);
        Permission::create(['name' => 'edit-guru']);
        Permission::create(['name' => 'hapus-guru']);
        Permission::create(['name' => 'lihat-guru']);

        Permission::create(['name' => 'tambah-jurusan']);
        Permission::create(['name' => 'edit-jurusan']);
        Permission::create(['name' => 'hapus-jurusan']);
        Permission::create(['name' => 'lihat-jurusan']);

        Permission::create(['name' => 'tambah-dudi']);
        Permission::create(['name' => 'edit-dudi']);
        Permission::create(['name' => 'hapus-dudi']);
        Permission::create(['name' => 'lihat-dudi']);

        Permission::create(['name' => 'tambah-pkl']);
        Permission::create(['name' => 'edit-pkl']);
        Permission::create(['name' => 'hapus-pkl']);
        Permission::create(['name' => 'lihat-pkl']);

        Permission::create(['name' => 'tambah-biayapkl']);
        Permission::create(['name' => 'edit-biayapkl']);
        Permission::create(['name' => 'hapus-biayapkl']);
        Permission::create(['name' => 'lihat-biayapkl']);

        Permission::create(['name' => 'tambah-laporanpkl']);
        Permission::create(['name' => 'edit-laporanpkl']);
        Permission::create(['name' => 'hapus-laporanpkl']);
        Permission::create(['name' => 'lihat-laporanpkl']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'guru']);
        Role::create(['name' => 'siswa']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin ->givePermissionTo('tambah-user');
        $roleAdmin ->givePermissionTo('edit-user');
        $roleAdmin ->givePermissionTo('hapus-user');
        $roleAdmin ->givePermissionTo('lihat-user');
        $roleAdmin ->givePermissionTo('tambah-siswa');
        $roleAdmin ->givePermissionTo('edit-siswa');
        $roleAdmin ->givePermissionTo('hapus-siswa');
        $roleAdmin ->givePermissionTo('lihat-siswa');
        $roleAdmin ->givePermissionTo('tambah-guru');
        $roleAdmin ->givePermissionTo('edit-guru');
        $roleAdmin ->givePermissionTo('hapus-guru');
        $roleAdmin ->givePermissionTo('lihat-guru');
        $roleAdmin ->givePermissionTo('tambah-jurusan');
        $roleAdmin ->givePermissionTo('edit-jurusan');
        $roleAdmin ->givePermissionTo('hapus-jurusan');
        $roleAdmin ->givePermissionTo('lihat-jurusan');
        $roleAdmin ->givePermissionTo('tambah-dudi');
        $roleAdmin ->givePermissionTo('edit-dudi');
        $roleAdmin ->givePermissionTo('hapus-dudi');
        $roleAdmin ->givePermissionTo('lihat-dudi');
        $roleAdmin ->givePermissionTo('tambah-pkl');
        $roleAdmin ->givePermissionTo('edit-pkl');
        $roleAdmin ->givePermissionTo('hapus-pkl');
        $roleAdmin ->givePermissionTo('lihat-pkl');

        $roleStaff = Role::findByName('staff');
        $roleStaff ->givePermissionTo('tambah-biayapkl');
        $roleStaff ->givePermissionTo('edit-biayapkl');
        $roleStaff ->givePermissionTo('hapus-biayapkl');
        $roleStaff ->givePermissionTo('lihat-biayapkl');

        $roleStaff = Role::findByName('guru');
        $roleStaff ->givePermissionTo('edit-laporanpkl');
        $roleStaff ->givePermissionTo('hapus-laporanpkl');
        $roleStaff ->givePermissionTo('lihat-laporanpkl');

        $roleStaff = Role::findByName('siswa');
        $roleStaff ->givePermissionTo('tambah-laporanpkl');
        $roleStaff ->givePermissionTo('lihat-laporanpkl');
    }
}
