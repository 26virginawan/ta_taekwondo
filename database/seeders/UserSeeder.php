<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '2',
                'name' => 'Vista Tenassa Afauradeta',
                'username' => 'Vista',
                'id_register' => 'REG-11-08-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '3',
                'name' => 'Adiba Salva Maulina Putri',
                'username' => 'Adiba',
                'id_register' => 'REG-11-08-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '4',
                'name' => 'Angda Tenado Abrianzaveo',
                'username' => 'Angda',
                'id_register' => 'REG-11-08-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '5',
                'name' => 'Lintang Ayunda Kinaih Dewanti',
                'username' => 'Lintang',
                'id_register' => 'REG-28-07-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '6',
                'name' => 'Cinta Mercyllia Wibisono',
                'username' => 'Cinta',
                'id_register' => 'REG-02-09-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '7',
                'name' => 'Nazwa Alfaretta Galagita Rudian',
                'username' => 'Nazwa',
                'id_register' => 'REG-02-09-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '8',
                'name' => 'Adeel Panji Kurnia',
                'username' => 'Adeel',
                'id_register' => 'REG-28-01-2016',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '9',
                'name' => 'Mochammad Rizal Virgiawan',
                'username' => 'Mochammad',
                'id_register' => 'REG-13-01-2016',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '10',
                'name' => 'Nabila Arifiana',
                'username' => 'Nabila',
                'id_register' => 'REG-01-09-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '11',
                'name' => 'Chahayana Siswi Wahyudiarti',
                'username' => 'Chahayana',
                'id_register' => 'REG-04-06-2015',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '12',
                'name' => 'Zuhdi Athallah Zahron',
                'username' => 'Zuhdi',
                'id_register' => 'REG-13-01-2016',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '13',
                'name' => 'Valentino Wilson Abimanyu Jaya',
                'username' => 'Valentino',
                'id_register' => 'REG-23-07-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '14',
                'name' => 'Jasmine Aqila Chassavani',
                'username' => 'Jasmine',
                'id_register' => 'REG-19-10-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '15',
                'name' => 'Rahyana Ekwin Salsabilla',
                'username' => 'Rahyana',
                'id_register' => 'REG-02-11-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '16',
                'name' => 'Ilham Wahyu Tri Jaya',
                'username' => 'Ilham',
                'id_register' => 'REG-11-03-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '17',
                'name' => 'Aura Anastasya Putrina Andika',
                'username' => 'Aura',
                'id_register' => 'REG-02-11-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '18',
                'name' => 'Zakia Putri Aiko',
                'username' => 'Zakia',
                'id_register' => 'REG-19-08-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '19',
                'name' => 'Natasya Dewi Sekar Sari',
                'username' => 'Natasya',
                'id_register' => 'REG-10-05-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '20',
                'name' => 'Ika Lukytasari',
                'username' => 'Ika',
                'id_register' => 'REG-09-09-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '21',
                'name' => 'Kaisar Boss Brilliant',
                'username' => 'Kaisar',
                'id_register' => 'REG-17-07-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '22',
                'name' => 'Rayza Putra Pratam',
                'username' => 'Rayza',
                'id_register' => 'REG-11-08-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '23',
                'name' => 'Niquita Tiara Nikgel Permata',
                'username' => 'Niquita',
                'id_register' => 'REG-10-05-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '24',
                'name' => 'Salasika Rasyada Dahayu WInnasis',
                'username' => 'Salasika',
                'id_register' => 'REG-30-08-2018',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '25',
                'name' => 'Erika Putri Seissyana',
                'username' => 'Erika',
                'id_register' => 'REG-11-10-2019',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '26',
                'name' => 'Muchamad Nizar Syah',
                'username' => 'Muchamad',
                'id_register' => 'REG-24-09-2019',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '27',
                'name' => 'Vasya Nevia Aris Sandy',
                'username' => 'Vasya',
                'id_register' => 'REG-09-08-2021',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '28',
                'name' => 'Keyla Zeifara Queenesha',
                'username' => 'Keyla',
                'id_register' => 'REG-24-09-2019',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '29',
                'name' => 'Bintang Carencia Agatha',
                'username' => 'Bintang',
                'id_register' => 'REG-19-04-2020',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '30',
                'name' => 'Devina Revalia Putri Anggraini',
                'username' => 'Devina',
                'id_register' => 'REG-20-08-2021',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '31',
                'name' => 'izzy Nouvaldino Yulian Putra',
                'username' => 'Izzy',
                'id_register' => 'REG-20-08-2021',
                'email' => null,
                'password' => bcrypt('bumiaji'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
        $user->assignRole('atlet');
    }
}