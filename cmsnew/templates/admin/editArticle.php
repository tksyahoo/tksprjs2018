<?php include "templates/include/header.php" ;
print_r($results['article']);
echo "end<br>";   
?>
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
      <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
<div class="form-group">
    <label for="title">Article Title</label>
    <input class="form-control" type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" >
    
  </div>
  <div class="form-group">
     <label for="summary">Article Summary</label>
    <textarea name="summary" class="form-control" id="summary" placeholder="Brief description of the article" required maxlength="1000"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
  </div>
  <div class="form-group">
     <label for="content">Article Content</label>
    <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" class="form-control"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
  </div>
  <div class="form-group">
     <label for="myimage">Article Image</label>
    <input type="file" name="myimage" id="image" class="form-control" value="<?php echo htmlspecialchars( $results['article']->myimage )?>">
  </div>
<div class="form-group">
<label for="publicationDate">Publication Date</label>
            <input class="form-control" type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" /></div>
  

        <ul>

         <!--  <li>
            <label for="title">Article Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" />
          </li> -->

          <!-- <li>
            <label for="summary">Article Summary</label>
            <textarea name="summary" id="summary" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
          </li> -->

          <!-- <li>
            <label for="content">Article Content</label>
            <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </li> -->

          <!-- <li>
            <label for="publicationDate">Publication Date</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" /> -->
          </li>


        </ul>

        <div class="buttons">
          <input type="submit" class="btn btn-primary btn-sm" name="saveChanges" value="Save Changes" />
          <input type="submit" class="btn btn-primary btn-sm" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if ( $results['article']->id ) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>

