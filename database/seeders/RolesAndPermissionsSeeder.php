<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role;
    use Spatie\Permission\PermissionRegistrar;
    use Illuminate\Database\Eloquent\Model;

    class RolesAndPermissionsSeeder extends Seeder
    {
        protected $toTruncate = ['permissions', 'roles'];
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            foreach($this->toTruncate as $table) {
                \DB::table($table)->truncate();
            }
            \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            // Reset cached roles and permissions
            app()[PermissionRegistrar::class]->forgetCachedPermissions();

            // List of all permissions
            $permissions = [
                'service',
                'chat',
            ];
//            dd($permissions);
            foreach ($permissions as $permission) {
                Permission::create([
                    'name' => $permission,
                    'guard_name' => 'web'
                ]);
            }

            // Default roles
            $roles = [
                'super_admin',
                'admin',
                'user',
            ];

            foreach ($roles as $role) {
                Role::create([
                    'name' => $role,
                    'guard_name' => 'web'
                ]);
            }

            $permissions = Permission::all();
            $roles = Role::findByName('super_admin');
            $roles->syncPermissions($permissions);
        }
    }
