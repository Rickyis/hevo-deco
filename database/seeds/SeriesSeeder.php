<?php

use App\Eloquent\Series;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Series::truncate();
        $data = array(
            ['name' => 'F+ctory | 桌上的工廠', 'desc' => '', 'display' => 'Y', 'active' => 'Y', 'delete' => 'N', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP')],
        );
        Series::insert($data);
    }
}
