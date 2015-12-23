</<html>
<head>

</head>

<body>
    <div class="container">
<div class = "row" style = "margin-top: 5%;">
 <ol><?php if (isset($tunjuk)){?>
                        <?php foreach ($tunjuk as $row): ?>
                            <table border="1" cellpadding="5" cellspacing="0" width="80%" class="centre">
                                
                                <tr>
                                    <td>
                                        Title :
                                    </td>
                                    <td>
                                        <?php echo $row->title; ?>
                                    </td>
                                </tr><br>
                                <tr>
                                    <td>
                                        Background :
                                    </td>
                                    <td>
                                        <?php echo $row->background; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Images :
                                    </td>
                                    <td>
                                        <img width="80%" alt="Your uploaded image" src="<?=base_url(). 'assets/uploads/' . $row->userfile;;?>">
                                        
                                    </td>
                                </tr>
                            </table>
                        <?php endforeach; }?>

                         <ul>
                           

</div></div>
</body>
</html>

                        