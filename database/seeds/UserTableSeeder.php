<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
  public function run()
  {
    $role_employee = Role::where('name', 'employee')->first();
    $role_manager  = Role::where('name', 'manager')->first();

    $employee = new User();
    $employee->name = 'Employee Ilyas';
    $employee->email = 'ilyasdemirtas@hotmail.com';
    $employee->password = bcrypt('123123');
    $employee->save();
    $employee->roles()->attach($role_employee);

    $manager = new User();
    $manager->name = 'Manager Ilyas';
    $manager->email = 'ilyasdemirtas@hotmail.com.tr';
    $manager->password = bcrypt('123123');
    $manager->save();
    $manager->roles()->attach($role_manager);
  }
}
