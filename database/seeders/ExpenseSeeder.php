<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $expense = new Expense();
            $expense->name = 'Expense  '.$i;
            $expense->category_id = $i;
            $expense->description = 'Expense  description ...'.$i;
            $expense->amount = 100+$i;
            $expense->save();
        }
    }
}
