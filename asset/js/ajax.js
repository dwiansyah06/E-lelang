$(document).ready(function(){

	$("#input_lelang").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: BaseUrl+'karyawan/entryLelang',
			type: "POST",
			data: new FormData(this),
			processData: false,
			contentType: false,
			async: false,
			cache: false,
			success: function(data){
				window.alert("sukses");window.location=(BaseUrl+'dashboard');
			}
		});
	});

	$("#send_voting").submit(function(e){
		var params = {
			url: BaseUrl+'karyawan/votingProcess',
			type: "POST",
			data: new FormData(this),
			processData: false,
			contentType: false,
			async: false,
			cache: false,
			success: function(data){
				window.alert("Terima kasih sudah menawar");window.location=(BaseUrl+'karyawan/voting');
			}
		};
		var hrg_lelang = parseInt($("#harga").val());
		var hrg_tawar  = parseInt($("#harga_pnw").val());

		if (hrg_tawar < hrg_lelang) {
			window.alert("harga penawaran harus lebih tinggi dari harga lelang");window.location=(BaseUrl+'karyawan/voting');
		} else {
			e.preventDefault();
			$.ajax(params);
		}
	});

	$("#kirim_lelang").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: BaseUrl+'manager/kirimBrgLelang',
			type: "POST",
			data: new FormData(this),
			processData: false,
			contentType: false,
			async: false,
			cache: false,
			success: function(data){
				window.alert("lelangan dikirim");window.location=(BaseUrl+'manager/listLelang');
			}
		});
	});

	$("#permintaan_lelang").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: BaseUrl+'pengadaan/readyLelang',
			type: "POST",
			data: new FormData(this),
			processData: false,
			contentType: false,
			async: false,
			cache: false,
			success: function(data){
				window.alert("Barang Siap Di lelang");window.location=(BaseUrl+'pengadaan/permintaanLelang');
			}
		});
	});

});