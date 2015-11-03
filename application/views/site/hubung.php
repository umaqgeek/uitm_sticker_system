<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tuffah Informatics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  form.three{
 background-color:white;
 border-style:solid;
 width:1000px; 
}
div.two{
  background-color:white;
  border-style:solid;
  width:1000px;
}
body{
        background-color:#FFC0CB;
  }
  </style>
</head>
<body>

      <div id="hubung">
        <h2>UiTM STICKER SYSTEM</h2>
        <div id="content">
          <legend>
          <div class="home"><h2>WELCOME!</h2><h4>Do Call Us Right Now!</h4></div>
        </legend>
          </div>
          <form>

      <ul> :: Hotline : 03 - 123 456 789  </ul>
      <ul> :: Pejabat : 06 - 9876543   </ul>
      <div class="col-md-2">
      <input type="button" class="btn btn-primary" value="Kembali" onClick="this.form.action='<?=site_url('site/contact');?>';this.form.submit()">
      </div>
</form>
  </div>
</body>
</html>
