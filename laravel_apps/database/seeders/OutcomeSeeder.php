<?php

namespace Database\Seeders;

use App\Model\Outcome;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class OutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outcome::truncate();
        $category = ["Salary", "Fee Project", "Other"];
        for ($i=1; $i <= 100 ; $i++) {
            $random_keys=array_rand($category,1);
            $data[] = [
                "category" => $category[$random_keys],
                "total" => 1000000,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ];
        }

        Outcome::insert($data);
    }
}
