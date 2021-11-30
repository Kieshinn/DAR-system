<div class="box5">
    <div class="left">
        <h3>APPLICATION</h3>
    </div>
    <div class="main">

        <div class="app-files">


            <div class="search">
                <form action="phpcode/search-app.php" method="POST">
                    <input type="text" name="appname" placeholder="search..." />
                    <input type="submit" name="appsearch" value="Search" />
                    <input type="submit" name="reset" value="Reset" />
                </form>

            </div>


            <?php
            if (isset($_GET["searchapp"])) {
                if ($_GET["searchapp"] == "emptyinput") {

                    echo "<script> alert('Fill in all fields!');window.location='user.php#application'</script>";
                
                    $sql = "SELECT * FROM application WHERE status = '';";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);





                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




            ?>






                            <div class="app-file-list">
                                <h4><?php echo $row['name']; ?></h4>
                                <ul>
                                    <li><?php echo $row['subject']; ?></li>

                                    
                                    <form action="phpcode/app-approve-reject.php" method="POST">
                                        <input type="text" name="appid" value="<?php echo $row['appId']; ?>" hidden/>
                                    <li><input class="input-approve" type="submit" name="approve" value="APPROVE" /></li>
                                    <li> <input class="input-reject" type="submit" name="reject" value="REJECT" /></li>
                                    </form>
                                    <p hidden><?php echo $row['file']; ?></p>
                                    <li><a href="user.php?downloadapp=<?php echo $row['appId']; ?>"> Download </a></li>
                                </ul>
                            </div>






                        <?php

                        }
                    } else {
                        echo "<script> alert('No data found!');window.location='user.php#application'</script>";
                        echo "<div class='app-file-list'>
                        <h4>No data found!</h4>
                    </div>";
                    }
                } else if ($_GET["searchapp"] != "") {

                    $subject = $_GET["searchapp"];
                    $sql = "SELECT * FROM application WHERE subject LIKE '%$subject%' AND status = ''";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




                        ?>




                            <div class="app-file-list">
                                <h4><?php echo $row['name']; ?></h4>
                                <ul>
                                    <li><?php echo $row['subject']; ?></li>
                                    <form action="phpcode/app-approve-reject.php" method="POST">
                                        <input type="text" name="appid" value="<?php echo $row['appId']; ?>" hidden/>
                                    <li><input class="input-approve" type="submit" name="approve" value="APPROVE" /></li>
                                    <li> <input class="input-reject" type="submit" name="reject" value="REJECT" /></li>
                                    </form>
                                    <p hidden><?php echo $row['file']; ?></p>
                                    <li><a href="user.php?downloadapp=<?php echo $row['appId']; ?>"> Download </a></li>
                                </ul>
                            </div>






                        <?php

                        }
                    } else {
                        echo "<script> alert('No data found!');window.location='user.php#application'</script>";
                        echo "<div class='app-file-list'>
                        <h4>No data found!</h4>
                    </div>";
                    }
                } else if ($_GET["searchapp"] == "") {
                    echo "<script> alert('No data found!');window.location='user.php#application'</script>";
                    echo "<div class='app-file-list'>
                    <h4>No data found!</h4>
                </div>";
                }
            } else {



                $sql = "SELECT * FROM application WHERE status = '';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);





                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {




                        ?>




                        <div class="app-file-list">
                            <h4><?php echo $row['name']; ?></h4>
                            <ul>
                                <li><?php echo $row['subject']; ?></li>
                                <form action="phpcode/app-approve-reject.php" method="POST">
                                        <input type="text" name="appid" value="<?php echo $row['appId']; ?>" hidden/>
                                    <li><input class="input-approve" type="submit" name="approve" value="APPROVE" /></li>
                                    <li> <input class="input-reject" type="submit" name="reject" value="REJECT" /></li>
                                    </form>
                                <p hidden><?php echo $row['file']; ?></p>
                                <li><a href="user.php?downloadapp=<?php echo $row['appId']; ?>"> Download </a></li>
                            </ul>
                        </div>






            <?php

                    }
                } else {
                    echo "<div class='app-file-list'>
                        <h4>No data found!</h4>
                    </div>";
                }
            }

            ?>
        





        </div>
    </div>
    <div class="right">
        <p>NOTE:</p>
        <br />
        <p>Before approving the applicant you need to ensure that you get the data already.</p>
            <br />
            
            <?php 
        include 'includes/messages/approve-reject-warning.php';
    ?>

        


























        <!-- Trigger/Open The Modal -->
        <button id="myBtna" class="right-app">View All</button>

        <!-- The Modal -->
        <div id="myModala" class="modala">

            <div class="modal-headera">
            <span class="closea">&times;</span>
                <div class="title"><span style="color: orange;">VIEW</span> ALL:</div>
                
            </div>

            <!-- Modal content -->
            <div class="modal-contenta">
                <?php



                $sql = "SELECT * FROM application;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);





                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {




                ?>














                        <div class="right-viewall">
                            <h4><?php echo $row['name']; ?></h4>
                            <ul>
                                <li><?php echo $row['subject']; ?></li>
                                <?php
                                if ($row['status'] != "") {
                                    echo "<li style='color='red''>" . $row['status'] . "</li>";
                                } else {
                                    echo "<li>CHECKING</li>";
                                }
                                ?>
                                <p hidden><?php echo $row['file']; ?></p>
                                <li><a href="user.php?downloadapp=<?php echo $row['appId']; ?>"> Download </a></li>
                            </ul>
                        </div>



                <?php

                    }
                } else {
                    echo "<div class='app-file-list'>
<h4>No data found!</h4>
</div>";
                }


                ?>



            </div>

        </div>



    </div>
</div>