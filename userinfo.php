<?php 

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}


//phpwebsite
mysqli_select_db($con, 'portfolio');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

//INSERT INTO `userinfodata`(`id`, `user`, `email`, `mobile`, `contact`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

//$query = "insert into userinfodata (user, email, mobile, comment)values ('$user', '$email', '$mobile', '$comment')";
//$query="INSERT INTO `contact_form`(`id`, `user`, `email`, `mobile`, `comment`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
$query = "insert into contact_form (user, email, mobile, comment)values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con, $query);

header('location:contact.php');

?>