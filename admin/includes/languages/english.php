<?php 

    function lang ($phrase)
    {
        static $lang = [
            
            /*=============================
                   Dashboard Words
            ============START=============*/    
            'ADMIN'           => ' Administrator', //'Administrator'
            'HOME'            => ' Home ', //'Home'
            //============END=============
        ];

        return $lang[$phrase];
    }