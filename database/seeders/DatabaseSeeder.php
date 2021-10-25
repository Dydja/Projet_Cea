<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\Gerant;
use Faker\Provider\bg_BG\PhoneNumber;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create(['name' => Role::ADMIN, 'slug' => Str::slug(Role::ADMIN)]);
        Role::create(['name' => Role::CUSTOMER, 'slug' => Str::slug(Role::CUSTOMER)]);
        Role::create(['name' => Role::MANAGER , 'slug' =>Str::slug(Role::MANAGER)]);

        /**
         * FOR GERANT
         */

        Gerant::create(['name'=>'Mr.Jean Coulibaly','phone'=>'05-67-78-89-00','fonctions'=>Gerant::COMMERCIALE,'slug'=>Str::slug(Gerant::COMMERCIALE)]);
        Gerant::create(['name'=>'Mme.Koffi Bernard','phone'=>'05-67-78-90-87','fonctions'=>Gerant::COMPTABLE,'slug'=>Str::slug(Gerant::COMPTABLE)]);
        Gerant::create(['name'=>'Mr.Patrick jean','phone'=>'45-67-78-89-02','fonctions'=>Gerant::ASSISTANTE,'slug'=>Str::slug(Gerant::ASSISTANTE)]);
        Gerant::create(['name'=>'Mme.Doumbia Mariam','phone'=>'65-67-78-90-45','fonctions'=>Gerant::GESTIONNAIRE,'slug'=>Str::slug(Gerant::GESTIONNAIRE)]);

    }
}
