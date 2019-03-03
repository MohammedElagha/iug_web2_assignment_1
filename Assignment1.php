
<?php

    #Assignment1

    #1
    $stdGrads = array("Web 1" => 91,"Web 2" => 95,"Data Structure" => 93,"DBMS" => 94,"Mobile" => 91,) ;




    #2
    echo "*Arab country presidents<br/><br/>";
    $presidents = array("Jordan" => "Abdallah" , "Iraq" => "saddam" , "KSA" => "Salman"
                        , "Palestine" => "Abo-Mazen","Egypt" => "el-sisi","Algeria" => "bouteflika");
    
    foreach ($presidents as $key => $value){  
        echo "$key  |   $value <br/>";
    }
    echo "<br/><hr/>";
?>



<?php
    #3
    echo "<br/>*IUG Faculties <br/><br/>";
    $IUG = array(
            "IT" => array("Dean" => "Dr.rebhy","highest" => 98.2,"lowest" => 62.4),
            "ENG" => array("Dean" => "Dr.Ali","highest" => 95.7,"lowest" => 60.9),
            "Commerce" => array("Dean" => "Dr.Ahmed","highest" => 97.3,"lowest" => 67.6)
    );

   /*foreach($IUG as $key1 => $value1){
        echo "Faculty : " . $key1 . "<br/>";
        foreach($value1 as $key2 => $value2){
            echo $key2 . " : " . $value2 . "<br/>";
        }
        echo "<br/>"; 
    }*/
?>



<table border='1'>
    <tr>
        <th>Faculty</th>
        <th>Dean</th>
        <th>Highest Average</th>
        <th>lowest Average</th>           
    </tr>
        <?php
        foreach($IUG as $key => $value){
            echo "<tr>";
            echo "<td>".$key."</td>";
            foreach($value as $key2 => $value2){
                echo "<td>".$value2."</td>";
            }
            echo "</tr>";
        }?>
</table>
<br/><hr/>


<?php
    #4
    echo "<br/>*Students Grads<br/><br/>";
    $stdGrads = array("Web 1" => 91,"Web 2" => 95,"Data Structure" => 93,"DBMS" => 94,"Mobile" => 91,) ;
?>

<table border="1">
    <tbody>
        <?php
            $total = 0;
            foreach ($stdGrads as $key => $value){
                $total += $value;
                echo "<tr><th>".$key."</th>";
                echo "<td>".$value."</td></tr>";
            }
        ?>       
    </tbody>
    <tfoot>
        <tr>
            <th style="color:red;">Average</th>
            <th style="color:red;"><?php echo $total/count($stdGrads); ?></th>
        </tr>
    </tfoot>
</table>
<br/><hr/>
 
    