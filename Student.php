<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Student Page</title>
</head>
<body style="background-color:#d6dbcc">
    <?php
    include 'dbconnect.php';
    session_start();
    $Sssn = $_SESSION['ssn'];
    $query10 = "SELECT s.gradorUgrad FROM student s WHERE s.ssn='$Sssn'";
    $result10 = mysqli_query($conn, $query10);
    $num10 = mysqli_num_rows($result10);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Current Graduation Status</font>   </h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Current Graduation Status</font></th>
        </tr>
        <?php
            if($num10 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result10)) {
                    if($row['gradorUgrad'] == 0){
                        $Status = "Under Graduate";
                    }else{
                        $Status = "Graduate";
                    }
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $Status; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query11 = "SELECT distinct c.courseCode, c.courseName, c.ects FROM enrollment e, course c WHERE e.sssn='$Sssn' and e.courseCode = c.courseCode";
    $result11 = mysqli_query($conn, $query11);
    $num11 = mysqli_num_rows($result11);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Courses Taken</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Course Code</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Course Name</font></th>
            <th><font face="Arial, Helvetica, sans-serif">ects</font></th>
        </tr>
        <?php
            if($num11 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result11)) {
                    $courseCode5 = $row['courseCode'];
                    $cName2 =$row['courseName'];
                    $ects2 = $row['ects'];
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode5; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $cName2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $ects2; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query12 = "SELECT distinct c.courseCode, c.courseName, c.ects, e.lettergrade FROM enrollment e, course c WHERE e.sssn='$Sssn' and e.courseCode = c.courseCode";
    $result12 = mysqli_query($conn, $query12);
    $num12 = mysqli_num_rows($result12);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Grades</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Course Code</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Course Name</font></th>
            <th><font face="Arial, Helvetica, sans-serif">ects</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Grade</font></th>
        </tr>
        <?php
            if($num12 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result12)) {
                    $courseCode6 = $row['courseCode'];
                    $cName3 =$row['courseName'];
                    $ects3 = $row['ects'];
                    $grade = $row['lettergrade'];
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode6; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $cName3; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $ects3; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $grade; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query13 = "SELECT eName, courseCode, sectionId, score FROM school.attends a where a.sssn = '$Sssn'";
    $result13 = mysqli_query($conn, $query13);
    $num13 = mysqli_num_rows($result13);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Exams</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Exam Name</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Course Code</font></th>
            <th><font face="Arial, Helvetica, sans-serif">sectionId</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Score</font></th>
        </tr>
        <?php
            if($num13 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result13)) {
                    $examName = $row['eName'];
                    $courseCode7 =$row['courseCode'];
                    $sectionId4 = $row['sectionId'];
                    $score = $row['score'];
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $examName; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode7; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $sectionId4; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $score; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query14 = "SELECT w.courseCode, w.dayy, w.hourr FROM enrollment e, weeklyschedule w WHERE e.sssn='$Sssn' and e.issn=w.issn";
    $result14 = mysqli_query($conn, $query14);
    $num14 = mysqli_num_rows($result14);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Weekly Schedule</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Course Code</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Day</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Hour</font></th>
        </tr>
        <?php
            if($num14 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result14)) {
                     $courseCode8=$row['courseCode'];
                     $day2 = $row['dayy'];
                     $hour3 = $row['hourr'];
                    
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode8; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $day2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $hour3; ?></font></td>

            </tr>

            <?php                
            }
            }else{
               echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query15 = "select I.iname from instructor I where I.ssn= (SELECT advisorSsn FROM student S WHERE S.ssn='$Sssn')";
    $result15 = mysqli_query($conn, $query15);
    $num15 = mysqli_num_rows($result15);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Advisor</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Advisor Name</font></th>
            
        </tr>
        <?php
            if($num15 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result15)) {
                     $advisorName=$row['iname'];
                     
                    
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $advisorName; ?></font></td>

            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query16 = "SELECT c.courseCode FROM student s, curriculacourses c WHERE s.ssn='$Sssn' and s.currCode = c.currCode";
    $result16 = mysqli_query($conn, $query16);
    $num16 = mysqli_num_rows($result16);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Courses supposed to be Taken</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Course Code</font></th>
            
        </tr>
        <?php
            if($num16 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result16)) {
                     $courseCode9=$row['courseCode'];
                     
                    
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode9; ?></font></td>

            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query17 = "select dName from curricula  where currCode =(SELECT currCode FROM school.student where ssn = '$Sssn');";
    $result17 = mysqli_query($conn, $query17);
    $num17 = mysqli_num_rows($result17);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Department</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Department</font></th>
            
        </tr>
        <?php
            if($num17 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result17)) {
                     $dName=$row['dName'];
                     
                    
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $dName; ?></font></td>

            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
    <?php
    include 'dbconnect.php';
    $query18 = "SELECT p.pName FROM gradstudent g, project_has_gradstudent p WHERE g.ssn='$Sssn' and g.ssn = p.Gradssn";
    $result18 = mysqli_query($conn, $query18);
    $num18 = mysqli_num_rows($result18);
    ?>
    <h4 align="center"><font face="Arial, Helvetica, sans-serif">Projects studying in</font></h4>
    <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">Porject Name</font></th>
            
        </tr>
        <?php
            if($num18 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result18)) {
                     $pName=$row['pName'];
                     
                    
                    
            ?>
            <tr align="center">
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $pName; ?></font></td>

            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            mysqli_close($conn);
            ?>
    </table>
</body>
<footer>
    <font face="Arial, Helvetica, sans-serif">
    <a style="color:#023047" href="./" >Return to main page</a></font>
</footer>
</html>
