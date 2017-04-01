<?php

include_once 'header.php';
include_once 'sidebar.php';
// we can start with heading
echo "<h1>" . $heading1 . "</h1>";
echo "<h2>" . $heading2 . "</h2>";
//content part starts from here
?>

<p>
    This is index content page. 
</p>
<p>
    We can keep our content here. 
</p>
<p>
    We can even place an image to look our content great. 
</p>
<p>
    <image src="../public/images/ss1.jpg" height="300" />
</p>

<p>We should leave some place below this image.</p>
<?php
include_once 'footer.php';
