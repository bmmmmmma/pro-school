<div class="col-xs-12 col-sm-3 widget-container-col aside1" id="widget-container-col-2">

  <div class="widget-box widget-color-blue" id="widget-box-2">

    <div class="widget-body">

      <div class="widget-main no-padding">

        <table class="table table-striped table-bordered table-hover">

          <tbody>
          <?php if(isset($categories)){ foreach($categories as $value){ ?>
            <tr>
              <td>
                <a href="<?= base_url() ?>index.php/tests/index/<?= $value['id'] ?>">
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
  
    <div class="page-header">
      <h1>
        Тест по курсу "<?= $course[0]['title']; ?>"
      </h1>
    </div>
  
  <form method="POST">
  <?php foreach($questions as $key => $ques){ ?>
      <div class="control-group">
        <label class="control-label bolder blue"> <h3> <?= ($key + 1)."."; ?> <?= nl2br($ques['question']); ?> </h3></label>
        
        
        <input checked name="<?= $key; ?>" type="radio"  hidden value="0" >
      
        <?php foreach($options as $opt){ if($opt['question_id'] == $ques['id']){ ?>
        <div class="radio">
          <label>
            <h4> <input name="<?= $key; ?>" type="radio" value="<?= $opt['id'] ?>" class="ace">
             <span class="lbl">  <?= $opt['text']; ?> </span> </h4>
          </label>
        </div>
         <?php } } ?>
      </div>
  <?php } ?>

  <button class="btn btn-info" name="submit">
    <i class="ace-icon fa fa-check bigger-110"></i>
    Завершить тест
  </button>
  </form>