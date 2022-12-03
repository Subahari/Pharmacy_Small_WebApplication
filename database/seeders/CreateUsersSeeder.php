<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Pharmacy',
               'email'=>'Pharmacy@gmail.com',
               'type'=>1,
               'address'=>'Jaffna',
               'Contactno'=>'0774562123',
               'DateOfBirth'=>'1997-09-29',
               'password'=> bcrypt('12345678'),
            ],
            
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'type'=>0,
               'address'=>'Kandy',
               'Contactno'=>'0774452123',
               'DateOfBirth'=>'1996-06-30',
               'password'=> bcrypt('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}