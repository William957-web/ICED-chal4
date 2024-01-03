<?php
if($_COOKIE['cookie']!="co0000oooooool"){
    die('login first!');
}
if(isset($_POST['url'])){
    if(substr($_POST['url'], 0, 4)!='http'){
        die('BAD HACKER!!!');
    }
    system('curl '.$_POST['url'].'Y29uZmlybT1UcnUzNGRtaW4=');
}
?>
<br><h1>🔗Report</h1></br>
<br>admin would visit the link</br>
<br>fetch(url+'SECRET COOKIE HIDDEN')</br>
<a href='console.php'>Console</a>
<form action="survey.php" method="post">
<input type="text" name="url" id="url" title="url" placeholder="url" />
<button type="submit">Submit</button>
</form>
