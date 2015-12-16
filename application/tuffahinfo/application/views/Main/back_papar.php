<div id="#papar">

 <ol><?php if (isset($tunjuk)){?>
                        <?php foreach ($tunjuk as $row): ?>
                            <table border="1" cellpadding="5" cellspacing="0">
                            	
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
                            </table>
                        <?php endforeach; }?>

                        