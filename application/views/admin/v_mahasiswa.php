<div class="col-md-12">
	<div class="card">
		<div class="card-header bg-drag bg-info" >
			<?php echo $sub_judul; ?>
			</div>
			<div class="card-body">
				<a href="mahasiswa/tambah" class="btn btn-primary btn sm"> Tambah Data</a>
				<hr>
				<table class="table table-borderet">
					<tr>
						<th>NIM</th>
						<th>Nama mahasswa</th>
						<th>Program Studi</th>
						<th>Tgl Dibuat</th>
						<th>Aksi</th>
					</tr>
					<?php foreach ($isi_tabel as $key) { ?>
						
					
					<tr>
						<td><?php echo $key->nim; ?></td>
						<td><?php echo $key->nama_mahasiswa; ?></td>
						<td><?php echo $key->program_studi; ?></td>
						<td><?php echo date('d-M-Y',strtotime($key->created_at)); ?></td>
						<td>
						 Edit | hapus 
						</td >
							
					</tr>
                   <?php } ?>
				</table>		
		</div>
	</div>
	
</div>