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

  <div class="page-header center">
      <h1>
        <?= $name[0]['title']; ?>
      </h1>
  </div>

  <blockquote style="font-size: 2rem; ">
      <?php if(isset($themes)){ foreach($themes as $key => $value){ ?>
        <a href="<?= base_url() ?>index.php/lesson/index/<?= $value['id']?>"> <?= ($key + 1).". ".$value["theme"] ?> </a>
        </br>
      <?php } } ?>
  </blockquote>
  
