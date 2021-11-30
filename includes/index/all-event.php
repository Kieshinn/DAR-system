<div class="box6">
    <div class="left">
        <h3>EVENT</h3>
    </div>
    <div class="main">
        <div class="fimg-wrapper">
            <?php

            include_once 'phpcode/dbh.php';

            $sql = "SELECT * FROM event;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);





            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {




            ?>

                    <div class="fimg">
                    
                        <p>

                        <?php echo $row['subject']; ?>

                        </p>
                        <p>
                            <span>
                                <em>
                                    
                                    <?php echo $row['content']; ?>

                                </em>
                            </span>
                        </p>
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
    <div class="right">



    </div>

    <?php
    include 'includes/messages/event-warning.php';
    ?>
</div>