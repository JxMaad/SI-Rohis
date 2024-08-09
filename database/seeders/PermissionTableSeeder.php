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

        // Menetapkan izin ke peran
        $roles = Role::all();

        foreach ($roles as $role) {
            // Cek peran dan tetapkan izin
            if ($role->name === 'pembina') {
                $role->syncPermissions(['users.index','kegiatan.index','dokumentasi.index']);
            } elseif ($role->name === 'mentor') {
                $role->syncPermissions(['users.index','kegiatan.index','kegiatan.create','kegiatan.edit','dokumentasi.index','dokumentasi.create','dokumentasi.edit']);
            } elseif ($role->name === 'alumni') {
                $role->syncPermissions(['users.index','kegiatan.index','dokumentasi.index']);
            } elseif ($role->name === 'bph') {
                $role->syncPermissions(['users.index','users.create','users.edit','users.delete','kegiatan.index','kegiatan.create','kegiatan.edit','kegiatan.delete','dokumentasi.index','dokumentasi.create','dokumentasi.edit','dokumentasi.delete']);
            } elseif ($role->name === 'pengurus_kegiatan') {
                $role->syncPermissions(['users.index','kegiatan.index','kegiatan.create','kegiatan.edit','kegiatan.delete','dokumentasi.index','dokumentasi.create','dokumentasi.edit']);
            } elseif ($role->name === 'pengurus_rohis') {
                $role->syncPermissions(['users.index','kegiatan.index','dokumentasi.index']);
            }
        }
    }
}
