<?php
include 'db_connect.php';
if (isset($_GET['id'])) {
	$qry = $conn->query("SELECT * FROM requests where id= " . $_GET['id']);
	foreach ($qry->fetch_array() as $k => $val) {
		$$k = $val;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-request">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div id="msg"></div>
		<div class="form-group">
			<label for="" class="control-label">Nama Pasien</label>
			<input type="text" class="form-control" name="patient" value="<?php echo isset($patient) ? $patient : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">NIK</label>
			<input type="text" class="form-control" name="nik" value="<?php echo isset($nik) ? $nik : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Golongan Darah</label>
			<select name="blood_group" id="" class="custom-select select2" required>
				<option value=""></option>
				<option <?php echo isset($blood_group) && $blood_group == 'A+' ? ' selected' : '' ?>>A+</option>
				<option <?php echo isset($blood_group) && $blood_group == 'B+' ? ' selected' : '' ?>>B+</option>
				<option <?php echo isset($blood_group) && $blood_group == 'O+' ? ' selected' : '' ?>>O+</option>
				<option <?php echo isset($blood_group) && $blood_group == 'AB+' ? ' selected' : '' ?>>AB+</option>
				<option <?php echo isset($blood_group) && $blood_group == 'A-' ? ' selected' : '' ?>>A-</option>
				<option <?php echo isset($blood_group) && $blood_group == 'B-' ? ' selected' : '' ?>>B-</option>
				<option <?php echo isset($blood_group) && $blood_group == 'O-' ? ' selected' : '' ?>>O-</option>
				<option <?php echo isset($blood_group) && $blood_group == 'AB-' ? ' selected' : '' ?>>AB-</option>
			</select>
		</div>

		<div class="form-group">
			<label for="" class="control-label">Volume yang Tersedia (L)</label>
			<input type="number" class="form-control text-right" step="any" name="avolume" value="0" readonly="">
		</div>

		<div class="form-group">
			<label for="" class="control-label">Volume (L)</label>
			<input type="number" class="form-control" name="volume" value="<?php echo isset($volume) ? $volume / 1000 : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="text" class="form-control" name="email_pasien" value="<?php echo isset($email_pasien) ? $email_pasien : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Nomor WhatsApp</label>
			<input type="text" class="form-control" name="nowa" value="<?php echo isset($nowa) ? $nowa : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Alamat</label>
			<input class="form-control" id="message" name="alamat" style="height: 100px" value="<?php echo isset($alamat) ? $alamat : '' ?>" placeholder="ketikan alamat lengkap disini" required></input>
			<!-- <input type="text" class="form-control" name="alamat" value="<?php echo isset($alamat) ? $alamat : '' ?>" required> -->
		</div>
		<?php if (isset($status)): ?>
			<div class="form-group">
				<label for="" class="control-label">Status</label>
				<select name="status" id="" class="custom-select select2" required>
					<option value="0" <?php echo $status == 0 ? 'selected' : ''  ?>>Pending</option>
					<option value="1" <?php echo $status == 1 ? 'selected' : ''  ?>>Approved</option>
				</select>
			</div>
		<?php endif; ?>
</div>
</form>
</div>
<script>
	$(document).ready(function() {
		if ('<?php echo isset($blood_group) ? 1 : 0 ?>' == 1)
			$('[name="blood_group"]').trigger('change')
	})
	$('[name="blood_group"]').change(function() {
		var _id = $(this).val()
		console.log(_id)
		$.ajax({
			url: 'ajax.php?action=get_available',
			method: 'POST',
			data: {
				blood_group: $(this).val(),
				id: '<?php echo isset($id) ? $id : '' ?>'
			},
			success: function(resp) {
				if (resp > 0) {
					$('[name="avolume"]').val(resp)
				} else {
					$('[name="avolume"]').val(0)
				}
			}
		})
	})
	$('#manage-request').submit(function(e) {
		e.preventDefault()
		start_load()
		$('#msg').html('')
		if ($('[name="volume"]').val() > $('[name="avolume"]').val()) {
			$('#msg').html('<div class="alert alert-danger">Blood volume is greater than available volume.</div>')
			end_load()
			return false;
		}
		$.ajax({
			url: 'ajax.php?action=save_request',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully saved.", 'success')
					setTimeout(function() {
						location.reload()
					}, 1000)
				}
			}
		})
	})
</script>