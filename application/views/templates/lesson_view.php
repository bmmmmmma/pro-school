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
  <?php if (isset($lesson)){ ?>
  <div class="page-header center">
      <h1>

                <?= $lesson[0]['theme'] ?>
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  <?php foreach($courses as $course){ if($course['id'] == $lesson[0]['course_id']){ ?>
            <a href="<?= base_url() ?>index.php/themes/index/<?= $course['id']?>"> <?= $course["title"] ?> </a>
        <?php } } ?>
                </small>      
        
      </h1>
  </div>

  <blockquote style="font-size: 2rem; ">
        <?= nl2br($lesson[0]['info']); ?>
  </blockquote>
  <?php } ?>
