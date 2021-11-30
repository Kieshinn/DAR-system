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
                    <a href="user.php?delevent=<?php echo $row['eventId']; ?>">
                                        <input type="submit" name="sdelete" value="DELETE">
                                    </a>
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




        <!-- Trigger/Open The Modal -->
        <button id="myBtne" class="buttone">ADD EVENT</button>

        <!-- The Modal -->
        <div id="myModale" class="modale">

            <div class="modal-headere">
                <div class="titlee"><span style="color: orange;">ADD </span>EVENT:</div>
                <span class="closee">&times;</span>
            </div>


            <!-- Modal content -->
            <div class="modal-contente">
                <form action="phpcode/event.inc.php" method="POST">
                    <div class="modal-list-event">

                        <div class="row">
                            <div class="col-25">
                                <label>SUBJECT:</label>
                            </div>
                            <div class="col-75">
                                <textarea name="subject" placeholder="Write something..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>ANSWER:</label>
                            </div>
                            <div class="col-75">
                                <textarea name="content" placeholder="Write something..."></textarea>
                            </div>
                        </div>
                        <div class="row">

                            <input type="Submit" name="addevent" value="Post">
                        </div>
                    </div>
                </form>






            </div>

        </div>





    </div>

    <?php
    include 'includes/messages/event-warning.php';
    ?>
</div>