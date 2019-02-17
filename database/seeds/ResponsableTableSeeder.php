<?php

use Illuminate\Database\Seeder;

class ResponsableTableSeeder extends Seeder
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
        $count = (int)$this->command->ask('How many headteams do you need ?', 10);

        $this->command->info("Creating {$count}.");

        // Create the Genre
        $genres = factory(Ger\Responsable::class, $count)->create();

        $this->command->info('Headteams Created!');
    }
}
