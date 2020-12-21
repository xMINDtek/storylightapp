<?php include "../tools/https.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="css/info.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/dd6b81437c.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form id = "primary-form" method="POST" action="postUploader.php">
        <title>Create Post - Storylight</title>
 
    <?php include "./../requirements/css/background_load.php"; ?>
  </head>
  <body class="text-selection-none">
    <div class="main">
      <div class="main-cn">
        <div class="info-header">
            <i class="fas fa-user-shield verified"></i> <input type="text" name="post-title" placeholder = "Title" required="required">
          <div class="info-by">
          </div>
        </div>
        <hr>
        <div class="info-breif">
            <input type="text" name="post-description" placeholder = "Brief description of the post" required="required">
        </div>
        <hr>
        <div class="info-box">
            How many sections do you want in this article?
            <select class="sections-dropdown" name="sections">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <script>
                if (document.sections-dropdown.value == "1"){
                    <?php
                        print "
                        What is the content of field 1?
                        <textarea type='text id='sectionInput' name='section1-text' placeholder='Main body text for field 1'></textarea>
                        Do you want an image for this section?
                        <input class='yes' type='radio' value='yes'>
                        <label for='yes'>Yes</label><br>
                        <input class='no' type='radio' value='no'>
                        <label for='no'>No</label><br>
                        <script>
                            if (document.yes.value=='yes'){
                                print '
                                    <input 
                                ';
                            }
                        </script>

                        ";
                    ?>
                } else if (document.sections-dropdown.value == "2") {

                } else if (document.sections-dropdown.value == "3") {

                } else {
                    <?php
                        print "
                        You must define how many sections you want before creating the article.
                        ";
                    ?>
                }
            </script>
        </div>
      </div>
    </div>
  </body>
</html>