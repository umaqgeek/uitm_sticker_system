<div class="row" style="margin-top: 5%;">
    <div class="col-md-10 col-md-offset-1">
        
        <table class="table">
            <tr>
                <td>Register Id</td>
                <td>Nama Pemilik</td>
                <td>Result</td>
            </tr>
            <?php if(isset($registration))
                foreach ($registration as $reg) {
            ?>
            <tr>
                
                <td><?php echo $reg->register_id; ?></td>
                <td><?php echo $reg->nama; ?></td>
                <td> <button class="btn btn-success" type="submit">Accept</button>
                 <button class="btn btn-success" type="submit" onClick=javascript:void(0)>Reject</button></td>
            </tr>
            <?php } ?>

        </table>

    </div>
</div>
        