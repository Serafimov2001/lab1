<?php
$log = $_POST["login"];
$pass = $_POST["password"];
$arrUser = array(array('login' => 'Pro228', 'password' => 'qwerty', 'name' => 'Николай', 'surname' => 'Колесников', 'role' => 'admin'),
                array('login' => 'Gera', 'password' => 'qazwsx', 'name' => 'Александр', 'surname' => 'Александров', 'role' => 'client'),
                array('login' => 'Green', 'password' => 'zxcvbn', 'name' => 'Владислав', 'surname' => 'Супрунов', 'role' => 'manager'));
if (!(($log == $arrUser[0]['login']) && $pass == $arrUser[0]['password']) && !(($log == $arrUser[1]['login'])&& $pass == $arrUser[1]['password']) && !(($log == $arrUser[2]['login']) && $pass == $arrUser[2]['password'])){
    header('location: style.html');
}
class user {
    public $login;
    public $password;
    public $name;
    public $surname;
    public $role;

    function __construct($login,$password,$name,$surname,$role)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
    }
}
class Admin extends user {

    public function introduce (){
        echo "Здравствуйте, " . $this->name. "  " . $this->surname. "  ". ", Поздравляем вы админ";
    }
}
class Manager extends user {

    public function introduce() {
        echo "Здравствуйте, " . $this->name. "  " . $this->surname. "  ". ", Вы менеджер";
    }
}
class Client extends user {

    public function introduce (){
        echo "Здравствуйте, " . $this->name. "  " . $this->surname. "  ". ", Приятного вам дня";
    }
}
if ($log == "Pro228"){
    $admin = new Admin($arrUser[0]["name"], $arrUser[0]["surname"], $arrUser[0]["role"], $arrUser[0]["login"], $arrUser[0]["password"]);
    $admin->introduce();
}
elseif ($log == "Gera"){
    $client = new Client($arrUser[1]["name"], $arrUser[1]["surname"], $arrUser[1]["role"], $arrUser[1]["login"], $arrUser[1]["password"]);
    $client->introduce();
}
elseif ($log == "Green"){
    $manager = new Manager($arrUser[2]["name"], $arrUser[2]["surname"], $arrUser[2]["role"], $arrUser[2]["login"], $arrUser[2]["password"]);
    $manager->introduce();
    }
?>
</html>