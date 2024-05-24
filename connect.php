<?PHP

$servername="localhost";
$username="root";
$password="";
$dbname="form";

// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli!!!';
// } else {
//     echo 'Phew we have it!';
// }
//create connection using OO approach

//
//$con=new mysqli($servername,$username,$password,$dbname);


// if ($con->connect_error){
//     die("Connection failed:" .$conn->connect_error);

// }
// echo "Connection successful";

//create connection using procedural approach

$conn=mysqli_connect($servername,$username,$password,$dbname);

//echo "Connection successful";
?>