<? echo
header("Content-type: text");
$host="db";//The hostname "db" from our docker-compose.yml file
$username="root";//We use the root user
$pw="my!!!root!!!pw";//the password we set as environment variablr
$conn=new mysqli($host,$username,$pw);
if($conn->connect_errno >0)
{
    echo $db->connect_error;
}
else
{
    echo "DB Connection successful\n\n";
    $result=mysqli_query($conn,"SHOW DATABASES;");
    while($row=mysqli_fetch_row($result))
    {
      echo $row[0]."\n";
    }
}