<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
    
    $this->call('PackageTableSeeder');
    $this->command->info('Package table seeded!');
    
    $this->call('BookingDateTimesTableSeeder');
    $this->command->info('Booking DateTimes seeded!');
    
    $this->call('CustomerSeeder');
    $this->command->info('Customers seeded!');
    
    $this->call('AppointmentSeeder');
    $this->command->info('Appointments seeded!');
    
    $this->call('AdminSeeder');
    $this->command->info('Admins seeded!');
    
    Eloquent::unguard();
	}

}
