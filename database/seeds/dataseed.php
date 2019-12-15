<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\user;

class dataseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleA=new Role();
        $roleA->name="admin";
        $roleA->display_name="Administrator";
        $roleA->save();

        $roleO=new Role();
        $roleO->name="operator";
        $roleO->display_name="Operator";
        $roleO->save();

        $roleP=new Role();
        $roleP->name="peminjam";
        $roleP->display_name="Peminjam";
        $roleP->save();

        $userA=new User();
        $userA->name="Administrator";
        $userA->email="admin@surat.com";
        $userA->password=bcrypt('1234');
        $userA->save();
        $userA->attachRole('admin');

    }
}
