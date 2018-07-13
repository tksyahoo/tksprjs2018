<?php include "include/header.php" ?>
<div class="container">

      <div class="row">
 <div class="col-md-8">
        <!-- Blog Entries Column -->
      <?php foreach ( $results['articles'] as $article ) { ?>
<div class="card mb-4 home">
            <img class="card-img-top" src="<?php echo "http://localhost/cms/cmsnew/".htmlspecialchars( $article->myimage )?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlspecialchars( $article->title )?></h2>
              <p class="card-text"><?php echo htmlspecialchars( $article->summary )?></p>
             
              <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?php echo date('j F', $article->publicationDate)?>
             
            </div>
          </div>
        

<?php } ?>
<p><a href=".?action=archive">Article Archive</a></p>
</div>

</div>
      

<?php include "templates/include/footer.php" ?>

