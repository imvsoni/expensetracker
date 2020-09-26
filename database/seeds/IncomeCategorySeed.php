<?php

use Illuminate\Database\Seeder;

class IncomeCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Salary'],
            ['id' => 2, 'name' => 'Rent'],
            ['id' => 3, 'name' => 'Investment Intereset'],
        ];

        foreach ($items as $item) {
            \App\IncomeCategory::create($item);
        }
    }
}
