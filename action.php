<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'test');

$input = filter_input_array(INPUT_POST);

$first_name = mysqli_real_escape_string($connect, $input["name"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE todolist 
 SET name = '".$first_name."' WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM todolist 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>