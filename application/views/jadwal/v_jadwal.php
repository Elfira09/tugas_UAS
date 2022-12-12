<!-- Modal for edit -->
<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3>Data Dokter</h3>
            </div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Alamat</th>
                                <th>Jenis Dokter</th>
                                <th>No hp</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dokter as $row)
                                echo "
                             <tr>
                                <td>$no</td>
                                <td>$row->nama_dokter</td>
                                <td>$row->alamat</td>
                                <td>$row->jenis_dokter</td>
                                <td>$row->no_hp</td>

                             </tr>";
                            $no++;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function show_by_id(id_dokter) {
    $.ajax({
        type: 'GET',
        url: '<?php echo base_url() ?>Dokter/show_by_id',
        data: 'id_dokter=' + id_dokter,
        success: function(data) {
            var json = data,
                obj = JSON.parse(json);
            $("#id_dokter").val(obj.id_dokter);
            $("#nama_dokter").val(obj.nama_dokter);
            $("#alamat").val(obj.alamat);
            $("#no_hp").val(obj.no_hp);
            $("#foto").val(obj.foto);
            $("#jenis_dokter").val(obj.jenis_dokter);
        }
    })
}
</script>