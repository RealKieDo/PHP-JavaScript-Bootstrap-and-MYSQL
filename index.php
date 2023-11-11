<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>



<?php include_once './parts/header.php'; ?>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">GiveAway!</h1>
      <p class="lead fw-normal">Registration remains open.</p>
      <p id="demo"></p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      <p id="demo"></p>

    </div>
  </div>


  <!--
  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
-->

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>please enter your information</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text"name="lastName" class="form-control" id="exampleInputEmail1"value="<?php echo $lastName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text"name="email" class="form-control" id="exampleInputEmail1"value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  <button type="submit"name="submit" class="btn btn-primary">Submit</button>
</form>
<div>
</div>



<!--
    <form action="index.php" method="POST">
        <input type="text"name="firstName"id="firstName"placeholder="first name">
        <input type="text"name="lastName"id="lastName" placeholder="last name">
        <input type="text"name="email"id="email"placeholder="email">
        <input type="submit" name="submit" id="send">
    </form>
-->

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto">
<button type="button" id="winner" class="btn btn-primary">
  Choose winner
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">The winner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class=" display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']).' '. htmlspecialchars($user['lastName']);?></h1>
        <?php endforeach; ?>      </div>
    </div>
  </div>
</div>








<!--
<div id="cards" class="row mb-5 pb-5">

    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class = "card-body">
                <h5 class="card-title"></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
            </div>
        </div>
    </div>
</div>
      -->

<?php include_once './parts/footer.php'; ?>
