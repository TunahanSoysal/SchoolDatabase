<html>
    <head>
        <title>Instructor Page</title>
    </head>
    <body style="background-color:#d6dbcc">
        <?php  
  
        include 'dbconnect.php';
        session_start();
        $issn = $_SESSION['ssn'];
        $query = "SELECT distinct c.courseCode, c.courseName, c.ects FROM course c, sectionn s WHERE s.issn='$issn' and s.courseCode = c.courseCode";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
        ?>
        
        <h4 align=center><font face="Arial, Helvetica, sans-serif">Courses Teaching</font></h4>
        <table border="2" cellspacing="2" cellpadding="2" align="center">
            <tr style="background-color:#D6EEEE">
                <th><font face="Arial, Helvetica, sans-serif">Course Code</font></th>
                <th><font face="Arial, Helvetica, sans-serif">Course Name</font></th>
                <th><font face="Arial, Helvetica, sans-serif">ects</font></th>
            </tr>
            <?php
            if($num > 0){
       
                 while ($row  = mysqli_fetch_assoc($result)) {
                    $courseCode = $row['courseCode'];
                    $cName =$row['courseName'];
                    $ects = $row['ects'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $cName; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $ects; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
        </table>
        
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query2 = "SELECT * FROM weeklyschedule WHERE issn='$issn'";
        $result2 = mysqli_query($conn, $query2);
        $num2 = mysqli_num_rows($result2);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif">Weekly Schedule</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
            <tr style="background-color:#D6EEEE">
                <th><font face="Arial, Helvetica, sans-serif">issn</font></th>
                <th><font face="Arial, Helvetica, sans-serif">courseCode</font></th>
                <th><font face="Arial, Helvetica, sans-serif">sectionId</font></th>
                <th><font face="Arial, Helvetica, sans-serif">year</font></th>
                <th><font face="Arial, Helvetica, sans-serif">semester</font></th>
                <th><font face="Arial, Helvetica, sans-serif">day</font></th>
                <th><font face="Arial, Helvetica, sans-serif">hour</font></th>
            </tr>
            <?php
            if($num2 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result2)) {
                    $issn2 = $row['issn'];
                    $courseCode2 =$row['courseCode'];
                    $sectionId = $row['sectionId'];
                    $year = $row['yearr'];
                    $semester = $row['semester'];
                    $day = $row['dayy'];
                    $hour = $row['hourr'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $issn2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $sectionId; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $year; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $semester; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $day; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $hour; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
            
            
        </table>
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query3 = "SELECT e.courseCode, e.sectionId, s.studentname FROM enrollment e, student s WHERE e.issn='$issn' and e.sssn = s.ssn ORDER BY e.courseCode,e.sectionId";
        $result3 = mysqli_query($conn, $query3);
        $num3 = mysqli_num_rows($result3);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Student of Each Course</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
                <th><font face="Arial, Helvetica, sans-serif">courseCode</font></th>
                <th><font face="Arial, Helvetica, sans-serif">sectionId</font></th>
                <th><font face="Arial, Helvetica, sans-serif">studentName</font></th>
        </tr>
        <?php
            if($num3 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result3)) {
                    
                    $courseCode3 =$row['courseCode'];
                    $sectionId2 = $row['sectionId'];
                    $studentName = $row['studentname'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode3; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $sectionId2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $studentName; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
        </table>
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query4 = "SELECT * FROM project WHERE leadSsn='$issn'";
        $result4 = mysqli_query($conn, $query4);
        $num4 = mysqli_num_rows($result4);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Projects Leading</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">leadSsn</font></th>
            <th><font face="Arial, Helvetica, sans-serif">pName</font></th>
            <th><font face="Arial, Helvetica, sans-serif">subject</font></th>
            <th><font face="Arial, Helvetica, sans-serif">budget</font></th>
            <th><font face="Arial, Helvetica, sans-serif">startDate</font></th>
            <th><font face="Arial, Helvetica, sans-serif">enddate</font></th>
            <th><font face="Arial, Helvetica, sans-serif">controllingDName</font></th>
        </tr>
        <?php
            if($num4 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result4)) {
                    
                    $leadSsn =$row['leadSsn'];
                    $pname = $row['pName'];
                    $subject = $row['subject'];
                    $budget =$row['budget'];
                    $startDate = $row['startDate'];
                    $endDate = $row['enddate'];
                    $controllingDname = $row['controllingDName'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $leadSsn; ?></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $pname; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $subject; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $budget; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $startDate; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $endDate; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $controllingDname; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
        </table>
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query5 = "SELECT * FROM project_has_instructor WHERE issn='$issn'";
        $result5 = mysqli_query($conn, $query5);
        $num5 = mysqli_num_rows($result5);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Projects Working On:</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">leadSsn</font></th>
            <th><font face="Arial, Helvetica, sans-serif">pName</font></th>
            <th><font face="Arial, Helvetica, sans-serif">issn</font></th>
            <th><font face="Arial, Helvetica, sans-serif">Working Hour</font></th>
        </tr>
        <?php
            if($num5 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result5)) {
                    
                    $leadSsn =$row['leadSsn'];
                    $pname = $row['pName'];
                    $issn3 = $row['issn'];
                    $workingHour =$row['workinghour'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $leadSsn; ?></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $pname; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $issn3; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $workingHour; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
        </table>
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query6 = "SELECT * FROM student WHERE advisorSsn='$issn'";
        $result6 = mysqli_query($conn, $query6);
        $num6 = mysqli_num_rows($result6);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Advising Students</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
            <th><font face="Arial, Helvetica, sans-serif">ssn</font></th>
            <th><font face="Arial, Helvetica, sans-serif">gradorUgrad</font></th>
            <th><font face="Arial, Helvetica, sans-serif">advisorSsn</font></th>
            <th><font face="Arial, Helvetica, sans-serif">currCode</font></th>
            <th><font face="Arial, Helvetica, sans-serif">student ID</font></th>
            <th><font face="Arial, Helvetica, sans-serif">student Name</font></th>
        </tr>
        <?php
            if($num6 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result6)) {
                    
                    $ssn =$row['ssn'];
                    $gradOrUgrad = $row['gradorUgrad'];
                    $advisorSsn = $row['advisorSsn'];
                    $currCode =$row['currCode'];
                    $studentId = $row['studentid'];
                    $studentName =$row['studentname'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $ssn; ?></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $gradOrUgrad; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $advisorSsn; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $currCode; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $studentId; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $studentName; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
        </table>
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query7 = "SELECT * FROM gradstudent WHERE supervisorSsn='$issn'";
        $result7 = mysqli_query($conn, $query7);
        $num7 = mysqli_num_rows($result7);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Graduate Students Supervising</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
                <th><font face="Arial, Helvetica, sans-serif">ssn</font></th>
                <th><font face="Arial, Helvetica, sans-serif">supervisor Ssn</font></th>
        </tr>
        <?php
            if($num7 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result7)) {
                    
                    $ssn2 =$row['ssn'];
                    $supervisorSsn = $row['supervisorSsn'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $ssn2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $supervisorSsn; ?></font></td>
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
  
        //$issn = $_SESSION['ssn'];
        $query8 = "select T.dayy, T.hourr
from timeslot T
where (T.dayy, T.hourr) not in (SELECT W.dayy, W.hourr
                           		from enrollment E NATURAL JOIN weeklyschedule W
                               	where 							E.issn in (SELECT E2.issn
											from enrollment E2
											where E2.issn = E.issn and E2.issn= '$issn'))";
        $result8 = mysqli_query($conn, $query8);
        $num8 = mysqli_num_rows($result8);
        ?>
        
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Free Hours</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
                <th><font face="Arial, Helvetica, sans-serif">Day</font></th>
                <th><font face="Arial, Helvetica, sans-serif">Hour</font></th>
        </tr>
        <?php
            if($num8 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result8)) {
                    
                    $day =$row['dayy'];
                    $hour2 = $row['hourr'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $day; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $hour2; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center>0 result</p>";
            }
            mysqli_close($conn);
            ?>
        </table>
        <?php  
  
        include 'dbconnect.php';
  
        //$issn = $_SESSION['ssn'];
        $query9 = "SELECT * FROM school.exam where issn = '$issn'";
        $result9 = mysqli_query($conn, $query9);
        $num9 = mysqli_num_rows($result9);
        ?>
        <h4 align="center"><font face="Arial, Helvetica, sans-serif"> Exams</h4>
        <table border = "2" cellspacing = "2" cellpadding = "2" align="center">
        <tr style="background-color:#D6EEEE">
                <th><font face="Arial, Helvetica, sans-serif">exam Name</font></th>
                <th><font face="Arial, Helvetica, sans-serif">exam Date</font></th>
                <th><font face="Arial, Helvetica, sans-serif">issn</font></th>
                <th><font face="Arial, Helvetica, sans-serif">course Code</font></th>
                <th><font face="Arial, Helvetica, sans-serif">yearr</font></th>
                <th><font face="Arial, Helvetica, sans-serif">semester</font></th>
                <th><font face="Arial, Helvetica, sans-serif">section ID</font></th>
        </tr>
        <?php
            if($num9 > 0){
       
                 while ($row  = mysqli_fetch_assoc($result9)) {
                    
                    $eName =$row['eName'];
                    $edate = $row['edate'];
                    $issn4 =$row['issn'];
                    $courseCode4 = $row['courseCode'];
                    $year2 =$row['yearr'];
                    $semester2 = $row['semester'];
                    $sectionId3 =$row['sectionId'];
            ?>
            <tr>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $eName; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $edate; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $issn4; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $courseCode4; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $year2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $semester2; ?></font></td>
                <td><font face="Arial, Helvetica, sans-serif"><?php echo $sectionId3; ?></font></td>
            </tr>

            <?php                
            }
            }else{
                echo "<p align=center><font face='Arial, Helvetica, sans-serif'>0 result</p>";
            }
            
            ?>
        </table>
    <div style = "text-align:center;margin: auto" align = "center">
        <h3 align="center" style="color: #023047"><font face="Arial, Helvetica, sans-serif">Add Exam</font></h3>
               
               <form action = "" method = "post" style="margin:auto">
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">Exam Name.:</font></label><input type = "text" name = "eName" /><br /><br />
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">Exam Date...:</font></label><input type = "text" name = "eDate" /><br/><br />
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">issn..............:</font></label><input type = "text" name = "issn" /><br /><br />
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">Course Code:</font></label><input type = "text" name = "CourseCode" /><br/><br />
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">year..............:</font></label><input type = "text" name = "year" /><br /><br />
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">semester......:</font></label><input type = "text" name = "semester" /><br/><br />
                  <label style="color:#023047"><font face="Arial, Helvetica, sans-serif">section ID.....:</font></label><input type = "text" name = "sectionId" /><br /><br />
                  <input style="color: #023047;background-color:#e9d8a6 " type = "submit" value = " Add Exam " name = "submit1"/><br />
               </form>
    </div>
        <?php
        include 'dbconnect.php';
        $result19=null;
        
        if(isset($_POST["submit1"])){
        $eName2 = filter_input(INPUT_POST, 'eName');  
        $edate2 = filter_input(INPUT_POST, 'eDate');
        $issn5 = filter_input(INPUT_POST, 'issn');  
        $courseCode10 = filter_input(INPUT_POST, 'CourseCode');
        $year3 = filter_input(INPUT_POST, 'year');  
        $semester3 = filter_input(INPUT_POST, 'semester');
        $sectionId5 = filter_input(INPUT_POST, 'sectionId');
        $query19 = "INSERT INTO exam (eName, edate, issn, courseCode, yearr, semester, sectionId) VALUES ('$eName2', '$edate2', '$issn5', '$courseCode10', '$year3', '$semester3', '$sectionId5')";
        if(mysqli_query($conn, $query19)){
            echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
        mysqli_close($conn);
        unset($_POST["submit1"]);
        
        
        
       /*while ($result19){
            if ($num19>0) {
                
                echo "New record created successfully";
            }else if(isset($_POST["submit1"])) {
                echo "Error: " . $query19 . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);*/
        ?>
        
    </body>
    <footer>
    <font face="Arial, Helvetica, sans-serif">
    <a style="color:#023047" href="./" >Return to main page</a></font>
    </footer>
</html>

