
<?php

$connect = new mysqli('localhost','root','','ajax',);
$all_data = $connect -> query("SELECT * FROM azaxs");

while($user_data = $all_data -> fetch_object()):
?>

<tr>
    <td>1</td>
    <td><?php echo $user_data -> name?></td>
    <td><?php echo $user_data -> age?></td>
    <td><?php echo $user_data -> location?></td>
    <td><img style="object-fit:cover;" src="public/assets/photos/<?php echo $user_data -> photo ?> " alt=""></td>
    <td>
        <a prof_id="<?php echo $user_data -> id?>" class="btn btn-sm btn-info prof" href="#">View</a>
        <a class="btn btn-sm btn-warning" href="#">Edit</a>
        <a delete_id="<?php echo $user_data -> id ?>" id="d" class="btn btn-sm btn-danger delete_btn" href="#">Delete</a>
    </td>
</tr>
<?php
endwhile;
?>




