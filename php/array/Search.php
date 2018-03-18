<?php
namespace array\search;

class Search{

    public function findArrMiss($arr, $brr) {
        
        sort($arr);
        sort($brr);
        
        $max = 0;
        $min = 0;
        $bigarr = [];
        $simarr = [];
        if(count($arr) > count($brr)){
            $max = count($arr);
            $min = count($brr);
            $bigarr = $arr;
            $simarr = $brr;
        }
        else{
            $max = count($brr);
            $min = count($arr);
            $bigarr = $brr;
            $simarr = $arr;
        }
            
        $result = array();
           
        $index = 0;
        for ($x = 0; $x < $max; $x++) {
            if($index >= $min){
                $searchResult = in_array($bigarr[$x],$result);
                if($searchResult == false){
                    array_push($result,$bigarr[$x]);   
                }
            }
            else if($bigarr[$x] != $simarr[$index]){
                $index--;
                $searchResult = in_array($bigarr[$x],$result);
                if($searchResult == false){
                    array_push($result,$brr[$x]);   
                }
            }
            $index++;
        } 
        
        return array_values($result);
        
    }
}
?>