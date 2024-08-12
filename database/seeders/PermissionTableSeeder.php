<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat izin untuk pengguna
        Permission::create(['name' => 'users.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.delete', 'guard_name' => 'api']);

        // Membuat izin untuk kegiatan
        Permission::create(['name' => 'kegiatan.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'kegiatan.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'kegiatan.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'kegiatan.delete', 'guard_name' => 'api']);

        // Membuat izin untuk dokumentasi
        Permission::create(['name' => 'dokumentasi.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'dokumentasi.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'dokumentasi.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'dokumentasi.delete', 'guard_name' => 'api']);

        Permission::create(['name' => 'pendaftaran.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'pendaftaran.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'pendaftaran.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'pendaftaran.delete', 'guard_name' => 'api']);

        // Menetapkan izin ke peran
        $roles = Role::all();

        foreach ($roles as $role) {
            // Cek peran dan tetapkan izin
            if ($role->name === 'Pembina') {
                $role->syncPermissions(['users.index','kegiatan.index','dokumentasi.index','pendaftaran.index']);
            } elseif ($role->name === 'Mentor') {
                $role->syncPermissions(['users.index','kegiatan.index','kegiatan.create','kegiatan.edit','kegiatan.delete','dokumentasi.index','dokumentasi.create','dokumentasi.edit','dokumentasi.delete','pendaftaran.index']);
            } elseif ($role->name === 'Alumni') {
                $role->syncPermissions(['users.index','kegiatan.index','dokumentasi.index','pendaftaran.index']);
            } elseif ($role->name === 'Bph') {
                $role->syncPermissions(['users.index','users.create','users.edit','users.delete','kegiatan.index','kegiatan.create','kegiatan.edit','kegiatan.delete','dokumentasi.index','dokumentasi.create','dokumentasi.edit','dokumentasi.delete','pendaftaran.index','pendaftaran.create','pendaftaran.edit','pendaftaran.delete']);
            } elseif ($role->name === 'Pengurus_kegiatan') {
                $role->syncPermissions(['users.index','kegiatan.index','kegiatan.create','kegiatan.edit','kegiatan.delete','pendaftaran.index']);
            } elseif ($role->name === 'Pengurus_dokumentasi') {
                $role->syncPermissions(['users.index','kegiatan.index','pendaftaran.index','dokumentasi.index','dokumentasi.create','dokumentasi.edit','dokumentasi.delete']);
            } elseif ($role->name === 'Pengurus_rohis') {
                $role->syncPermissions(['users.index','kegiatan.index','dokumentasi.index','pendaftaran.index']);
            }
        }
    }
}
