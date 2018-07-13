<?php include "include/header.php" ?>
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
<div class="card mb-4 home">
  <img class="card-img-top" src="<?php echo "http://localhost/cms/cmsnew/".htmlspecialchars( $results['article']->myimage )?>" alt="Card image cap">
<div class="card-body">
              <h2 class="card-title"><?php echo htmlspecialchars( $results['article']->title )?></h2>
              <p class="card-text"><?php echo htmlspecialchars( $results['article']->summary )?></p>
              <p class="card-text"><?php echo $results['article']->content?></p>
              
              
            </div>
            <div class="card-footer text-muted">
              Published on <?php echo date('j F Y', $results['article']->publicationDate)?>
          </div></div>
      <!-- <h1 style="width: 75%;"></h1>
      <div style="width: 75%; font-style: italic;"></div>
      <div style="width: 75%;"></div>
      <p class="pubDate"></p> -->
</div></div>
      <p><a href=".">Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>

