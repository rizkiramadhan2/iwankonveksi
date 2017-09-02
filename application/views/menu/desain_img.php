
  <?php foreach($data as $row): ?>
<div  id="test" class="modal fade myModal1" role="dialog"><!--modal-->
  <div class="modal-dialog modal-m" role="document">
    <div class="modal-content">
      <div style="background-color: grey" class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row">
              <div class="image_loaded" class="col-sm-12"><img id="my_image" src="<?= $row['path']?>" class="img-responsive" style="width:100%" alt="Image"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach ?>
