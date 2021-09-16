<?php
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
 if (isset($_POST['contact'])) {
     if(empty($_POST['name'])||empty($_POST['email'])
        ||empty($_POST['issue'])||empty($_POST['comment'])){
            header("Location:index.html");
        }
        elseif(!filter_var(test_input($_POST['email']),FILTER_VALIDATE_EMAIL)){
            header("Location:index.html");
        }
        else{
            $name=$_POST['name'];
            $email=$_POST['email'];
            $issue=$_POST['issue'];
            $comment=$_POST['comment'];

            $file=fopen("contact.html","w");
            $content="<html><head><title></title>
                       <link rel='stylesheet' href='index.css'>
                       </head><body style='background-color:aquamarine;'>
                       <div class='card'><center>
                       <h1>User Details</h1><hr>
                       <table>
                       <tr><td>Name:</td><td>$name</td></tr>
                       <tr><td>Email:</td><td>$email</td></tr>
                       <tr><td>Issue:</td><td>$issue</td></tr>
                       <tr><td>Comment:</td><td></td></tr>
                       </table>
                       <p>$comment</p>
                       <a href='index.html'>Back</a>
                       </center>
                       </div></body>";
            fwrite($file,$content);
            header("Location:contact.html");
        }
 }
?>