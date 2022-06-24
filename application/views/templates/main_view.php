					
					
						<div class="row ">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">  <span id="in"> </span> 
							
											
										</h3>
										
										<form method="POST">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<?php function isMobile() { 

										return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
										} ?>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Комната</th>
														<th>Счет</th>
														<th>Пароль</th>

														<th class="hidden-480"> Дата </th>
														<th>Статус</th>
														<th class="hidden-480">Комментарий</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
													<?php if (isset($rooms)){ foreach ($rooms as $value){?>
													<?php if(isset($up) && $value['id'] == $up){ ?>
														<tr>
														<td>
															<input type="text" name="name" value="<?= $value['name']; ?>">
														</td>
														<td><input type="text" name="balance" value="<?= $value['balance']; ?>"></td>
														<td><input type="text" name="password" value="<?= $value['password']; ?>"></td>
														<td class="hidden-480"><?= $value['date']; ?></td>

														<td>
															<?php if($value['status'] == 1){ ?>
															
															<?php if(isMobile()){ ?>
																	<span class="label label-sm label-success arrowed arrowed-righ">Своб</span>
															<?php } else{ ?>
																	<span class="label label-sm label-success arrowed arrowed-righ">Свободная</span>
															<?php } ?>
															<?php } else{ ?>
															<?php if(isMobile()){ ?>
																	<span class="label label-sm label-danger arrowed arrowed-in">Зан</span>
															<?php } else{ ?>
																	<span class="label label-sm label-danger arrowed arrowed-in">Занятая</span>
															<?php } ?>
															
															<?php } ?>
														</td>

														<td class="hidden-480">
															<input type="text" name="comment" value="<?= $value['comment']; ?>">
														
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
															
																<button class="btn btn-xs btn-success" value="<?= $up ?>" name="update">
																		<i class="ace-icon fa fa-check bigger-120"></i>
																</button>

															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<button class="btn btn-xs btn-success" name="update">
																					<i class="ace-icon fa fa-check bigger-120"></i>
																			</button>
																		</li>

																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php } ?>
													<tr>
														<td>
															<a href="#"><?= $value['name']; ?></a>
														</td>
														<td><?= $value['balance']; ?></td>
														<td><?= $value['password']; ?></td>
														<td class="hidden-480"><?= $value['date']; ?></td>

														<td>
															<?php if($value['status'] == 1){ ?>
															
															<?php if(isMobile()){ ?>
																	<span class="label label-sm label-success arrowed arrowed-righ">Своб</span>
															<?php } else{ ?>
																	<span class="label label-sm label-success arrowed arrowed-righ">Свободная</span>
															<?php } ?>
															<?php } else{ ?>
															<?php if(isMobile()){ ?>
																	<span class="label label-sm label-danger arrowed arrowed-in">Зан</span>
															<?php } else{ ?>
																	<span class="label label-sm label-danger arrowed arrowed-in">Занятая</span>
															<?php } ?>
															
															<?php } ?>
														</td>

														<td class="hidden-480"><?= $value['comment']; ?></td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
															
															<?php if(!isset($up)) { ?>	
															<button  value="<?= $value['id']?>"  name = "green" class="btn btn-white btn-success btn-sm">Success</button>
															<button  value="<?= $value['id']?>" name = "red" class="btn btn-white btn-danger btn-sm">Danger</button>
															<button class="btn btn-xs btn-info" name="up" value="<?= $value['id']; ?>">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<button  value="<?= $value['id']?>"  name = "green" class="btn btn-white btn-success btn-sm">Success</button>
																		</li>

																		<li>
																			<button  value="<?= $value['id']?>" name = "red" class="btn btn-white btn-danger btn-sm">Danger</button>
																		</li>

																	</ul>
																</div>
															</div>
															<?php } ?>	
														</td>
													</tr>
													<?php } } ?>
												</tbody>
											</table>
											<?php if(isset($date[0]['month'])){ ?>
											<button name="add_row_to_archive" id="id-btn-dialog2" class="btn btn-success btn-block">Добавить изменения в таблицу <?= $date[0]['month'].'.'.$date[0]['year']; ?>  </button>
											<?php } ?>
											
											<div id="dialog-confirm" class="hide">
                                            	<div class="space-6"></div>
                                            
                                            	<p class="bigger-110 bolder center grey">
                                            		<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
                                            		Are you sure?
                                            	</p>
                                            </div><!-- #dialog-confirm -->		
										</div>
									</div>
								
					</form>
							
			
		

		<!-- page specific plugin scripts -->
		<script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/js/dataTables.buttons.min.js"></script>
		<script src="<?= base_url() ?>assets/js/buttons.flash.min.js"></script>
		<script src="<?= base_url() ?>assets/js/buttons.html5.min.js"></script>
		<script src="<?= base_url() ?>assets/js/buttons.print.min.js"></script>
		<script src="<?= base_url() ?>assets/js/buttons.colVis.min.js"></script>
		<script src="<?= base_url() ?>assets/js/dataTables.select.min.js"></script>
		<script src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>
		<script src="<?= base_url() ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		
		<script type="text/javascript">
			function fallbackCopyTextToClipboard(text) {
			  var textArea = document.createElement("textarea");
			  textArea.value = text;
			  document.body.appendChild(textArea);
			  textArea.focus();
			  textArea.select();

			  try {
			    var successful = document.execCommand('copy');
			    var msg = successful ? 'successful' : 'unsuccessful';
			    console.log('Fallback: Copying text command was ' + msg);
			  } catch (err) {
			    console.error('Fallback: Oops, unable to copy', err);
			  }

			  document.body.removeChild(textArea);
			}
			function copyTextToClipboard(text) {
			  if (!navigator.clipboard) {
			    fallbackCopyTextToClipboard(text);
			    return;
			  }
			  navigator.clipboard.writeText(text).then(function() {
			    console.log('Async: Copying to clipboard was successful!');
			  }, function(err) {
			    console.error('Async: Could not copy text: ', err);
			  });
			}

			var copyBobBtn = document.querySelector('.cl');

			copyTextToClipboard('<?php  if(isset($pass)) echo $pass; ?>');
			
			<?php  if(isset($pass)){ ?>
			alert('Успешно скопировано');
			<?php  } ?>
			// $('#gritter-without-image').on(ace.click_event, function(){
				// $.gritter.add({
				// 	// (string | mandatory) the heading of the notification
				// 	title: 'This is a notice without an image!',
				// 	// (string | mandatory) the text inside the notification
				// 	text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				// 	class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
				// });

				// return false;
			// });

		</script>


		<script type="text/javascript">
			//override dialog's title function to allow for HTML titles
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
			
			
				$( "#id-btn-dialog2" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm" ).removeClass('hide').dialog({
						resizable: false,
						width: '320',
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Подтвердите добавление</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "</i>&nbsp; Подтвердить ",
								"class" : "btn btn-success btn-minier",
								click: function() {
									$.ajax({
										type: "POST",
										data: {add_row_to_archive: 1},
										success: function(){
											window.location.href = '<?= base_url(); ?>';
										}
									});
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-minier",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});


				$( "#id-btn-dialog1" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm" ).removeClass('hide').dialog({
						resizable: false,
						width: '320',
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Подтвердите обнуление</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "</i>&nbsp; Подтвердить ",
								"class" : "btn btn-success btn-minier",
								click: function() {
									$.ajax({
										type: "POST",
										data: {clear: 1},
										success: function(){
											window.location.href = '<?= base_url(); ?>';
										}
									});
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-minier",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
		</script>
		

		<script type="">
			$('#minus').click(function() {
				$.ajax({
				      type: 'POST',
				      data: { minus: 1 },
				      success: function(result) {
				      	document.getElementById('in').innerHTML=result;

				      	//console.log(result);
				      }
				});
			});
		</script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  null, null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>

