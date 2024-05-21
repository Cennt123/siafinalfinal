<?php

namespace Database\Seeders;

use App\Models\Offical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     Offical::factory(50)->create();
    // }

    public function run() : void
    {
        $officials = [
            [
                'position' => 'Capitan',
                'name' => 'Ejic Adtoon',
                'description' => 'Capitan of the organization',
                'email' => 'ejicaddtooon@gmail.com',
                'phone_number' => '09299288388',
                'image' => 'images/regie.jpg',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Junnel Cifra',
                'description' => 'Kagawad of the organization',
                'email' => 'junnelcifra@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/junnel1.jpg',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Daisy Balbin',
                'description' => 'Kagawad of the organization',
                'email' => 'daisybalbin@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/d.jpg',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Dolores Templado',
                'description' => 'Kagawad of the organization',
                'email' => 'dolorestemplado@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/dolores.jpg',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Getot Vito',
                'description' => 'Kagawad of the organization',
                'email' => 'getotvito@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/vit.jpg',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Nanan Estorba',
                'description' => 'Kagawad of the organization',
                'email' => 'nananestorba@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/fernan.jpg',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Inday Ejoc',
                'description' => 'Kagawad of the organization',
                'email' => 'indayejoc@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/c.png',
            ],
            [
                'position' => 'Kagawad',
                'name' => 'Virgie Booc',
                'description' => 'Kagawad of the organization',
                'email' => 'virgiebooc@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/c.png',
            ],
            [
                'position' => 'Secretary',
                'name' => 'Junnel Cifra',
                'description' => 'Kagawad of the organization',
                'email' => 'Junnelcifra@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/c.png',
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Alice Johnson',
                'description' => 'Treasurer of the organization',
                'email' => 'treasurer@example.com',
                'phone_number' => '456-789-0123',
                'image' => 'images/c.png',
            ],
            [
                'position' => 'SKChairman',
                'name' => 'Nethanel A Abellanosa',
                'description' => 'SK of the organization',
                'email' => 'nethanelabellanosa@gmail.com',
                'phone_number' => '09232388585',
                'image' => 'images/nath.jpg',
            ],

        ];


        foreach ($officials as $official) {
            DB::table('officals')->insert($official);
        }
    }
}
