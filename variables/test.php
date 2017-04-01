<?php

include_once 'header.php';
include_once 'sidebar.php';
//content part starts from here
?>

 <h1>Learn PHP 7 by Web Apps</h1>
                        <p>
                            
                            <?php

                                // it's a variable page
                            $variable = "This is our first variable";
                            
                            echo $variable;

                             ?> 
                        </p>
                        <p>
                            <code>
                                &lt;?php
                                <br>
                                $variable = "This is our first variable";
                            <br>
                            echo $variable;
                            </code>
                        </p>
<?php                  
include_once 'footer.php';
