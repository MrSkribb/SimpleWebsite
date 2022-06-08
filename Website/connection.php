<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('auphotos.db'); // Opens DB
      }
   }

   // Function that handles search term
   function getCreators($searchTerm = null) {
      $db = new MyDB();
      $array = [];
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Database found.";
      }
      if(!$searchTerm) { // If no search term, select all, else select all where name like the search term
         $sql ='SELECT * from creators;';
      } else {
         $sql ='SELECT * FROM creators WHERE name LIKE "'.$searchTerm.'"';
      }
      $ret = $db->query($sql); //Form SQL query 
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }
?>