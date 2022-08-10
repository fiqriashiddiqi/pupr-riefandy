
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> <?php echo $this->config->item('version') ?>
    </div>
    <strong>Copyright &copy; <?php echo $this->config->item('site_years') ?> <a href="<?php echo $this->config->item('site_google') ?>" target="_blank"><?php echo $this->config->item('site_copyright') ?></a>.</strong> All rights
    reserved.

    


  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/LTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/LTE/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/LTE/bootstrap/js/bootstrap.min.js"></script>

<!-- Morris.js charts -->
<!-- <script src="<?php echo base_url();?>assets/LTE/dist/js/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/morris/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/LTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/LTE/plugins/knob/jquery.knob.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url();?>assets/LTE/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/LTE/dist/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/LTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/LTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/LTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/LTE/dist/js/app.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>assets/LTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>assets/LTE/plugins/select2/select2.full.min.js"></script>

<!-- Toggle -->
<script src="<?php echo base_url();?>assets/LTE/plugins/bootstrap-toggle/js/bootstrap-toggle.js"></script>

<script src="<?php echo base_url();?>assets/LTE/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- <script src="<?php echo base_url();?>assets/LTE/plugins/ckeditor/ckeditor.js"></script> -->

<script src="<?php echo base_url();?>assets/LTE/plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo base_url();?>assets/LTE/plugins/bootbox.min.js"></script>
<script src="<?php echo base_url();?>assets/LTE/plugins/jquery.doubleScroll.js"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url();?>assets/LTE/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url();?>assets/LTE/dist/js/demo.js"></script> -->
<script type="text/javascript">


$(document).ready(function(){
  $('.double-scroll').doubleScroll();
});


$(".texteditor").wysihtml5();

$("#table-test").DataTable({
  "pageLength": 25,
  "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
});

$("#table-test2").DataTable({
  "pageLength": 25,
  "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
});

$(".select2").select2();

$("[data-mask]").inputmask();

$('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
});

$('.years_only').datepicker({
      format: 'yyyy',
      viewMode: "years", 
      minViewMode: "years"
});

$('.months_only_future_disable').datepicker({

   format: 'yyyy-mm',
   // You used '+0d' that is for days instead of '+0m' that is for months.
   endDate: '+0m',
   viewMode: "months", 
   minViewMode: "months"

});

// closing gl

$('.months_only_past_disable').datepicker({

   format: 'yyyy-mm-dd',
   // You used '+0d' that is for days instead of '+0m' that is for months.
   startDate: '<?php echo @$closing_date_max;?>',
   // endDate: '<?php echo @$closing_date_max;?>',
});

// end closing gl

$('.years_only_future_disable').datepicker({

   format: 'yyyy',
   // You used '+0d' that is for days instead of '+0m' that is for months.
   endDate: '+0y',
   viewMode: "years", 
   minViewMode: "years"

});

$('.datetimepicker').datetimepicker({
      format: 'YYYY-MM-DD HH:mm:ss'
});

$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
});


function toggleFullscreen(elem) {
  elem = elem || document.documentElement;
  if (!document.fullscreenElement && !document.mozFullScreenElement &&
    !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

document.getElementById('zoomapps').addEventListener('click', function() {
  toggleFullscreen();
});

$(document).ready(function(){
    $(".rupiah").on("keyup", function(e){
      alert("tets");
      var dengan_rupiah = formatRupiah(this.value, "Rp. ");
      $(".rupiah").val(dengan_rupiah);
    });
});
    
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split   = number_string.split(','),
            sisa    = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
            

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

</script>
<script>
	/**
 * --------------------------------------------------------------------
 * jQuery customfileinput plugin
 * Author: Scott Jehl, scott@filamentgroup.com
 * Copyright (c) 2009 Filament Group 
 * licensed under MIT (filamentgroup.com/examples/mit-license.txt)
 * --------------------------------------------------------------------
 */


/**
 * Modifications: Terry Young (terryyounghk at gmail dot com)
 *
 * ##1: Added 'option' parameter. Initially for optionally specifying a width. Default is 'inherit' (i.e. not specified)
 * ##2: Added options 'buttonText', 'inputText' and 'changeText'
 * ##3: Added option 'maxFileSize'. For this technique, @see: http://www.tizag.com/htmlT/htmlupload.php
 * ##4: Added auto-truncating the file name if text exceeds the available width (Uses the window.onresize event)
 * ##5: Added option 'showInputText'. Default is true
 * ##6: Added event handler 'onChange'
 */
$.fn.customFileInput = function(options){

// ##1 ++
var defaults = {
	width: 'inherit',
	buttonText: 'Browse',
	changeText: 'Change',
	inputText: 'No file selected',
	showInputText: true,
	maxFileSize: 0, // ##3 ++

	onChange: $.noop
};

// ##1 ++
var opts = $.extend(true, {}, defaults, options);

//apply events and styles for file input element
var fileInput = $(this)
	.addClass('customfile-input') //add class for CSS
	.mouseover(function(){ upload.addClass('customfile-hover'); })
	.mouseout(function(){ upload.removeClass('customfile-hover'); })
	.focus(function(){
		upload.addClass('customfile-focus'); 
		fileInput.data('val', fileInput.val());
	})
	.blur(function(){ 
		upload.removeClass('customfile-focus');
		$(this).trigger('checkChange');
	 })
	 .bind('disable',function(){
		 fileInput.attr('disabled',true);
		upload.addClass('customfile-disabled');
	})
	.bind('enable',function(){
		fileInput.removeAttr('disabled');
		upload.removeClass('customfile-disabled');
	})
	.bind('checkChange', function(){
		if(fileInput.val() && fileInput.val() != fileInput.data('val')){
			fileInput.trigger('change');
		}
	})
	.bind('change', function() {
		// ##5 ++
		if (opts.showInputText) {

			//get file name
			var fileName = $(this).val().split(/\\/).pop();

			$(this).data('text', fileName);

			//get file extension
			var fileExt = 'customfile-ext-' + fileName.split('.').pop().toLowerCase();

			//change text of button
			// uploadButton.text('Change'); // ##2 --
			uploadButton.text(opts.changeText); // ##2 ++

			//update the feedback
			uploadFeedback
				.text(fileName) //set feedback text to filename
				.removeClass(uploadFeedback.data('fileExt') || '') //remove any existing file extension class
				.addClass(fileExt) //add file extension class
				.data('fileExt', fileExt) //store file extension for class removal on next change
				.addClass('customfile-feedback-populated'); //add class to show populated state


			autoTruncateFileName();
		}

		if ($.isFunction(opts.onChange)) {
			opts.onChange.apply(this, arguments);
		}
	})
	.click(function(){ //for IE and Opera, make sure change fires after choosing a file, using an async callback
		fileInput.data('val', fileInput.val());
		setTimeout(function(){
			fileInput.trigger('checkChange');
		},100);
	});

//create custom control container
var upload = $('<div class="customfile"></div>');

// ##1 ++
upload.css({
	width: opts.width
});

//create custom control button
// ##2
var uploadButton = $('<span class="customfile-button" aria-hidden="true"></span>').html(opts.buttonText).appendTo(upload);
//create custom control feedback
// ##2
var uploadFeedback = $('<span class="customfile-feedback" aria-hidden="true"></span>').html(opts.inputText).appendTo(upload);

// ##3
if (opts.maxFileSize > 0 && $('input[type="hidden"][name="MAX_FILE_SIZE"]').length == 0) {
	$('<input type="hidden" name="MAX_FILE_SIZE">').val(opts.maxFileSize).appendTo(upload);
}


// ##4 ++
var autoTruncateFileName = function () {
	//get file name
	var fileName = fileInput.val() || opts.inputText;

	if (fileName.length) {
		var limit = 0, // ensuring we're not going into an infinite loop
			trimmedFileName = fileName;
		uploadFeedback
			.text(fileName)
			.css({ display: 'inline' });
		while (limit < 1024 && trimmedFileName.length > 0 && uploadButton.outerWidth() + uploadFeedback.outerWidth() + 5 >= uploadButton.parent().innerWidth()) {
			trimmedFileName = trimmedFileName.substr(0, trimmedFileName.length - 1);
			uploadFeedback.text(trimmedFileName + '...');
			limit++;
		}
		uploadFeedback.css({ display: 'block' }); // ##4
	}
};

//match disabled state
if(fileInput.is('[disabled]')){
	fileInput.trigger('disable');
}

uploadFeedback.data('text', opts.inputText);

// ##5 ++
if (! opts.showInputText ) {
	uploadFeedback.hide();
	uploadButton
		.css({
			float: 'inherit',
			display: 'block' // take up the full width of the parent container
		})
		.parent()
		.css({
			padding: 0
		});
} else {
	uploadFeedback.css({
		display: 'block'
	});

	$(window).bind('resize', autoTruncateFileName);

}


//on mousemove, keep file input under the cursor to steal click
upload
	.mousemove(function(e){
		fileInput.css({
			'left': e.pageX - upload.offset().left - fileInput.outerWidth() + 20, //position right side 20px right of cursor X)
			'top': e.pageY - upload.offset().top - $(window).scrollTop() - 3
		});    
	})
	.insertAfter(fileInput); //insert after the input

fileInput.appendTo(upload);
	
//return jQuery
return $(this);
};








/**
* ----------------------------------------------------------
* EXAMPLE
*/
$(function(){

// default
	$('#file_A').customFileInput();
  $('#file_As').customFileInput();
  $('#file_Ad').customFileInput();
  $('#file_Aa').customFileInput();

// percentage width
	$('#file_B').customFileInput({
		width: '50%'
	});

// Custom Text
	$('#file_C').customFileInput({
		width: '30%',
		buttonText: 'Select File',
		changeText: 'Change File',
		inputText: 'Please select a file'
	});

// Very short field (to test auto-truncated file name)
	$('#file_D').customFileInput({
		width: 150,
		inputText: ''
	});

// button only
	$('#file_E').customFileInput({
		width: 90,
		buttonText: 'Upload File',
		changeText: 'Change',
		inputText: '',
		showInputText: false
	});

// Event Handlers
	$('#file_F').customFileInput({
		width: 250,
		onChange: function () {
			console.info(arguments);
		}
	});

});
</script>
</body>
</html>
