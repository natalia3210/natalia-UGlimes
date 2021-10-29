<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='students';
$connection=mysqli_connect($servername,$username,$password,$dbname);
$name=isset($_POST['name']) && $_POST['name'] ? $_POST['name'] : null ;
if($name){
    $insert_query="INSERT INTO students(name) VALUES ('$name')";}
    if(mysqli_query($connection,$insert_query)){
      echo"succesfull";
    }
else{
    echo'error';
}
$lastname=isset($_POST['lastname']) && $_POST['lastname'] ? $_POST['name'] : null;
if($lastname){
    $insert_query="INSERT INTO students(lastname) VaLUES ('$lastname')";
}
if(mysqli_query($connection,$insert_query)){
  echo"succesfull";
}
else{
echo'error';}
$age=isset($_POST['age']) && $_POST['age'] ? $_POSt ['age'] : null;
if($age){
    $insert_query="INSERT INTO students(age) VALUES ('$age')";
}
if(mysqli_query($connection,$insert_query)){
  echo"succesfull";
}
else{
echo'error';}

$id=isset($_POST['id']) && $_POST['id'] ? $_POST['id'] : null;
if($id){
  $delete_query="DELETE FROM students WHERE id= " . $id;
  if(mysqli_query($connection,$delete_query)){
    echo"succesfull";
  }
  else{
    echo"error";
  }
}

$sql='SELECT * FROM students';
$result = mysqli_query($connection,$sql);
$rows=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <div class='container'>
        <form action='' method='post' style='display:inline-block;'>
            <input type='text'>
        </form>
        <form action='post' style='display:inline-block;'>
            <input type='text'>
        </form>
        <form action='post' style='display:inline-block;'>
            <input type='number'>
        </form>
        <button>add</button>
<table style='margin-top:10px;'>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Lastname</th>
    <th>age</th>
  </tr>
  <?php foreach($rows as $value): ?>
  <tr>
    <td><?= $value['id'] ?></td>
    <td><?= $value['name'] ?></td>
    <td><?= $value['lastname'] ?></td>
    <td><?= $value['age'] ?></td>
    <td>
      <form action="" method="post" type='hidden' name='id' value="<?= $value['id'] ?>">
        <button>X</button>
      </form>
    </td>  
  </tr>
  <?php endforeach; ?>
  
</table>
</div>

</body>
</html> 
