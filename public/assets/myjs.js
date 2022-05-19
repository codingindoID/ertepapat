const base_url = location.host;
const http = location.protocol;

$(document).ready(function () {
    $('.data-table').DataTable();

    setTimeout(() => {
        $('.alert-notif').alert('close')
    }, 3000);

    $('.detil-warga').on('click', function () {
        let id = $(this).data('id');
        $.ajax({
            type: "post",
            url: http + "//" + base_url + "/detail-warga",
            data: {
                id_warga: id
            },
            dataType: "json",
            success: function (response) {
                $('#alamat').val(response.alamat);
                $('#id_warga').val(response.id_warga);
                $('#jk').val(response.jk);
                $('#kepala_keluarga').val(response.kepala_keluarga);
                $('#nama').val(response.nama);
                $('#nik').val(response.nik);
                $('#no_hp').val(response.no_hp);
                $('#no_kk').val(response.no_kk);
                $('#pekerjaan').val(response.pekerjaan);
                $('#tanggal_lahir').val(response.tanggal_lahir);
                $('#tempat_lahir').val(response.tempat_lahir);
                $('#modalPenduduk').modal('show');
            }
        });
    });

    $('.tambah-penduduk').on('click', function () {
        $('#alamat').val("");
        $('#id_warga').val("");
        $('#jk').val("");
        $('#kepala_keluarga').val("");
        $('#nama').val("");
        $('#nik').val("");
        $('#no_hp').val("");
        $('#no_kk').val("");
        $('#pekerjaan').val("");
        $('#tanggal_lahir').val("");
        $('#tempat_lahir').val("");
        $('#modalPenduduk').modal('show');
    });
});


function deleteWarga(data) {
    let id = $(data).data('id');
    let res = confirm('Hapus Data?');
    if (res) {
        $.ajax({
            type: "get",
            url: `${http}//${base_url}/delete-warga/${id}`,
            data: "data",
            dataType: "json",
            success: function (response) {
                alert(response);
                $(data).closest('tr').remove();
            }
        });
    }
}