<?php

require("dbc.php");
 function getUsersData($id)
 {
     $array=array();
     $q= mysqli_query("select * from 'users' where 'id'=".$id);
     while($r=Mysqli_fetch_assoc($q))
     {
         $array['id']=$row['id'];
         $array['username']=$row['username'];
     }
         return $array;
     }
    function getId($username)
    {
        $q= mysqli_query("select 'id' from 'users' where
        'id'=".$username);
        
        while($r=Mysqli_fetch_assoc($q))
        {
            return $row['id'];
        }
    }


?>