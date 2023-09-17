<?php
$pageTitle = "Post-result";
include "view-header.php";
?> 
<h1>Post result</h1>  
<?php
if(isset($_POST['my-name'])){
  ?>
  <p> The value send is:</p>
<?php
  echo $_Post['my-name'];
}
else {
  ?>
<p>Nothing posted to the page</p>
<?php
}
include "view-footer.php";
?> 
