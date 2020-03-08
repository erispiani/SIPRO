<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Rumah</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Rumah</th>
                            <th>Penjual</th>
                            <th>Nama</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Pic</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>ID Rumah</th>
                            <th>Penjual</th>
                            <th>Nama</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Pic</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no =  1;
                        foreach ($db_property as $t) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $t->id_rumah; ?></td>
                                <td><?= $t->id_user; ?></td>
                                <td><?= $t->nama; ?></td>
                                <td><?= $t->uk_rumah; ?></td>
                                <td><?= $t->harga; ?></td>
                                <td><img src="<?= base_url() ?>pic/<?= $t->pic; ?>" width="60" alt=""></td>
                                <td><span class="badge badge-success"><?= $t->status; ?></span></td>
                                <td>
                                    <a href="" class="badge badge-success p-2 ml-2"><span class="fa fa-edit"></span></a>
                                    <a href="" class="badge badge-info p-2 pl-3  ml-2"><span class="fa fa-info"></span></a>
                                    <a href="" class="badge badge-danger p-2 ml-2"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
    // $(function() {

    //     ambildata();
    //     $('#dataTable').dataTable();

    //     function ambildata() {
    //         $.ajax({
    //             type: 'GET',
    //             url: '<?= base_url() ?>index.php/Administrator/getproperty',
    //             dataType: 'json',
    //             success: function(data) {
    //                 var cek = ''
    //                 var i
    //                 for (i = 0; i < data.length; i++) {
    //                     var no = i + 1
    //                     cek += '<tr>' +
    //                         '<td>' + no + '</td>' +
    //                         '<td>' + data[i].id_rumah + '</td>' +
    //                         '<td>' + data[i].id_user + '</td>' +
    //                         '<td>' + data[i].nama + '</td>' +
    //                         '<td>' + data[i].uk_rumah + '</td>' +
    //                         '<td>' + data[i].harga + '</td>' +
    //                         '<td>' + data[i].harga + '</td>' +
    //                         '<td>' + data[i].status + '</td>' +
    //                         '</tr>';
    //                 }
    //                 cek = ''
    //                 $('.table_target').html(cek);
    //             }
    //         });
    //     }
    // });
</script>