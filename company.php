<?php
    $id = intval($_GET['id']);
    if ($id == 0){
        echo 'This company does not exist!';
} else {
    $sql = "SELECT * FROM company WHERE company_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id ]);
    $result = $stmt->fetchAll();
    if(count($result) == 0){
       echo 'Your data is not here she\'s in another Database. -Toad';
    } else {
    

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
        <p><?php echo $res['positiontext'];?></p>
        <p><?php echo $res['email_contactpersoon'];?><p>
        <a class="btn btn-primary" 
        href="index.php?page=home">All Companies</a>
    </div>
    </div>
    <!-- /.row -->

    <hr>
  <?php } ?>

<?php
    }
}
?>
