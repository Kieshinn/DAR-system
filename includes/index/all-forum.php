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





    </div>

    <?php
    ?>
</div>