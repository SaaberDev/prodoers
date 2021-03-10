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

            foreach ($permissions as $permission) {
                // 'Admin' guard permissions
//                Permission::create([
//                    'name' => $permission,
//                    'guard_name' => 'admin'
//                ]);

                // 'Web' guard permission
                Permission::create([
                    'name' => $permission,
                    'guard_name' => 'web'
                ]);
            }

            // Default roles
            $roles = [
                'super_admin',
                'admin',
                'project_manager',
                'designwala',
                'user'
            ];

            // Get array of roles except 'user' role
//            $rolesExceptUser = \Arr::except($roles, [4]);
            // Create 'admins' roles
//            foreach ($rolesExceptUser as $admin) {
//                Role::create([
//                    'name' => $admin,
//                    'guard_name' => 'admin'
//                ]);
//            }

            // Get array of roles except 'admin' role
//            $rolesExceptAdmin = \Arr::only($roles, [4]);
            // Create 'user' roles
            foreach ($roles as $role) {
                Role::create([
                    'name' => $role,
                    'guard_name' => 'web'
                ]);
            }

            // Assign all permission to super admin
//            $roles = Role::findByName('super_admin', 'admin');
            $roles = Role::findByName('super_admin');
            $roles->givePermissionTo($permissions);
        }
    }
