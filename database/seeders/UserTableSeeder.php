<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->document_type = 'T.I';
        $user->document_number = '1106769976';
        $user->name = 'Stive';
        $user->lastname = 'Os';
        $user->phone_number = '3222958021';
        $user->email = 'stiven@gmail.com';
        $user->password = Hash::make('12345678');
        $user->role = 'administrador';
        $user->save();
       
        $user = new User();
        $user->document_type = 'T.I';
        $user->document_number = '1106766978';
        $user->name = 'John';
        $user->lastname = 'Doe';
        $user->phone_number = '3222958021';
        $user->email = 'john@gmail.com';
        $user->password = Hash::make('12345678');
        $user->role = 'aprendiz';
        $user->save();
        
        $user = new User();
        $user->document_type = 'T.I';
        $user->document_number = '1106769978';
        $user->name = 'Tatiana';
        $user->lastname = 'Doe';
        $user->phone_number = '3222958021';
        $user->email = 'tatiana@gmail.com';
        $user->password = Hash::make('12345678');
        $user->role = 'instructor';
        $user->save();
        
        $user = new User();
        $user->document_type = 'T.I';
        $user->document_number = '1106769989';
        $user->name = 'Andres';
        $user->lastname = 'Meza';
        $user->phone_number = '3222958021';
        $user->email = 'andres@gmail.com';
        $user->password = Hash::make('12345678');
        $user->role = 'tecnico';
        $user->save();
    }
}
