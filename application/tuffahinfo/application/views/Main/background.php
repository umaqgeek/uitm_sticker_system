<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="row" style="margin-top: 5%;">
<div class="container">
  <div class="panel-group">
  	<div class="panel panel-default">
    	<div class="panel-heading">
  		<h4>Background</h4>
    	</div>
    <div class="panel-body">
    	<div class="container">
        <h2>Form control: textarea</h2>
          <p>The form below contains a textarea for comments:</p>
            <form role="form">
              <div class="form-group">
                <label for="comment">Comment:</label>
                <div class="row">
                <div class="col-md-8">
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
              </div>
              </div>
            </form>
            <div id='container'>
                <?php echo  form_open_multipart('Main/uploadImage')?>
                <input type="file" class="btn btn-primary" name="userfile" /><br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit" />
              <?php echo form_close();?>
            </div>
  		</div>
    </div>
  </div>
  </div>
  </div>
</div>
</body>
</html>