<!-- FOR 5TH SEM -->
<?php
    $host="localhost"; 
    $username="root"; 
    $pass="root";
    $db_name="COURSE_REGISTRATION"; 
    $conn = mysqli_connect("$host", "$username","$pass")or die("cannot connect"); 
    mysqli_select_db($conn,"$db_name")or die("cannot select DB");
    $c1=$_POST['electives1cn'];
    // $c2=$_POST['electives2cn'];
    // $c3=",";
    $a=array();
    array_push($a,$c1);
    $b=implode("  ",$a);
    print_r($b);
    if($_POST['sb']=='SUBMIT')
    {    
        $sql1="INSERT INTO COURSE_REGISTRATION.ELECTIVES_LIST(USN,SEM) SELECT USN,SEM FROM COURSE_REGISTRATION.STUDENT WHERE STUDENT_ID=(SELECT MAX(STUDENT_ID) FROM COURSE_REGISTRATION.STUDENT)";
        $sql3="INSERT INTO COURSE_REGISTRATION.ELECTIVES(COURSE_NAME) VALUES ('$b')";
        $sql4="INSERT INTO COURSE_REGISTRATION.REGISTERED_LIST(USN,SEM,COURSE_NAME) SELECT USN,SEM,COURSE_NAME FROM COURSE_REGISTRATION.ELECTIVES_LIST INNER JOIN COURSE_REGISTRATION.ELECTIVES ON COURSE_REGISTRATION.ELECTIVES_LIST.ID=COURSE_REGISTRATION.ELECTIVES.ID"; 
        $sql5="INSERT INTO COURSE_REGISTRATION.FINAL_LIST(USN,SEM,ELECTIVE_CN) SELECT USN,SEM,COURSE_NAME FROM COURSE_REGISTRATION.REGISTERED_LIST WHERE ID=(SELECT MAX(ID) FROM COURSE_REGISTRATION.REGISTERED_LIST)";
        $result=mysqli_query($conn,$sql1);    
        $result3=mysqli_query($conn,$sql3);
        $result4=mysqli_query($conn,$sql4);
        $result5=mysqli_query($conn,$sql5);
        header("location:welcome1.php");
    }   
    mysqli_close($conn);
?>

