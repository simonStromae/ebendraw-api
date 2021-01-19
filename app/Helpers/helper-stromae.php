<?php

use App\News;
use App\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

if(!function_exists('generatePassword')){
    /**
     * Generer un mot de passe aléatoirement
     * @param int $lenght
     * @return string
     */
    function generatePassword(int $lenght = 8):string {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $count = mb_strlen($chars);

        for ($i=0, $result=""; $i < $lenght; $i++){
            $index = rand(0, $count-1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }
}

if(!function_exists('user_name')){
    /**
     * Obtenir les informations d'un utilisateur
     * @param string|null $value
     * @return string
     */
    function user_name(string $value=null):string{
        switch ($value){
            case 'role':
                $user_name = Auth::user()->role->name;
                break;

            case 'username':
                $user_name = Auth::user()->username;
                break;

            case 'email':
                $user_name = Auth::user()->email;
                break;

            default:
                $user_name = Auth::user()->name;

        }
        return $user_name;
    }
}

if(!function_exists('show_avatar')){
    /**
     * Obtenir le chemin vers l'avatar de l'utilisateur
     * @param string|null $avatar
     * @return string
     */
//    function show_avatar(string $avatar=null):string{
//        if (is_null($avatar))
//            $avatar = Auth::user()->avatar;
//
//        return !empty ($avatar) ? asset('storage').'/avatars/'.$avatar : "/back-office/dist/img/avatar4.png";
//    }



    function show_avatar(string $avatar=null):string
    {


        if (is_null($avatar)){

            $avatar = Auth::user()->avatar;

            if(strlen($avatar) > 255 ){
                return Auth()->user()->avatar ;
            }
        }

        if(strlen($avatar) > 255 ){
            return $avatar ;
        }

        return !empty ($avatar) ? asset('storage').'/avatars/'.$avatar : "/back-office/dist/img/avatar4.png";
    }
}

if(!function_exists('show_image')){
    /**
     * Obtenir le chemin d'une image a afficher
     * @param string $file_path
     * @param string $imagename
     * @return string
     */
    function show_image(string $file_path, string $imagename):string{

        return asset('storage').'/'.$file_path.'/'.$imagename;
    }

}

if(!function_exists('count_news')){
    /**
     * Compter le nombre d'article
     * @return string
     */
    function count_news():string{
        return addZero(News::count());
    }
}

if(!function_exists('count_users')){
    /**
     * Compter le nombre d'utilisateur
     * @return string
     */
    function count_users():string{
        return addZero(User::count());
    }
}

if(!function_exists('addZero')){
    /**
     * @param string $number
     * @return string
     */
    function addZero(string $number):string{
        return strlen($number) === 1 ? "0".$number : $number;
    }
}

if(!function_exists('saveSvg')){
    function saveSvg($svg_file, string $svg_name){
        $filename = implode('-', explode(' ', $svg_name))."-".uniqid(date('now_')).".".$svg_file->getClientOriginalExtension();;

        $svg_file->storeAs('public/svg', $filename);

        return $filename;
    }
}


if(!function_exists('show_svg')){
    function show_svg(string $svg):string{
        return asset('storage').'/svg/'.$svg;
    }
}

if(!function_exists('my_illustrations')){
    function my_illustrations():int{
        return Auth::user()->illustrations->count();
    }
}
