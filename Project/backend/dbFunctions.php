<?

function connectToDatabase(){
    $connection = new PDO('mysql:host=localhost;dbname=afp2ndproject;','root','');
    $connection = exec("SET NAMES 'utf-8'");
    return $connection;
}

?>