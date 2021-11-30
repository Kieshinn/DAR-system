<div class="box3">
    <div class="left">
        <h3>FORUM</h3>
    </div>
    <div class="main">
        <div class="fimg-wrapper">
            <?php


            
            $sql = "SELECT * FROM forum;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);





            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {




            ?>

                    <div class="fimg">
                    <a href="user.php?delforum=<?php echo $row['forumId']; ?>">
                                        <input type="submit" name="sdelete" value="DELETE">
                                    </a>
                        <p><span style="font-weight: bold;">Q : </span>

                        <?php echo $row['question']; ?>

                        </p>
                        <p>
                            <span>
                                <em>
                                    <span style="font-weight: bold;">A : </span>
                                    <?php echo $row['answer']; ?>

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
        <button id="myBtnf" class="buttonf">ADD FORUM</button>

        <!-- The Modal -->
        <div id="myModalf" class="modalf">

            <div class="modal-headerf">
                <div class="titlef"><span style="color: orange;">Forum</span> FQA:</div>
                <span class="closef">&times;</span>
            </div>


            <!-- Modal content -->
            <div class="modal-contentf">
                <form action="phpcode/forum.inc.php" method="POST">
                    <div class="modal-list-forum">

                        <div class="row">
                            <div class="col-25">
                                <label>Question:</label>
                            </div>
                            <div class="col-75">
                                <textarea name="question" placeholder="Write something..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Answer:</label>
                            </div>
                            <div class="col-75">
                                <textarea name="answer" placeholder="Write something..."></textarea>
                            </div>
                        </div>
                        <div class="row">

                            <input type="Submit" name="addforum" value="Post">
                        </div>
                    </div>
                </form>






            </div>

        </div>





    </div>

    <?php
    include 'includes/messages/forum-warning.php';
    ?>
</div>