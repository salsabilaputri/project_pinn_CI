<div id="container">
	<h1>Selamat datang di Kelas Code Igniter</h1>

	<div id="body">
		<p>Silahkan tulis namamu dan perasaanmu saat ini!</p>


		<?php echo validation_errors(); ?>

		<?php echo form_open('Welcome/salam_sapa'); ?>

			<label for="nama">Nama:</label>
			<input type="input" name="nama" /><br />

			<label for="perasaan">Perasaan:</label>
			<input type="input" name="perasaan" /><br />

			<input type="submit" name="submit" value="Masukkan perasaanmu"/>

		</form>
	</div>

	

	
</div>

</body>
</html>