<?php if(isset($add)){ ?>
	<div class="page-header">
							<h1>
								Добавить меяц 
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-4">
								<form class="form-horizontal" method="POST">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Номер меcяца </label>

										<div class="col-sm-9">
											<input type="number" name="month" id="form-field-1" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Год </label>

										<div class="col-sm-9">
											<input type="number" name="year" id="form-field-1" class="col-xs-10 col-sm-5" />
										</div>
									</div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button name="add_arch" class="btn btn-info">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<a href="<?= base_url() ?>index.php/archive" >
												<button class="btn" >
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
												</button>
											</a>
										</div>
									</div>
								</form>
								
							</div><!-- /.span -->
						</div><!-- /.row -->
<?php } else if(isset($archive)){ ?>


	<?php 

		while (count($arr) < 32) {
		    array_push($arr, '');
		}

	?>
						<div class="page-header">
							<h1>
								Архив 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?= $archive[0]['month']; ?>.<?= $archive[0]['year']; ?>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

								<form method="POST">
								<table id="simple-table" class="table  table-bordered table-hover">
									<thead>
										<tr>
											<th> Комната</th>
											<th> 1 неделя </th>
											<th> 2 неделя</th>
											<th> 3 неделя</th>
											<th> 4 неделя</th>

											<th>
												<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
												Итого
											</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td> <?= $rooms[0]['name']; ?> </td>
											<td> <input type="number" name="1_1" value="<?= $arr[0]; ?>"> </td>
											<td> <input type="number" name="1_2" value="<?= $arr[8]; ?>"> </td>
											<td> <input type="number" name="1_3" value="<?= $arr[16]; ?>"> </td>
											<td> <input type="number" name="1_4" value="<?= $arr[24]; ?>"> </td>
											<td> <?= intval($arr[0]) +  intval($arr[8]) + intval($arr[16]) + intval($arr[24]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[1]['name']; ?> </td>
											<td> <input type="number" name="2_1" value="<?= $arr[1]; ?>"> </td>
											<td> <input type="number" name="2_2" value="<?= $arr[9]; ?>"> </td>
											<td> <input type="number" name="2_3" value="<?= $arr[17]; ?>"> </td>
											<td> <input type="number" name="2_4" value="<?= $arr[25]; ?>"> </td>
											<td> <?= intval($arr[1]) +  intval($arr[9]) + intval($arr[17]) + intval($arr[25]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[2]['name']; ?> </td>
											<td> <input type="number" name="3_1" value="<?= $arr[2]; ?>"> </td>
											<td> <input type="number" name="3_2" value="<?= $arr[10]; ?>"> </td>
											<td> <input type="number" name="3_3" value="<?= $arr[18]; ?>"> </td>
											<td> <input type="number" name="3_4" value="<?= $arr[26]; ?>"> </td>
											<td> <?= intval($arr[2]) +  intval($arr[10]) + intval($arr[18]) + intval($arr[26]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[3]['name']; ?> </td>
											<td> <input type="number" name="4_1" value="<?= $arr[3]; ?>"> </td>
											<td> <input type="number" name="4_2" value="<?= $arr[11]; ?>"> </td>
											<td> <input type="number" name="4_3" value="<?= $arr[19]; ?>"> </td>
											<td> <input type="number" name="4_4" value="<?= $arr[27]; ?>"> </td>
											<td>  <?= intval($arr[3]) +  intval($arr[11]) + intval($arr[19]) + intval($arr[27]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[4]['name']; ?> </td>
											<td> <input type="number" name="5_1" value="<?= $arr[4]; ?>"> </td>
											<td> <input type="number" name="5_2" value="<?= $arr[12]; ?>"> </td>
											<td> <input type="number" name="5_3" value="<?= $arr[20]; ?>"> </td>
											<td> <input type="number" name="5_4" value="<?= $arr[28]; ?>"> </td>
											<td> <?= intval($arr[4]) +  intval($arr[12]) + intval($arr[20]) + intval($arr[28]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[5]['name']; ?> </td>
											<td> <input type="number" name="6_1" value="<?= $arr[5]; ?>"> </td>
											<td> <input type="number" name="6_2" value="<?= $arr[13]; ?>"> </td>
											<td> <input type="number" name="6_3" value="<?= $arr[21]; ?>"> </td>
											<td> <input type="number" name="6_4" value="<?= $arr[29]; ?>"> </td>
											<td> <?= intval($arr[5]) +  intval($arr[13]) + intval($arr[21]) + intval($arr[29]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[6]['name']; ?> </td>
											<td> <input type="number" name="7_1" value="<?= $arr[6]; ?>"> </td>
											<td> <input type="number" name="7_2" value="<?= $arr[14]; ?>"> </td>
											<td> <input type="number" name="7_3" value="<?= $arr[22]; ?>"> </td>
											<td> <input type="number" name="7_4" value="<?= $arr[30]; ?>"> </td>
											<td> <?= intval($arr[6]) +  intval($arr[14]) + intval($arr[22]) + intval($arr[30]) ?> </td>
										</tr>

										<tr>
											<td> <?= $rooms[7]['name']; ?> </td>
											<td> <input type="number" name="8_1" value="<?= $arr[7]; ?>"> </td>
											<td> <input type="number" name="8_2" value="<?= $arr[15]; ?>"> </td>
											<td> <input type="number" name="8_3" value="<?= $arr[23]; ?>"> </td>
											<td> <input type="number" name="8_4" value="<?= $arr[31]; ?>"> </td>
											<td> <?= intval($arr[7]) +  intval($arr[15]) + intval($arr[23]) + intval($arr[31]) ?> </td>
										</tr>

										<tr>
											<td>  </td>
											<td>
												<?php $res = 0; $sum = 0; for($i = 0; $i <= 7; ++$i){ $sum += intval($arr[$i]); } echo $sum; $res += $sum; ?> 
											</td>
											<td> <?php $sum = 0; for($i = 8; $i <= 15; ++$i){ $sum += intval($arr[$i]); } echo $sum; $res += $sum;?> 
											</td>
											<td> <?php $sum = 0; for($i = 16; $i <= 23; ++$i){ $sum += intval($arr[$i]); } echo $sum; $res += $sum;?> </td>
											<td> <?php $sum = 0; for($i = 24; $i <= 31; ++$i){ $sum += intval($arr[$i]); } echo $sum; $res += $sum;?> </td>
											<td> <?= $res; ?> </td>
										</tr>
										
									</tbody>
								</table>

								<button name="update_archive" class="btn btn-success btn-block">Сохранить изменения </button>
								</form>
							</div><!-- /.span -->
						</div><!-- /.row -->
<?php } else{ ?>


						<div class="page-header">
							<h1>
								Архив 
								
								<div class="pull-right">
									
								</div><!-- /.page-header -->

							</h1>
						</div><!-- /.page-header -->
						
						
					
						<div class="row ">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">

										<form method="POST">

										<div class="clearfix">

											<div class="pull-right tableTools-container">
										
												<button name="add" class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"><span><i class="fa fa-plus bigger-110 blue"></i></span></button>

											
											</div>
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>Дата </th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													<?php foreach ($archives as $value){?>
													<tr>
														

														<td>
<a href="<?= base_url() ?>index.php/archive/index/<?= $value['id'] ?>"><?= $value['month'].'-'.$value['year']; ?></a>
														</td>
														
														<td>

															<!-- <div class="hidden-sm hidden-xs action-buttons"> -->
																
																<button name="delete_archive" value="<?= $value['id']; ?>" class="id-btn-dialog2 btn  btn-danger btn-sm">
																	<i class="ace-icon fa fa-trash-o bigger-100"></i>
																</button>
																<div id="dialog-confirm" class="hide">
        			                                            	<div class="space-6"></div>
        			                                            
        			                                            	<p class="bigger-110 bolder center grey">
        			                                            		<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
        			                                            		Are you sure?
        			                                            	</p>
        			                                            </div><!-- #dialog-confirm -->	
															<!-- </div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<button name="delete_archive" value="<?= $value['id']; ?>" class="btn  btn-danger btn-sm">
																			<i class="ace-icon fa fa-trash-o bigger-100"></i>
																		</button>													
																	</ul>
																</div>
															</div> -->
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
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
			//override dialog's title function to allow for HTML titles
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
			
			
				$( ".id-btn-dialog2" ).on('click', function(e) {
					e.preventDefault();
					var id = this.value;
					$( "#dialog-confirm" ).removeClass('hide').dialog({
						resizable: false,
						width: '320',
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Подтвердите удаление</h4></div>",
						title_html: true,

						buttons: [
							{
								html: "</i>&nbsp; Подтвердить ",
								"class" : "btn btn-success btn-minier",
								click: function() {
									$.ajax({
										type: "POST",
										data: {delete_archive: id},
										success: function(){
											location.reload(true);
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
					  
					  null,
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

<?php } ?>

