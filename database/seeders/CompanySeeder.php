<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = new Company();
        $company->title = "ООО Рога и копыта";
        $company->inn = "1234567890";
        $company->price_type_id = 1; // Розница
        $company->save();

        
    }
}
