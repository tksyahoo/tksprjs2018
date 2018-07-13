<?php //include "../include/header.php" ;
require_once($_SERVER['DOCUMENT_ROOT'] . '/cms/cmsnew//templates/include/header.php');
?>
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

      <div id="adminHeader">
        <h2>Blog Admin</h2>
        <div class="alert alert-success">You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></div>
      </div>

      <h1>All Articles</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <!-- <table>
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
        </tr> -->

<?php foreach ( $results['articles'] as $article ) { ?>
<div class="card mb-4">
  <img class="card-img-top" src="<?php echo "http://localhost/cms/cmsnew/".htmlspecialchars( $article->myimage )?>" alt="Card image cap">
            
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlspecialchars( $article->title )?></h2>
              <p class="card-text"><?php echo htmlspecialchars( $article->summary )?></p>

               <a href="#" onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'" class="card-text">Edit</a>
            </div>
            <div class="card-footer text-muted">
              <?php echo date('j F', $article->publicationDate)?>
             
            </div>
          </div>
        <!-- <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'"> -->
          <!-- <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td> -->
       <!--  </tr> -->

<?php } ?>

     <!--  </table> -->

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="admin.php?action=newArticle">Add a New Article</a></p>

<?php include "templates/include/footer.php" ?>

