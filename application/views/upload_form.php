<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:20px">
            <?php
           echo form_open_multipart('upload/do_upload');
           if (isset($error))
           echo '<p>'.$error.'</p>';
        ?>
            <div class="form-group">
                <label for="email">File Upload:</label>
                <input type="file" id="file" name="upload_file" />
            </div>
            <button type="submit" class="btn btn-success">Upload</button>
            <?php 
              echo form_close(); 
              if(isset($upload_data)):
        ?>
            <p>Your file was successfully uploaded!<p>
                    <?php echo "<pre>".json_encode($upload_data, JSON_PRETTY_PRINT)."</pre>";
         endif;
        ?>
        </div>
        <div class="col-md-2"></div>
</body>

</html>