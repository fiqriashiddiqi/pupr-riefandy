
  
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
</body>
</html>
