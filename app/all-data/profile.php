<?php

$id = $_POST['user_id'];

$connect = new mysqli('localhost','root','','ajax',);
$prof_data = $connect -> query("SELECT * FROM azaxs where id='$id'");

$data = $prof_data -> fetch_object();

?>


<div id="profiles" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img style="max-width:100%; height: 200px; border-radius: 100%;" src="public/assets/photos/<?php echo $data -> photo ?>" alt="">
                <div style="margin-left: 20px;" class="user-details">
                    <h3>Name: <?php echo $data -> name ?></h3>
                    <h3>Age: <?php echo $data -> age ?></h3>
                    <h3>Location: <?php echo $data -> location ?></h3>
                    <h3>Cell: <?php echo $data -> cell ?></h3>
                    <h3>Email: <?php echo $data -> email ?></h3>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




