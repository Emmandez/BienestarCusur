<?php

use Illuminate\Database\Seeder;
use App\Models\Compilation;

class CompilationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Compilation =  factory(App\Models\Compilation::class)->make();
        $Compilation->save();
    }
}
