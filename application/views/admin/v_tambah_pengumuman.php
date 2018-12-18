    <div class="col-md-12">
           <div class="card">
             <div class="card-header " style="background-color: pink"><?php echo $sub_judul; ?> </div>
             <div class="card-body " style=" background-color : aqua">

             <form action="<?php echo site_url('admin/pengumuman/proses_tambah'); ?>" method="post">

             <div class="form-group">
              <label>judul</label>
               <input type="text" class="form-control" name="judul">
              </div>

              <div class="form-group">
              <label>Isi</label>
               <textarea name="isi" cols="30" rows="5" class="form-control"></textarea>
              </div>

              <div>
                <label>penulis</label>
                <input type="text" class="fprm_control" name="penulis">
                <input type="submit" name="submit" value="simpan" class="btn btn-success">
                 <input type="submit" name="submit" value="batal" class="btn btn-danger">

              </div>
            </form>
               



             </div>
           </div>
         </div>