<div id="body">
  <div id="uploadCVSection">
  <?php
    echo '<form id="phpCVForm" action="../controller/uploadCV.php?jobID='.$jobID.'" method="post" enctype="multipart/form-data">';
  ?>
    <input id="phpCVButton" type="file" name="myFile" accept="application/pdf" value="Choose CV to Upload" />
    <button class="UploadCVButton btn btn-default btn-lg" button type="submit" name="btn-upload">Submit CV</button>
  </form>
  <?php
    if (($user->is_logged_in()) && ($userID == $row["owner_id"])){
      echo "<hr><button id=\"checkRankingButton\" class=\"btn btn-default btn-lg\" type=\"button\">Check Candidates Ranking</button>";
    }
  ?>
  </div>
  <br/><br/>
  <?php
    if(isset($_GET['status']) and $_GET['status'] === 'success' and isset($_GET['cv']))
    {
  ?>
      <script>
        alert('successfully uploaded!');
      </script>
      <label>File Uploaded Successfully...  <a href="../controller/download.php?id=<?php echo $_GET['cv'] ?>">Click here to view file.</a></label>
  <?php
    }
    else if(isset($_GET['status']) and $_GET['status'] === 'fail')
    {
  ?>
      <script>
        alert('error while uploading file');
      </script>
      <label>Problem While File Uploading!</label>
  <?php
    }
  ?>
</div>