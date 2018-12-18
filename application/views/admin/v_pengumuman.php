    <div class="col-md-12">
           <div class="card">
             <div class="card-header " style="background-color: aqua"><?php echo $sub_judul; ?> </div>
             <div class="card-body " style=" background-color : pink">
             <?php
              if ($this->session->flashdata('info')){
                echo "<div class='alter alter-primary'>".$this->session->flashdata('info')."</div>";
              }

              ?>

              <a href="<?php echo  site_url('admin/pengumuman/tambah'); ?>" class="btn btn-primary">tambah Data</a>
             

            <?php foreach ($isi_tabel as $value):
              

             ?>
              <div style="border : 1px solid red; padding : 15px; margin-bottom : 10px"> 

              <div class="row">
              	<div class="col-sm-1">
              		<img width="100px" height="100px" src="<?= base_url('assets/gita.jpeg') ?>" class="img_thumbnail">
              	</div>
              	<div class="col-sm-4">
              		penulis : <strong><?php  echo $value->penulis ?></strong>
              		<br>
                  <small><?=$value->created_at?></small>
          
              	</div>
                <div class="col-xl-7">
                 <a href="<?=site_url('admin/pengumuman/hapus/'.$value->id);?>" class="btn btn-danger">Hapus</a>
                 <a href="<?=site_url('admin/pengumuman/edit/'.$value->id);?>" class="btn btn-warning btn-sm">Edit</a>
                </div>
              </div>
              <div class="row">
              	<div class="col-sm-12">
              	<h4><?=$value->judul;?></h4>
              	<p><?=$value->isi; ?></p>
              		
              	</div>
              </div>
          </div>
        

              	<?php endforeach ?>
             </div>
           </div>
         </div>