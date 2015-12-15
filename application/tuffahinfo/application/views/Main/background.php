
<form method = "post" action = "<?=site_url('Main/back_input'); ?>">
  <div class = "row" style = "margin-top: 5%;">
    <div class = "col-md-6 col-md-offset-3">

      <div class = "row">
        <div class = "col-md-2"><h5> Title :</h5></div>
        <div class = "col-md-6"><input type ="text" class ="form-control" name ="title"></div>
      </div>

      <div class = "row">
        <div class ="col-md-2"><h5> Input :</h5></div>
        <div class ="col-md-6"><textarea type ="text" class ="form-control" name ="background"></textarea>
      </div>

      <div class="row" style="margin-top: 10%;">
        <div class="col-md-6"><center><button type="submit" class="btn btn-primary">Submit</button></center></div>
      </div>

    </div>
  </div>
</form>

<div id="papar"></div>