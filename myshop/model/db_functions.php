<?php
function getAll($sql, $value_list){
/* This function returns a result set */
        global $db;
        $statement = $db->prepare($sql);
        try {
                if (is_array($value_list))
                        $statement->execute($value_list);
                else
                        $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $results;
         } catch (PDOException $e){
                echo "Database error: ".$e->getMessage();
                exit();
        }
}


function getOne($sql, $value_list){
/* This function returns a single set */
        global $db;
        $statement = $db->prepare($sql);
        try {
                if (is_array($value_list))
                        $statement->execute($value_list);
                else
                        $statement->execute();
                $results = $statement->fetch(PDO::FETCH_ASSOC);
                return $results;
         } catch (PDOException $e){
                echo "Database error: ".$e->getMessage();
                exit();
        }
}


?>
