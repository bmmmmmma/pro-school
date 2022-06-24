<div class="col-xs-12 col-sm-3 widget-container-col aside1" id="widget-container-col-2">

  <div class="widget-box widget-color-blue" id="widget-box-2">

    <div class="widget-body">

      <div class="widget-main no-padding">

        <table class="table table-striped table-bordered table-hover">

          <tbody>
          <?php if(isset($categories)){ foreach($categories as $value){ ?>
            <tr>
              <td>
                <a href="<?= base_url() ?>index.php/courses/index/<?= $value['id'] ?>">
                  <h5>
                      <?= $value['category_name']; ?>                  
                   </h5>
              	</a>
              </td>
            </tr>
          <?php } } ?>
          </tbody>

        </table>

      </div>

    </div>

  </div>

</div>


<div class="col-xs-12 col-sm-9">

  <table id="dynamic-table" class="table table-striped table-bordered table-hover">
  	<?php if(isset($courses)){ foreach($courses as $value){ ?>
    <tr>

      <td>
        <a href="<?= base_url() ?>index.php/themes/index/<?= $value['id']; ?>">

          <div class="pull-left">
						<img width="150" height="150" alt="150x150" src="<?= base_url() ?>assets/images/gallery/<?= $value['photo_url'] ?>"> &nbsp &nbsp &nbsp
          </div>

          <p>

          	<span class="pull-left">
              <strong> <h3> <?= $value['title'] ?> </h3> </strong>
									<h5 style="color: black">
                      <div class="lighter" >
                      	<a> <?= nl2br(mb_strimwidth($value['text'], 0, 100, "...")); ?> </a>
                      	<h5>
                      		<?php if(isset($categories)){ foreach($categories as $cat){ if($value['category'] == $cat['id']){ ?>
														<span class="badge badge-grey"> <?= $cat['category_name'] ?> </span>
													<?php } } } ?>
												</h5>
											</div>
									</h5>		
						</span>

					</p>

				</a>
			</td>
		</tr>
		<?php } } ?>
	</table>
