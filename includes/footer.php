        <div class = "navbar navbar-default navbar-fixed-bottom">
        <?php
            if(isset($_SESSION['username'])&&isset($_SESSION['password'])){ ?>
            <div class="pull-right" style="padding: 10px;">
                <span style="font-size: 12px; margin-right:10px;">
                    <a href="#change" data-toggle="modal" data-backdrop="static" data-keyboard="false">Change Password</a></span>
                <form method="post" class="pull-right" action="methods/actions.php">
                    <input type="submit" title="Logout" class="btn btn-sm btn-danger" value="Logout" name="logout">
                </form>
            </div>
        <?php } ?>
            <div class="container text-center">
                <p class="footerCredit">
                    &copy; SIG-OJT Project 2014<br>
                    Sheena Mae J. Erecre ,Gerard Paul P. Labitad
                </p>
            </div>
        </div>
        <script src = "js/jquery-1.10.2.min.js"></script>
        <script src = "js/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
        <script src = "js/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.floatThead.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
        <script src="js/table-fixed-header.js"></script>
        <script src="./js/jqBootstrapValidation.js"></script>
        
        <script type="text/javascript">
            $(function () {
                $('.nav-tabs a:first').tab('show');            
            });
            
            $("[rel='popover']").popover({ trigger: "hover" });
            
            $(document).ready(function(){
                $('.table-fixed-header').fixedHeader();
            });
            
            $(document).ready(function () {
               $("#confirm_password").keyup(checkPasswordMatch);
            });
            
            $(document).on("click", "#toggle_edit", function() {
                if ($(".modal-body .edits").is(':disabled')) {
                    $(".modal-body .edits").prop('disabled', false);
                }
                else{
                    $(".modal-body .edits").prop('disabled', true);
                }
                $("#toggle_edit").hide();
                $("#edit_entry").show();
            });
            
            $(document).on("click", ".edit_cancel", function() {
                $(".modal-body .edits").prop('disabled', true);
                $("#toggle_edit").show();
                $("#edit_entry").hide();
            });
            
            $(document).on("click", "#toggle_all", function() {
                if ($(".modal-body .check").is(':checked')) {
                    $(".modal-body .check").prop('checked', false);
                }
                else{
                    $(".modal-body .check").prop('checked', true);
                }
            });
            
            $(document).on("click", ".edit", function () {
                    var id_edit = $(this).data('id');
                    $.ajax({
                        url: 'methods/query.php',
                        type: 'POST',
                        data: { dataID: id_edit },
                        dataType: 'JSON',
                        success: function(data){
                            $(".modal-body #edit_id").val( data[0].ID );
                            $(".modal-body #edit_floor").val( data[0].floor );
                            $(".modal-body #edit_username").val( data[0].username_owner );
                            $(".modal-body #edit_loc").val( data[0].department_location );
                            $(".modal-body #edit_comp").val( data[0].computername );
                            $(".modal-body #edit_comp_asset").val( data[0].asset_tag_computer );
                            $(".modal-body #edit_num_monitor").val( data[0].number_of_monitor );
                            $(".modal-body #edit_monitor").val( data[0].brand_of_monitor );
                            $(".modal-body #edit_monitor_asset").val( data[0].asset_tag_monitor );
                            $(".modal-body #edit_os").val( data[0].os );
                            $(".modal-body #edit_oem").val( data[0].oem );
                            $(".modal-body #edit_avv").val( data[0].avv );
                            $(".modal-body #edit_processor").val( data[0].processor );
                            $(".modal-body #edit_ram").val( data[0].ram );
                            $(".modal-body #edit_hdd").val( data[0].hard_drive );
                            $(".modal-body #edit_msoffice").val( data[0].ms_office_version );
                            $(".modal-body #edit_others").val( data[0].others );
                            $(".modal-body #edit_dategiven").val( data[0].date_given );
                            $(".modal-body #edit_datepulledout").val( data[0].date_pulled_out );
                        }
                    });
               });
            $(function() {
                $( "#add_dategiven" ).datepicker();
            });
            $(function() {
                $( "#add_datepulledout" ).datepicker();
            });
            $(function() {
                $( "#edit_dategiven" ).datepicker();
            });
            $(function() {
                $( "#edit_datepulledout" ).datepicker();
            });
            $(document).ready(function(){
                 $('#fileselectbutton').click(function(e){
                 $('#file').trigger('click');
                });
                $('#file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#filename').val(file[file.length-1]);
                });
            });
            $(document).ready(function(){
                $("input:file").change(
                    function(){
                        if ($(this).val()) {
                            $("input:submit").attr("disabled", false);
                        }
                    });
            });
            $(document).on("click", ".upload_cancel", function() {
                $("#file").val('');
                $("#filename").val('');
                $("#uploadData").prop('disabled',true);
            });
            $(document).on("click", ".change_cancel", function() {
                $(".changepw").val('');
                $("#divCheckPasswordMatch").html("");
                $("#changePassword").prop('disabled', true);
            });
            function checkOldPassword(){
                var password = $("#old_password").val();
                var oldpassword = $("#old").val();
                
                if (password != oldpassword){
                    $("#divCheckPasswordMatch").html("Your old password is not correct!");
                }else{
                    $("#divCheckPasswordMatch").html("");
                }
            }
            function checkPasswordMatch() {
                var confirmPassword = $("#confirm_password").val();
                var password = $("#new_password").val();
                
                if (password != confirmPassword){
                    $("#divCheckPasswordMatch").html("Passwords do not match!");
                }
                else{
                    $("#divCheckPasswordMatch").html("Passwords match!");
                    $("#changePassword").attr("disabled", false);
                }
            }
        </script>
    </body>
</html>