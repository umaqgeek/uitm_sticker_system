<div class="row" style="margin-top: 5%;">
    <div class="col-md-10 col-md-offset-1">
        
        <table class="table">
            <tr>
                <td>Register Id</td>
                <td>Nama Pemilik</td>
                <td>Result</td>
            </tr>
            <?php 
                foreach ($registration as $reg) {
            ?>
            <tr>
                
                <td><?php echo $reg->register_id; ?></td>
                <td><?php echo $reg->nama; ?></td>
                <td> <button class="btn btn-success" type="submit">Accept</button>
                 <button class="btn btn-success" type="submit">Reject</button></td>
            </tr>
            <?php } ?>

        </table>

    </div>
</div>
        