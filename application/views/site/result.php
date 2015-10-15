<div class="row" style="margin-top: 5%;">
    <div class="col-md-10 col-md-offset-1">
        
        <table class="table">
            <tr>
                <th>No Plat</th>
                <th>Kenderaan</th>
                <th>Jenis Kenderaan</th>
                <th>No Engin</th>
                <th>Nama Pemilik</th>
                <th>Warna Kenderaan</th>
                <th>No Ic Pemilik</th>
                <th>No Tel Pemilik</th>
                <th>Pemilik</th>
                <th>No Lesen</th>
                <th>Kelas Lesan</th>
                <th>No Cukai Jalan</th>
                <th>No Waris Terdekat</th>
            </tr>
            <?php 
            if (isset($registration) && !empty($registration)) {
                foreach ($registration as $reg) {
            ?>
            <tr>
                <td><?=$reg->plat; ?></td>
                <td><?=$reg->kenderaan; ?></td>
                <td><?=$reg->model; ?></td>
                <td><?=$reg->engin; ?></td>
                <td><?=$reg->nama; ?></td>
                <td><?=$reg->warna; ?></td>
                <td><?=$reg->ic; ?></td>
                <td><?=$reg->phone; ?></td>
                <td><?=$reg->hubungan; ?></td>
                <td><?=$reg->lesen; ?></td>
                <td><?=$reg->kelas; ?></td>
                <td><?=$reg->cukai; ?></td>
                <td><?=$reg->waris; ?></td>
            </tr>
            <?php } } ?>
        </table>


        