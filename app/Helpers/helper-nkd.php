<?php



if(!function_exists('getRoleByName')){
    /**
     * get a role model by name gave
     * @param $name
     */
    function getRoleByName(string $name) {
        return
            \App\Role::whereName($name)
                ->get();
    }
}
