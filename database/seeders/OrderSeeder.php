<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    protected $toTruncate = ['orders'];
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

        Order::factory()
            ->times(60)
            ->has(Payment::factory(), 'payments')
            ->has(Invoice::factory(), 'invoices')
            ->create();
    }
}
