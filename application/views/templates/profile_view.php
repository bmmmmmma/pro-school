								<?php if(isset($wrong)){ ?>
									<div class="clearfix">
										<div class="pull-left alert alert-success no-margin alert-dismissable">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
											Неправильно введенный пароль. Повторите ещё раз.
										</div>
									</div>
								<?php } ?>
								<div class="hr dotted"></div>
								<div class="">
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>

											<?php if(isset($photo)){ ?>
												<!-- <?php echo $error;?>
 -->
												<?php echo form_open_multipart(base_url().'index.php/profile/do_upload');?>
												<div class='file-input'>
												  <input type='file' name="userfile" required="required">
												  <span class='button'>Выбрать</span>
												  <span class='label' data-js-label>Не выбрано</label>
												</div>

												<div class="editable-buttons">
													<button type="submit" value="upload" class="btn btn-primary btn-sm editable-submit"><i class="glyphicon glyphicon-ok"></i>
													</button>
													<a href="<?= base_url() ?>index.php/profile"><button type="button" class="btn btn-default btn-sm editable-cancel"><i class="glyphicon glyphicon-remove"></i>
													</button>
													</a>
												</div>
												</form>
											<?php } else{ ?>	
												<span class="profile-picture">
													<a href="<?= base_url() ?>index.php/profile/index/1">
														<img id="avatar" class="editable img-responsive" alt="<?= $this->session->userdata('username'); ?>'s Avatar" src="<?= base_url(); ?>assets/images/profile-pic.jpg" />
													</a>
												</span>
											<?php } ?>
												<div class="space-4"></div>
												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white"><?= $this->session->userdata('username'); ?></span>
														</a>
													</div>
												</div>
											</div>
											<div class="space-6"></div>
											<div class="hr hr12 dotted"></div>
										</div>
									<?php if (isset($users)){ foreach($users as $value){ ?>
									<form method="post">

										<div class="col-xs-12 col-sm-9">
											<div class="space-12"></div>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>
													<div class="profile-info-value">
														<?php if (isset($update_name)){ ?>
															<input type="text" id="form-field-2" name="new_name" value="<?= $value['name'] ?>" class="col-xs-10 col-sm-5"> <br /> <br />
															<input type="text" id="form-field-2" name="new_first_name" value="<?= $value['first_name'] ?>" class="col-xs-10 col-sm-5"> <br /> <br />
															
															 <br /> 
															
															<button class="btn btn-xs btn-success" name="save_name">
																	<i class="ace-icon fa fa-check bigger-120"></i>
															</button>
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-reply"></i> 
															</button> 		

														<?php } else { ?>
															<span  ><?php echo $value['first_name'].' '.$value['name'] ; ?></span> &nbsp 
															<button class="btn btn-xs btn-info" name="update_name">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															
														<?php } ?>
													</div>
												</div>

												

												
												<div class="profile-info-row">
													<div class="profile-info-name"> Почта </div>
													<div class="profile-info-value">
														<?php if (isset($update_login)){ ?>
															<input type="text" id="form-field-2" name="new_login" value="<?= $value['email'] ?>" class="col-xs-10 col-sm-5"> <br /> <br />
													
															
															<button class="btn btn-xs btn-success" name="save_login">
																	<i class="ace-icon fa fa-check bigger-120"></i>
															</button>
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-reply"></i> 
															</button> 		

														<?php } else { ?>
															<span><?= $value['email']?></span> &nbsp 
															<button class="btn btn-xs btn-info" name="update_login">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
														<?php } ?>
													</div>

													
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Пароль </div>

													<div class="profile-info-value">
														<span class="editable" id="about">
															<?php if(isset($change_password) || isset($wrong)){ ?>
																
																<input type="password" id="form-field-2" name="current_password" placeholder="Нынешний пароль" class="col-xs-10 col-sm-5"> <br /> <br />
																<input type="password" id="form-field-2" name="new_password" placeholder="Новый пароль" class="col-xs-10 col-sm-5">
																<br /> <br />
																<input type="password" id="form-field-2" name="new_password_confirm" placeholder="Напишите новый парль  ещё раз" class="col-xs-10 col-sm-5">
																<br /> <br />
																<button class="btn btn-xs btn-success" name="save">
																		<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-reply"></i> 
																</button> 			
															<?php } else { ?>
																<button class="btn btn-xs btn-info" name="update_password">
																		<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>
															<?php } ?>
													</div>
												</div>
												
											</div>
											<div class="space-20"></div>
										</div>
									</form>
								<?php } } ?>
									</div>
								</div>
		

















		
	<style type="text/css">

	.file-input {
	  display: inline-block;
	  text-align: left;
	  background: #fff;
	  padding: 16px;
	  width: 450px;
	  position: relative;
	  border-radius: 3px;
	}

	.file-input > [type='file'] {
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  opacity: 0;
	  z-index: 10;
	  cursor: pointer;
	}

	.file-input > .button {
	  display: inline-block;
	  cursor: pointer;
	  background: #eee;
	  padding: 8px 16px;
	  border-radius: 2px;
	  margin-right: 8px;
	}

	.file-input:hover > .button {
	  background: dodgerblue;
	  color: white;
	}

	.file-input > .label {
	  color: #333;
	  white-space: nowrap;
	  opacity: .3;
	}

	.file-input.-chosen > .label {
	  opacity: 1;
	}
</style>
											
<script type="text/javascript">
		// Also see: https://www.quirksmode.org/dom/inputfile.html

var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
  customInput(inputs[i])
}

function customInput (el) {
  const fileInput = el.querySelector('[type="file"]')
  const label = el.querySelector('[data-js-label]')
  
  fileInput.onchange =
  fileInput.onmouseout = function () {
    if (!fileInput.value) return
    
    var value = fileInput.value.replace(/^.*[\\\/]/, '')
    el.className += ' -chosen'
    label.innerText = value
  }
}
</script>