
<?php

$movies=array(
    array("filme1","filme2","filme3","filme4","filme5"),
    array("filme1","filme2","filme3","filme4","filme5"),
    array("filme1","filme2","filme3","filme4","filme5"),
    array("filme1","filme2","filme3","filme4","filme5"),
    array("filme1","filme2","filme3","filme4","filme5")
);
for ($row=0; $row <5 ; $row++) { 
    echo "<p> <b> Les films de Realisateur $row </b>";
    echo "<ul>";
    for($col=0;$col<5;$col++) {
        echo "<li>" .$movies[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>








    
</body>
</html>