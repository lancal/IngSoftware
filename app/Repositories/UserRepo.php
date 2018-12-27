<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 2018-12-27
 * Time: 03:06
 */

namespace App\Repositories;

use App\User;
use App\Role;
use App\Role_user;


class UserRepo implements UserInterface
{

    public function getUsers()
    {
        // TODO: Implement getUsers() method.
        return User::all();

    }

    public function getUsersBusy(){




    }

    public  function getRoleUser($id){

        $roleUsers = Role_user::where('User_id',$id)->get();

        $roles = collect([]);

        foreach ($roleUsers as $roleUser){

            $role = Role::find($roleUser->Role_id);
            $roles ->push($role);

        }

        return $roles;


    }

    public function getRoleExcept($id){

        $roleUsers = Role_user::where('User_id',$id) -> get();

        $roles = Role::all();

        foreach ($roleUsers as $roleUser){

            $r = $roleUser -> Rol_id -1 ;
            $roles -> pull($r);


        }

        return $roles;



    }

    public function getUserByID($id){

        return User::find($id);

    }

    public function setRolUser($request)
    {
        return Role_user::create($request);
    }

    public function setUser($request)
    {
        return User::create($request);
    }

    public function updateRolUsuario($request, $id)
    {
        return Role_user::create($request);
    }

    public function updateUser($request, $id)
    {
        return User::find($id)->update($request);
    }




}