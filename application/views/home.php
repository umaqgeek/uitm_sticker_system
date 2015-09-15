<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
        <dic id="container">
            <p>My view has been loaded</p> 

            <?php foreach($records as $row): ?>
                <h1><?php echo $row->title; ?></h1>
            <?php endforeach; ?>
            
        </div>
    </body>
</html>
	