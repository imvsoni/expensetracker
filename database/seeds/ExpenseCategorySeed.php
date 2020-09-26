<?php

use Illuminate\Database\Seeder;

class ExpenseCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Monthly Expenses'],
            ['id' => 2, 'name' => 'Miscellaneous'],
            ['id' => 3, 'name' => 'Utility Expenses'],
        ];

        foreach ($items as $item) {
            \App\ExpenseCategory::create($item);
        }
    }
}
