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
        $location = "SELECT idLocation FROM location";
        $commandLocation = Yii::app()->db->createCommand($location)->setFetchMode(PDO::FETCH_OBJ);
        $rowsLocation = $commandLocation->queryAll(); 
        //for loop to get all countries
        for($i = 0; $i < count($rowsLocation); $i++){
            //obtain ID of all locations
            $idLocation = $rowsLocation[$i]->idLocation;
            // obtain the math for every skill in actual locationID
            $sqlLocation = "SELECT employee.idLocation, SUM(levelExpertise) AS sumExpert, cast(avg(levelExpertise) as decimal (9,1)) AS avgExpert, SUM(levelInterest) AS sumIntr, cast(avg(levelInterest) as decimal (9,1)) AS avgIntr FROM employee_has_skill  INNER JOIN employee ON employee.idEmployee = employee_has_skill.idEmployee WHERE  idSkill = $idSkill and employee.idLocation = '$idLocation'";
            $commandMath = Yii::app()->db->createCommand($sqlLocation)->setFetchMode(PDO::FETCH_OBJ);
            $rowsMath = $commandMath->queryAll(); 
            //obtain results from DB
            $sumExpert = $rowsMath[0]->sumExpert;
            $locationTable = $rowsMath[0]->idLocation;
            $sumExpert = $rowsMath[0]->sumExpert;
            $avgExpert = $rowsMath[0]->avgExpert;
            $sumIntr = $rowsMath[0]->sumIntr;
            $avgIntr = $rowsMath[0]->avgIntr;

            //if there is any location with that skill 
            if($locationTable!=null){
                if(!$printed){ //if to print table head elements once 
        ?> 
        <h1> Grouped by location </h1>
        <table id="myTable">
            <tr>
                <th onclick='sortTable(0)'> Location </th>
                <th onclick='sortTable(1)'> Expertise avg </th>
                <th onclick='sortTable(2)'> Expertise sum </th>
                <th onclick='sortTable(3)'> Interest avg</th>
                <th onclick='sortTable(4)'> Interest sum </th>
            </tr>
            <?php $printed = true; } ?>
            <tr>
                <td> <?php echo $locationTable ?></td>
                <td> <?php echo $avgExpert ?></td>
                <td> <?php echo $sumExpert ?></td>
                <td> <?php echo $avgIntr ?></td>
                <td> <?php echo $sumIntr ?></td>
            </tr>
            <?php  } } ?>
        </table>
<!-- Script to change the order in the table -->
        <script>
            function sortTable(n) {
                var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                table = document.getElementById("myTable");
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