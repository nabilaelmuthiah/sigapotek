<?php
	require('koneksi.php'); 
	$hasil = mysqli_query($koneksi, 'SELECT * FROM  data_apotek');

	$data =[];
	while($d = mysqli_fetch_assoc($hasil)){
		$data[] = $d;
	}

?>
			<div class="container-fluid">
					<h2 class="subheading" align="center">Sistem Informasi Geografis</h2>
					<h4 align="center">Daftar Detail Apotek di Wilayah DKI Jakarta</h4>
			</div> <br>

			<div class="container-fluid">
				
			<table class="table">
			<thead class="table-dark text-center">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Apotek</th>
				<th scope="col">Alamat</th>
				<th scope="col">Jam Buka</th>
				<th scope="col">Latitude</th>
				<th scope="col">Longitude</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $apotek) : ?>
				<tr>
					<th scope="row"><?= $apotek['id']?></th>
					<td><?= $apotek['nama']?></td>
					<td><?= $apotek['alamat']?></td>
					<td><?= $apotek['operasi']?></td>
					<td><?= $apotek['latitude']?></td>
					<td><?= $apotek['longitude']?></td>
				</tr>
				<?php endforeach ?>
				
			</tbody>
			</table><br>
			

			<?php
				require('koneksi.php');


				if (isset($_POST['submit'])) {
					echo 'ter submit';
					
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$operasi = $_POST['operasi'];
					$latitude = $_POST['latitude'];
					$longitude = $_POST['longitude'];

					$hasil = mysqli_query($koneksi, "INSERT INTO data_apotek VALUES('', '$nama', '$alamat', '$operasi', '$latitude', '$longitude')");

					if (mysqli_affected_rows($koneksi) > 0) {
						header('Location: data.php');
					}
				}

				?>
				<button class="open-button btn mt-3" onclick="openForm()">Tambah Data Apotek</button>
				<!-- The form -->
				<div class="container">
				<form action="" method="POST" >
                <fieldset class="border border-4 p-3  shadow p-3 mb-5 bg-white rounded form-popup" id="myForm">
                <legend  class="text-center" >Form Tambah Data Apotek</legend><br><br>
				    <input type="hidden" name="id" id="id" value=""/>
                    <div class="row mb-4 ml-3">
                    <label for="nama_apotek" class="col-sm-2 col-form-label">Nama Apotek</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama" value=""required>
                    </div>
                  </div>
                    <div class="row mb-4">
                    <label for="alamat_apotek" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input class="form-control" rows="2" name="alamat" value="" required>
                    </div>
                  	</div>
					<div class="row mb-4 ml-3">
                    <label for="jam_operasi" class="col-sm-2 col-form-label">Jam Operasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="operasi" value=""required>
                    </div>
                  	</div>
					  <div class="row mb-4 ml-3">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="latitude" value=""required>
                    </div>
                  	</div>
					  <div class="row mb-4 ml-3">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="longitude" value=""required>
                    </div>
                  	</div>
                  <br>
                    <div class="row mb-4">
                        <div class="col-sm-10 offset-sm-5"><br><br>              
                        <button type="submit" class="btn btn-primary mt-3" name="submit" >Submit</button>
						<button type="close" class="btn btn-danger mt-3" onclick="closeForm()">Close</button>
                    </div>
                  </div>
                </fieldset>
				</form>
			</div>				
				
			</div>
				
	

			<div class="container-fluid">
            <footer class="footer-area section-gap"> <br><br>
                        <p class="col-lg-12 col-sm-12" align="center">
                        Copyright &copy All rights reserved | Sistem Informasi Geografis Apotek by Aisyah, Andrean Bagus, Dessy Fitriyani, Nabila ElMuthi'ah | Sekolah Tinggi Terpadu Teknologi Nurul Fikri</p>
                    </div>
                </div>
            </div>
            </footer>

			<script>
				function openForm() {
				document.getElementById("myForm").style.display = "block";
				}

				function closeForm() {
				document.getElementById("myForm").style.display = "data.php";
				}
			</script>
            