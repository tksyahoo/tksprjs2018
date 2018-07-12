<?php include "include/header.php" ?>
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
<?php foreach ( $results['articles'] as $article ) { ?>
<div class="card mb-4">
            <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlspecialchars( $article->title )?></h2>
              <p class="card-text"><?php echo htmlspecialchars( $article->summary )?></p>
              <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?php echo date('j F', $article->publicationDate)?>
             
            </div>
          </div>
        <!-- <li>
          <h2>
            <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li> -->

<?php } ?>

      <!-- </ul> -->

      <p><a href=".?action=archive">Article Archive</a></p>

<?php include "templates/include/footer.php" ?>

