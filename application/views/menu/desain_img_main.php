 <div class="row">
     <?php foreach($data as $row):  ?>
            <div class="col-sm-4 col-md-4 col-lg-4" >
        <div class="panel panel-primary">
          <a class="photo" id="<?= $row['id_photo']?>"><img src="<?= $row['path'] ?>" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>
        </div>
     <?php endforeach ?>
   </div>
  