
<div class="col-xs-12 col-sm-12">
  
    <div class="page-header">
      <h1>
        Тест по курсу "<?= $course[0]['title']; ?>"
      </h1>
      <br>

      <h2>
        Общее количество баллов за тест - <?= $attempt[0]['score']; ?>
      </h2>

      <h2>
        Количество неправильных ответов - <?= count($questions) - $attempt[0]['score']; ?>
      </h2>
    </div>
  <?php $arr = explode(',',$attempt[0]['result']);?>
  <?php foreach($arr as $elem){ 
      $t = explode('-', $elem); 
      foreach ($questions as $key=>$ques) { if($ques['id'] == $t[0] && $ques['answer_id'] != $t[1]){ ?>
      <div class="control-group">
        <label class="control-label bolder blue"> <h3> <?= ($key + 1)."."; ?> <?= nl2br($ques['question']); ?> </h3></label>
              
        <?php foreach($options as $opt){ if($opt['question_id'] == $ques['id']){ 
          if($opt['id'] == $t[1]){
        ?>
        <div class="radio">
          <label>
            <h4> <span class="lbl red">  <?= $opt['text']; ?> </span> </h4>
          </label>
        </div>
      <?php } else if($opt['id'] == $ques['answer_id']){ ?>
        <div class="radio">
          <label>
            <h4> <span class="lbl green">  <?= $opt['text']; ?> </span> </h4>
          </label>
        </div>
      <?php } else{ ?>
        <div class="radio">
          <label>
            <h4> <span class="lbl">  <?= $opt['text']; ?> </span> </h4>
          </label>
        </div>
      <?php } } } ?>
      </div>
  <?php } } } ?>

