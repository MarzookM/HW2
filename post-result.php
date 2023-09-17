<?php
$pageTitle = "Post-result";
include "view-header.php";
?> 
<h1>Post result</h1>  
<?php
echo getDisplay();
include "view-footer.php";

function getDisplay(){
  if(isset($_POST['my-name'])){
    return "<p>The value send is:</p>". $_Post['my-name'];
  } else {
    return "<p>Nothing posted to the page.</p>";
  }
}
?>
