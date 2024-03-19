<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Customer::create([
            'display_name'=> 'Mr. Susantha Wijesinghe',
            'designation'=> 'Assistant General Manager Information Technology',
            'company'=> 'Kelani Valley Plantations PLC',
            'address'=>'400, Deans Road; Colombo 10',
        ]);

        Customer::create([
            'display_name'=> 'Mr. Madhura Suraweera',
            'designation'=> 'Senior Manager',
            'company'=> 'Talawakelle Tea Estates PLC',
            'address'=>'400, Deans Road; Colombo 10',
            'other'=>'Management Information Systems'
        ]);

        Customer::create([
            'display_name'=> 'Mr. Chaminda Tillakaratne',
            'designation'=> 'Manager-Information Technology',
            'company'=> 'Horana Plantations PLC',
            'address'=>'400, Deans Road; Colombo 10',
        ]);
    }
}
