<?php

namespace App\Helpers;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function getPermission($id)
    {
         $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
            return $rolePermissions;
    }    

    public static function getAddedName($id){
        $user = User::findOrFail($id);
        return $user->name;
    }

    public static function humanDate($datetime){
        return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->diffForHumans();
    }

    public static function formatDate($datetime){
        $dt = new Carbon();

        return $dt->toDayDateTimeString($datetime);

    }

}