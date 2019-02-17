<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // How many genres you need, defaulting to 10
        $count = (int)$this->command->ask('How many companies do you need ?', 10);

        $this->command->info("Creating {$count} companies");

        // Create the Users
        $users = factory(Ger\Empresa::class, $count)->create();

        $this->command->info('Companies Created!');
    }
}
