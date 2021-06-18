<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Companies
    <small>Every company</small>
  </h1>

    <?php
    $sql = "SELECT * FROM company";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    //var_dump($result);
    ?>
    <?php
    foreach($result as $res) { //var_dump($res); ?>

  <!-- Project One -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3><?php echo $res['companyname'];?></h3>
      <p><?php echo substr($res['positiontext'], 0, 100);?>...</p>
      <a class="btn btn-primary" 
      href="index.php?page=company&id=<?php echo $res["company_id"];?>">Meer informatie</a>
    </div>
  </div>
  <!-- /.row -->

  <hr>
    <?php } ?>
    
    
  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

</div>
<!-- /.container -->

