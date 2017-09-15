<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->truncate();

        $employee = new \App\Employee();

        $employee->create(array(
            'first_name'=>'Agung',
            'last_name'=>'Setiawan'
        ));

        $employee->create(array(
            'first_name'=>'Boni',
            'last_name'=>'Hartanto'
        ));

        $employee->create(array(
            'first_name'=>'Akhtar',
            'last_name'=>'Santoso'
        ));

    }
}
