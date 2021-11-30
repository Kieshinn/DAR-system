

<nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#aservices">Add Services</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#application">Application</a></li>
            <li><a href="#forum">Forum</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="phpcode/logout.inc.php">Logout</a></li>

            <div class="rightname"><span>Hello there </span>
            <?php 
             echo "<span class='color'><em>" . $_SESSION["useruid"] . "</em></span>";
            ?></div>
        </ul>
        
        
    </nav>