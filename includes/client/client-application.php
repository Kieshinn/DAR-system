<div class="box5">
    <div class="left">
        <h3>SUBMITTED APPLICATION</h3>
    </div>
    <div class="main">

        <div class="app-files">

            <form action="phpcode/search-app.php" method="POST">
                <div class="search">
                    <input type="text" name="appname" placeholder="search..." />
                    <input type="submit" name="appsearch" value="Search" />
                    <input type="submit" href="user.php" name="reset" value="Reset" />
                </div>
            </form>

            <?php
            if (isset($_GET["searchapp"])) {
                if ($_GET["searchapp"] == "emptyinput") {

                    $name = $_SESSION["useruid"];
                    

                    echo "<script> alert('Fill in all fields!');window.location='user.php#applicationapp'</script>";

                    $sql = "SELECT * FROM application WHERE name = '$name';";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);





                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




            ?>






                            <div class="app-file-list">
                            <h4><?php echo $row['subject']; ?></h4>
                                <ul>
                                 
                                    <?php 
                                        if($row['status'] != "") {
                                            echo "<li>" . $row['status']. "</li>";
                                        }
                                        else {
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
                        echo "<script> alert('No data found!');window.location='user.php#applicationapp'</script>";
                        echo "<div class='app-file-list'>
                        <h4>No data found!</h4>
                    </div>";
                    }
                } else if ($_GET["searchapp"] != "") {

                    $name = $_SESSION["useruid"];
                    $subject = $_GET["searchapp"];
                    $sql = "SELECT * FROM application WHERE subject LIKE '%$subject%' AND name = '$name'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {




                        ?>




                            <div class="app-file-list">
                                <h4><?php echo $row['subject']; ?></h4>
                                <ul>
                                    
                                    <?php 
                                        if($row['status'] != "") {
                                            echo "<li>" . $row['status']. "</li>";
                                        }
                                        else {
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
                        echo "<script> alert('No data found!');window.location='user.php#applicationapp'</script>";
                        echo "<div class='app-file-list'>
                        <h4>No data found!</h4>
                    </div>";
                    }
                } else if ($_GET["searchapp"] == "") {
                    echo "<script> alert('No data found!');window.location='user.php#applicationapp'</script>";
                    echo "<div class='app-file-list'>
                    <h4>No data found!</h4>
                </div>";
                }
            } else {

                $name = $_SESSION["useruid"];

                $sql = "SELECT * FROM application WHERE name = '$name';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);





                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {




                        ?>




                        <div class="app-file-list">
                        <h4><?php echo $row['subject']; ?></h4>
                            <ul>
                               
                                <?php 
                                        if($row['status'] != "") {
                                            echo "<li>" . $row['status']. "</li>";
                                        }
                                        else {
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
            }

            ?>






        </div>
    </div>
    <div class="right">
        <p>NOTE:</p>
        <br />
        <p>Before approving the applicant you need to ensure that you get the data already.</p>
    </div>
</div>