<?php

namespace App\UseCases;

class SearchInArrayUC {

    public function execute( $collection, $any){

        $found = false;

        for($i=0; $i < sizeof($collection); $i++){ 
            if($collection[$i] == $any){
                $found = true;
            }          
        }

        return $found;
    }
}