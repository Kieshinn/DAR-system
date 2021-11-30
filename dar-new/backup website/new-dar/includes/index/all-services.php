<?php include_once 'phpcode/dbh.php';
?>



<div class="box2">
    <div class="left">
        <h3>SERVICES</h3>
    </div>
    <div class="main">
















        <!-- The Modal -->
        <div class="modal">








            <div class="modal-header">
                <div class="title">DEPARMENT OF AGRARIAN REFORM <span style="color: orange;">SERVICES</span>
                </div>

            </div>











            <!-- Modal content -->
            <div class="modal-content">


                <form action="phpcode/search-services-index.php" method="POST">
                    <div class="search">
                        <input type="text" name="servicename" placeholder="search..." />
                        <input type="submit" name="servicesearch" value="Search" />
                        <input type="submit" name="reset" value="Reset" />
                    </div>
                </form>




                <?php
                if (isset($_GET["searchservice"])) {
                    if ($_GET["searchservice"] == "emptyinput") {

                        
                        echo "<script>
                        alert('Fill in all fields!');
                      </script>";
                      $sql = "SELECT * FROM services;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);





                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




                ?>




                            <div class="modal-list">
                                <h6><?php echo $row['subject']; ?></h6>
                                <p hidden><?php echo $row['file']; ?></p>
                                
                            </div>






                <?php

                        }
                    } else {
                        echo "<div class='modal-list'>
                        <h6>No data found!</h6>
                    </div>";
                    }
                      
                
                
                    }
                    else if ($_GET["searchservice"] != "") {

                      $subject = $_GET["searchservice"];
                      $sql = "SELECT * FROM services WHERE subject LIKE '%$subject%'";
                      $result = mysqli_query($conn, $sql);
                      $resultCheck = mysqli_num_rows($result);
                      
                      if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




                ?>




                            <div class="modal-list">
                                <h6><?php echo $row['subject']; ?></h6>
                                <p hidden><?php echo $row['file']; ?></p>
                                
                            </div>






                <?php

                        }
                    } else {
                        echo "<div class='modal-list'>
                        <h6>No data found!</h6>
                    </div>";
                    }
                
                
                    }
                    else if ($_GET["searchservice"] == "") {

                        echo "<div class='modal-list'>
                        <h6>No data found!</h6>
                    </div>";
                  
                  
                      }
                }
                    else {



                    $sql = "SELECT * FROM services;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);





                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




                ?>




                            <div class="modal-list">
                                <h6><?php echo $row['subject']; ?></h6>
                                <p hidden><?php echo $row['file']; ?></p>
                                
                            </div>






                <?php

                        }
                    } else {
                        echo "<div class='modal-list'>
                        <h6>No data found!</h6>
                    </div>";
                    }
                }

                ?>





            </div>






        </div>




    </div>
    <div class="right">
        <p>2018 - Present</p>
    </div>
</div>