<?php

class userData {
    public $name;
    public $surname;
    public $gender;
    public $birthday;
    public $email;
    public $password;
}

$User = new userData();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "holobox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<div class="container">
<div class="contbuy1er">
<table class="table table-hover">
<?php
    foreach ($_POST as $key => $value)
    {
        echo "<tr>";
        echo "<th scope = col>";
        echo $key;
        echo "</th>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";

        switch ($key)
        {
            case 'Name':
                $User->name = $value;
                break;
            case 'Surname':
                $User->surname = $value;
                break;
            case 'Gender':
                $User->gender = $value;
                break;
            case 'Birthday':
                $User->birthday = $value;
                break;
            case 'Email':
                $User->email = $value;
                break;
            case 'Password':
                $User->password = $value;
                break;
        }
    }
    


    $sql = 'INSERT INTO users VALUES(null,"' . $User->name . '","' . $User->surname . '","' . $User->gender . '","' . $User->birthday . '","' . $User->email . '","' . $User->password . '")';

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
</table>
</div>
</div>