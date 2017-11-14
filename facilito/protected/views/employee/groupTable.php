<!DOCTYPE html>
<html>
    <head>
        <style>
            th {
                cursor: pointer;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2
            }
        </style>
    </head>
    <body>
     <?php
$printed = false;
$sql = "SELECT * FROM group_has_employee AS ghs
INNER JOIN groupp
ON groupp.idGroup = ghs.idGroup
WHERE idEmployee = $idEmployee";
    
$command = Yii::app()->db->createCommand($sql)->setFetchMode(PDO::FETCH_OBJ);
$rows = $command->queryAll(); 
//if-else to know if this employee has any skill
if(count($rows)<0){ //not having any skill
    echo "Seems you have any group in your profile, add some";
}else{ //has 1 or more skills
    //for loop to get all skills added to this employee
    for($i = 0; $i < count($rows); $i++){
        //data obtained from database query
        $idGroup = $rows[$i]->idGroup;
        $nameGroup = $rows[$i]->nameGroup;
        $isAdmin = $rows[$i]->isAdmin;
        if(!$printed){ //if to print table head elements once 
        ?>
         <table id="groupTable">
            <tr>
                <th onclick='sortTable(0)'> Group name </th>
                <th onclick='sortTable(1)'> Role </th>
            </tr>
            <?php $printed = true; } ?>
            <tr>
                <td width=50%> <?php echo $nameGroup ?></td>
                <td> <?php if($isAdmin==0) echo "Admin";
        else if($isAdmin==1) echo "Viewer";
            ?>
            </tr>
            <?php  } } ?>
        </table>
        
<!-- Script to change the order in the table -->
        <script>
            function sortTable(n) {
                var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                table = document.getElementById("groupTable");
                switching = true;
                //Set the sorting direction to ascending:
                dir = "asc"; 
                /*Make a loop that will continue until no switching has been done:*/
                while (switching) {
                    //start by saying: no switching is done:
                    switching = false;
                    rows = table.getElementsByTagName("TR");
                    /*Loop through all table rows (except the first, which contains table headers):*/
                    for (i = 1; i < (rows.length - 1); i++) {
                        //start by saying there should be no switching:
                        shouldSwitch = false;
                        /*Get the two elements you want to compare, one from current row and one from the next:*/
                        x = rows[i].getElementsByTagName("TD")[n];
                        y = rows[i + 1].getElementsByTagName("TD")[n];
                        /*check if the two rows should switch place, based on the direction, asc or desc:*/
                        if (dir == "asc") {
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                //if so, mark as a switch and break the loop:
                                shouldSwitch= true;
                                break;
                            }
                        } else if (dir == "desc") {
                            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                //if so, mark as a switch and break the loop:
                                shouldSwitch= true;
                                break;
                            }
                        }
                    }
                    if (shouldSwitch) {
                        /*If a switch has been marked, make the switch and mark that a switch has been done:*/
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                        //Each time a switch is done, increase this count by 1:
                        switchcount ++;      
                    } else {
                        /*If no switching has been done AND the direction is "asc", set the direction to "desc" and run the while loop again.*/
                        if (switchcount == 0 && dir == "asc") {
                            dir = "desc";
                            switching = true;
                        }
                    }
                }
            }
        </script>
    </body>
</html>