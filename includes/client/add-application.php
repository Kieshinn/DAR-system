

 
<div class="box1">

            <div class="left">
                <h3>APPLICATION</h3>
            </div>
            <div class="main">
            <form action="phpcode/upload-client.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="name" value="<?php echo $_SESSION["useruid"];?>" hidden required />
                <h4>Subject:</h4>
                <input type="text" name="subject" required />
                <h4>Email:</h4>
                <input type="email" name="email" required />
                <h4>File attachment:</h4>
                <input type="file" name="cfile" multiple="multiple" required />
                <h4>Your Message:</h4>
                <textarea name="message" placeholder="write something...."></textarea>
                <input type="submit" name="addapp" value="Submit"/>
            </form>
            </div>
            <div class="right">
                <p>READ THIS:</p>
                <br />
                <p>Guide for adding a attachment file. Create a folder with the file name of "your name", put all your
                    files into the folder that you created and compress it into .zip or .rar</p>
            </div>
        </div>