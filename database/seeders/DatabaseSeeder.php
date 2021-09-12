<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Connexion;
use App\Models\Device;
use App\Models\ExtendedUser;
use App\Models\Guest;
use App\Models\Meeting;
use App\Models\Parcel;
use App\Models\Presence;
use App\Models\Room;
use App\Models\Visit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ExtendedUser::factory(1)->create()->each(
            function (){
                Company::factory(1)->create();
                Connexion::factory(1)->create();
                Device::factory(1)->create();
                Visit::factory(16)->create();
                Parcel::factory(13)->create();
                Room::factory(1)->create();
                Guest::factory(15)->create();
                Meeting::factory(8)->create();
            }
        );
        // \App\Models\User::factory(10)->create();
    }
}
