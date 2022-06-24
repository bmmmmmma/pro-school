<textarea  id="editor" rows='10' data-min-rows='10' class="autoExpand form-control" name="text"></textarea>

<script type="text/javascript" src="<?= base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<!-- <script type="text/javascript" src="<?= base_url() ?>assets/js/AjexFileManager/ajex.js"></script> -->



<script type="text/javascript">
	var editor = CKEDITOR.replace('editor',{height: 500});
	AjexFileManager.init({returnTo: 'ckeditor', editor: editor});
</script>