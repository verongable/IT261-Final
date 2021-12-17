<footer>
<ul>
            <li>Copyright &copy; 
            <?php 
            $date_current = date ('Y');
            $date_created = 2021;
            if($date_current == $date_created) {
                echo $date_current;
            } else {
                echo ''.$date_created.' - '.$date_current.'';
            }
            ;?>
            </li>
            <li>All Rights Reserved</li>
            <li><a href="">Terms of Use</a></li>
            <li><a href="../">Web Design by Veronica</a></li>
            <li><a href="http://validator.w3.org/check?uri=referer"
            onclick="this.href='http://validator.w3.org/check?uri=' + 
            document.URL">HTML Validation</a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3">CSS Validation</a></li>
        </ul>
</footer>
</body>
</html>