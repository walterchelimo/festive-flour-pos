<?php
                    include "../connect.php";
                    if (isset($_POST['submit'])) {
                      $Casual = $_POST['Casualid'];

                      $sql = "insert into attendance (Casualid) VALUES ('$Casual')";
                      $res = mysqli_query($conn, $sql);
                      if ($res) {
                        echo "<script class=alert alert-success>alert('Added Successfully')  </script>";
                      }
                    }
                    ?>
                    <?php
                  include "../connect.php";
                  $date= date("Y-m-d");
               
                $db2="Select DailyWage from endproduction where Date='$date'";
                $query2=mysqli_query($conn,$db2);
                $numR2= mysqli_num_rows($query2);
                if($numR2>0){
                    while ($row=mysqli_fetch_array($query2)){
                          $DailyWage=$row['DailyWage']; 
                      } 
                if($numR2>0){
                    $db10="Select Count(AttendanceId),TotalCumm,Date from attendance where Date='$date'";
                    $query10=mysqli_query($conn,$db10);
                    if($query10){
                        while($row = mysqli_fetch_array($query10)){

                            $Available=$row['Count(AttendanceId)'];
                            $TotalCumm=$row['TotalCumm'];
                            $Date=$row['Date'];
                            $PerPackager=$DailyWage/$Available;
                            $newTotalCumm=$TotalCumm+$PerPackager;

                            if ($Date=$date){
                                $db3="UPDATE attendance SET TotalCumm='$newTotalCumm' WHERE Date='$date' LIMIT $Available";
                                $result1=mysqli_query($conn,$db3);
                                if($result1){
                                    }
                                    else{
                                    echo "something went wrong";
                                        }
                                    }
                                   }

                            
                                    }
                        }}
                    ?>