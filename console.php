<?php
if($_COOKIE['confirm']!="Tru34dmin"){
    die('You are not admin');
}
class Cat
{
    public $name = '(guest cat)';
    function __construct($name)
    {
        $this->name = $name;
    }
    function __wakeup()
    {
        echo "<pre>";
        system("python3 cowsay.py 'Welcome back, $this->name'");
        echo "</pre>";
    }
}

if (!isset($_COOKIE['cat_session'])) {
    $cat = new Cat("cat_" . rand(0, 0xffff));
    setcookie('cat_session', base64_encode(serialize($cat)));
} else {
    $cat = unserialize(base64_decode($_COOKIE['cat_session']));
}
echo '<h1>Hello, '.$cat->name.'</h1>';
highlight_file('console.php')
?>
