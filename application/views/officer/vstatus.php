
<div class="container">
<div class="row" style="margin-top:5%;">
<ol>
    <?php if (isset($tunjuk)){?>
                        <?php foreach ($tunjuk as $row): ?>
                            <table border="1" cellpadding="5" cellspacing="0" width="80%" class="centre">
                                
                                <tr>
                                    <td>
                                        Kenderaan :
                                    </td>
                                    <td>
                                        <?php echo $row->kenderaan; ?>
                                    </td>
                                </tr><br>
                                <tr>
                                    <td>
                                        Jenis Kenderaan :
                                    </td>
                                    <td>
                                        <?php echo $row->model; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Status :
                                    </td>
                                    <td>
                                        <?php echo $row->status; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Code :
                                    </td>
                                    <td>
                                        <?php echo $row->code; ?>
                                    </td>
                                </tr>
                            </table>
                        <?php endforeach; }?>

                         <ul>
                         </div>


