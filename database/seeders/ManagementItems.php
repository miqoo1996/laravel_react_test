<?php

namespace Database\Seeders;

use App\Models\ManagementItem;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ManagementItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ManagementItem::count() == 0) {
            ManagementItem::insert([
                ['name' => 'Item 1', 'status' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Item 2', 'status' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Item 3', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Item 4', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ]);
        }
    }
}
