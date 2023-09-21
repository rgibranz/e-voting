<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pemungutan Suara </h1>
<?php if($this->session->flashdata('berhasil')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">


<script>

setTimeout(function(){ 

  window.location.href = "welcome/logout";

}, 3000);

</script>

    <strong>Berhasil</strong> <?= $this->session->flashdata('berhasil'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('gagal')): ?>

   
   
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <?php if($config['status']=='nonaktif'): ?>
        <h2 class="card-title text-center border-left-danger text-danger">
            Mohon Maaf, Waktu pemilihan telah anda lewati.
        </h2>
        <?php else: ?>
        <div class="row">
            <?php foreach($daftar_calon as $key => $dc): ?>
            <div class="col-md-4 mb-3"><center>
                <div class="card" style="width: 80%; ><a href="<?=base_url('pemilihan/pilih/');?><?=$dc['id_calon'];?>" onclick="return confirm('Anda yakin akan memilih pasangan calon ini ?')" >
                   <img style="alignt:center" src="<?=base_url('uploads/image/');?><?=$dc['gambar'];?>" class="card-img-top" alt="Foto Calon"
                        width="100%" height="450">
                        <a style="font-size:16px" href="<?=base_url('pemilihan/pilih/');?><?=$dc['id_calon'];?>"
                            class="badge badge-success float-right"
                            onclick="return confirm('Anda yakin akan memilih pasangan calon ini ?')">
                            PILIH</a>
                        
                    </div></a>
                    <div class="card-body">
                        <h4 class="card-title text-center border-left-info">
                            <a
                                href="<?=base_url('pemilihan/detail/'.$dc['id_calon']);?>"><?=$dc['calon_presma'].$dc['calon_wakil_presma'];?></a>
                        </h4>
                        <p class="card-text"><?=$dc['visi_misi'];?></p>
                    </div>
                    <div class="card-footer">
                       
                </div></center>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>