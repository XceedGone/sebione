<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        //Creating administrator to the database
        //Run command: php artisan db:seed
        
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $company_1 = Company::factory()->create([
            'name' => 'San Miguel',
            'email' => 'sanmig@sanmig.com',
            'website' => 'sanmig.com',
        ]);

        $company_2 = Company::factory()->create([
            'name' => 'Jollibee Corp',
            'email' => 'jollibee@jolli.com',
            'website' => 'jollibee.com',
        ]);

        Employee::factory(6)->create([
            'company' => $company_1->id
        ]);

        Employee::factory(6)->create([
            'company' => $company_2->id
        ]);
    }
}
