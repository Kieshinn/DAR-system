<div class="box1">

    <div class="left">
        <h3>ADD SERVICES</h3>
    </div>
    <div class="main">
        <form action="phpcode/upload-services.php" method="POST" enctype="multipart/form-data">
            <h4>Name:</h4>
            <input type="text" name="name" value="DEPARMENT OF AGRARIAN REFORM" placeholder="DEPARMENT OF AGRARIAN REFORM" />
            <h4>Subject:</h4>
            <input type="text" name="subject" required />
            <h4>File attachment:</h4>
            <input type="file" name="sfile" required />
            <input type="submit" name="addservice" value="Submit" />
        </form>
    </div>
    <div class="right">
        <p>NOTE:</p>
        <br />
        <p>Only pdf, and docx extension file in attaching a file.</p>
    </div>
</div>