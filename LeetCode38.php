<?php
    class Solution {

        /**
         * @param Integer $n
         * @return String
         */
        function countAndSay($n) {
            $i=1;
            $str="1";
            while($i!=$n){
                $quantity=1;
                $current="";
                $record=$str[0];
                $len=strlen($str);
                $str=substr($str,1);
                while($str!=""){
                    if($record!=$str[0]&&$len>1){
                        $current.=$quantity;
                        $current.=$record;
                        $record=$str[0];
                        $quantity=1;
                        $str=substr($str,1);
                    }
                    else{
                        $quantity++;
                        $str=substr($str,1);
                    }
                }
                $current.=$quantity;
                $current.=$record;
                $str=$current;
                $i++;
            }
            return $str;
        }
    }
?>