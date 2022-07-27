$(document).ready(function(){
    var data = "data_barang.php";
    $('#data_barang').load(data);

    $("form_tambah").submit(function(e){
        e.preventDefault();

        $("#error_id_barang").html('');
        $("#error_nama_barang").html('');
        $("#error_id_kategori_barang").html('');
        $("#error_diskripsi_barang").html('');
        $("#error_berat_barang").html('');
        $("#error_harga_barang").html('');
        $("#error_stok_barang").html('');

        var dataform = $("#form_tambah").serialize();
        $.ajax({
            url:"barang_add.php",
            type:"post",
            data:dataform,
            success:function(result){
                var hasil = JSON.parse(result);
                if(hasil.hasil !== "sukses"){
                    $("#error_id_barang").html('hasi.error.id_barang');
                    $("#error_nama_barang").html('hasi.error.nama_barang');
                    $("#error_id_kategori_barang").html('hasi.error.id_kategori_barang');
                    $("#error_diskripsi_barang").html('hasi.error.diskripsi_barang');
                    $("#error_berat_barang").html('hasi.error.berat_barang');
                    $("#error_harga_barang").html('hasi.error.harga_barang');
                    $("#error_stok_barang").html('hasi.error.stok_barang');
                }else{
                    $('#tambah_barang').modal('hide');
                    $("#error_id_barang").val('');
                    $("#error_nama_barang").val('');
                    $("#error_id_kategori_barang").val('');
                    $("#error_diskripsi_barang").val('');
                    $("#error_berat_barang").val('');
                    $("#error_harga_barang").val('');
                    $("#error_stok_barang").val('');
                    $('#data_barang');
                }
            }
        });
    });
});