<!--UPLOAD DATA -->       
        <div class = "modal fade" id = "upload" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <form class="form-horizontal" name="upload" method="post" action="methods/actions.php" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button class="close upload_cancel" data-dismiss="modal">&times;</button>
                            <h4>Upload Data</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <p><span style="color: red;">*Note:</span>
                                        Upload only valid CSV file. Before you upload CSV file, 
                                        <a href="sample/sample.csv">LOOK HERE</a>
                                        to see how the data is formatted in the CSV file. Follow this format to ensure correct
                                        data is uploaded into the database.
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="fileupload fileupload-new col-sm-12" data-provides="fileupload">
                                    <input type="file" id="file" name="file">
                                    <div class="dummyfile">
                                        <input id="filename" type="text" class="input disabled" accept=".csv" name="filename" readonly>
                                        <a id="fileselectbutton" class="btn btn-primary btn-sm">Choose CSV File...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "modal-footer">
                            <a class = "btn btn-default upload_cancel" data-dismiss = "modal">Cancel</a>
                            <input type="submit" name ="upload_data" id="uploadData" value="Upload Data" class="btn btn-success" disabled/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!--SIGNIN DATA -->          
        <div class="modal fade" id="sign_in" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" name="sign-in" method="post">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h3>Sign In</h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="edit_username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                        required data-validation-required-message="Please enter username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                                    required data-validation-required-message="Please enter password">
                                </div>
                            </div>    
                        </div>
                        <div class="modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Cancel</a>
                            <input type="submit" name="sign_in" id="sign_in" value="Sign In" class="btn btn-success" />
                        </div>
                    </form>
                </div>    
            </div>
        </div>

<!--EDIT DATA -->  
        <div class="modal fade" id="edit" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" name="edit" method="post" action="methods/actions.php">
                        <div class="modal-header">
                            <button class="close edit_cancel" data-dismiss="modal">&times;</button>
                            <h4>Entry Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="edit_username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm edits" id="edit_username" name="edit_username" placeholder="Username / Owner" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_loc" class="col-sm-2 control-label">Location</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm edits" id="edit_loc" name="edit_loc" placeholder="Location / Department"  disabled>
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <select class="form-control input-sm edits" id="edit_floor" name="edit_floor" disabled>
                                        <option value="1">1st Floor</option>
                                        <option value="2">2nd Floor</option>
                                        <option value="3">3rd Floor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_comp" class="col-sm-2 control-label">Computer</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control input-sm edits" id="edit_comp" name="edit_comp" placeholder="Computer Name" disabled>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control input-sm edits" id="edit_comp_asset" name="edit_comp_asset" placeholder="Computer Asset Tag" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_monitor" class="col-sm-2 control-label">Monitor</label>
                                <div class="col-sm-2">
                                    <select class="form-control input-sm edits" id="edit_num_monitor" name="edit_num_monitor" disabled>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control input-sm col-sm-4 edits" id="edit_monitor" name="edit_monitor" placeholder="Monitor Brand/s" disabled>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm edits" id="edit_monitor_asset" name="edit_monitor_asset" placeholder="Monitor Asset Tag/s" disabled>
                                </div>
                                    <a class="btn btn-sm" href="#" data-content="In cases where there are more than 1 monitor, separate with backslash( / )."
                                       rel="popover" data-html="true" data-placement="top">
                                        <span class="fa-stack fa-sm">
                                            <i class="fa fa-circle-o fa-stack-2x"></i>
                                            <i class="fa fa-info fa-stack-1x"></i>
                                        </span>
                                    </a>
                               
                            </div>
                            <div class="form-group">
                                <label for="edit_oem" class="col-sm-2 control-label">OEM</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm edits" id="edit_oem" name="edit_oem" placeholder="OEM Sticker" disabled>
                                </div>
                                <label for="edit_ram" class="col-sm-1 control-label">RAM</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm edits" name="edit_ram" id="edit_ram" placeholder="RAM" disabled>
                                </div>
                                <label for="edit_hdd" class="col-sm-1 control-label">HDD</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm edits" id="edit_hdd" name="edit_hdd" placeholder="HDD" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_os" class="col-sm-2 control-label">OS</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm edits" name="edit_os" id="edit_os" placeholder="Operating System" disabled>
                                </div>
                                <label for="edit_processor" class="col-sm-2 control-label">Processor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm edits" id="edit_processor" name="edit_processor" placeholder="Processor" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_avv" class="col-sm-2 control-label">AVV</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm edits" id="edit_avv" name="edit_avv" placeholder="Antivirus Version" disabled>
                                </div>
                                <label for="edit_msoffice" class="col-sm-2 control-label">MSOffice</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm edits" id="edit_msoffice" name="edit_msoffice" placeholder="MS Office Version" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_dategiven" class="col-sm-3 control-label">Date Given</label>
                                <div class = "form-inline col-xs-3">    
                                    <input type="text" class="form-control input-sm edits" id="edit_dategiven" name="edit_dategiven" disabled> 
                                </div>
                                <label for="edit_datepulledout" class="col-sm-3 control-label">Date Pulled Out</label>
                                <div class = "form-inline col-xs-3">    
                                    <input type="text" class="form-control input-sm edits" id="edit_datepulledout" name="edit_datepulledout" disabled> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_others" class="col-sm-2 control-label">Others</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control input-sm edits" rows="2" id="edit_others" name="edit_others" disabled></textarea>
                                </div>
                            </div>
                                <input type="hidden" class="form-control input-sm " id="edit_id" name="edit_id">
                        </div>                        
                        <div class="modal-footer">                           
                            <a class = "btn btn-default edit_cancel" data-dismiss = "modal">Cancel</a>
                            <a class="btn btn-sm btn-primary" id="toggle_edit"><i class="fa fa-edit"></i> Enable Edit</a>
                            <input type="submit" name="edit_entry" id="edit_entry" style="display: none;" value="Update Details" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--ADD DATA -->  
        <div class="modal fade" id="add" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" name="add" method="post" action="methods/actions.php">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h4>Add Entry</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="add_username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="add_username" name="add_username" placeholder="Username / Owner">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_loc" class="col-sm-2 control-label">Location</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" id="add_loc" name="add_loc" placeholder="Location / Department">
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <select class="form-control input-sm" id="add_floor" name="add_floor">
                                        <option value="1">1st Floor</option>
                                        <option value="2">2nd Floor</option>
                                        <option value="3">3rd Floor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_comp" class="col-sm-2 control-label">Computer</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control input-sm" id="add_comp" name="add_comp" placeholder="Computer Name">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control input-sm" id="add_comp_asset" name="add_comp_asset" placeholder="Computer Asset Tag">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_monitor" class="col-sm-2 control-label">Monitor</label>
                                <div class="col-sm-2">
                                    <select class="form-control input-sm" id="add_num_monitor" name="add_num_monitor">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control input-sm col-sm-4" id="add_monitor" name="add_monitor" placeholder="Monitor Brand/s">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm" id="add_monitor_asset" name="add_monitor_asset" placeholder="Monitor Asset Tag/s">
                                </div>
                                    <a class="btn btn-sm" href="#" data-content="In cases where there are more than 1 monitor, separate with backslash( / )."
                                       rel="popover" data-html="true" data-placement="top">
                                        <span class="fa-stack fa-sm">
                                            <i class="fa fa-circle-o fa-stack-2x"></i>
                                            <i class="fa fa-info fa-stack-1x"></i>
                                        </span>
                                    </a>
                               
                            </div>
                            <div class="form-group">
                                <label for="add_oem" class="col-sm-2 control-label">OEM</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm" name="add_oem" id="add_oem" placeholder="OEM Sticker">
                                </div>
                                <label for="add_ram" class="col-sm-1 control-label">RAM</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm" id="add_ram" name="add_ram" placeholder="RAM">
                                </div>
                                <label for="add_hdd" class="col-sm-1 control-label">HDD</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm" id="add_hdd" name="add_hdd" placeholder="HDD">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_os" class="col-sm-2 control-label">OS</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm" id="add_os" name="add_os" placeholder="Operating System">
                                </div>
                                <label for="add_processor" class="col-sm-2 control-label">Processor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm" id="add_processor" name="add_processor" placeholder="Processor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_avv" class="col-sm-2 control-label">AVV</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm" id="add_avv" name="add_avv" placeholder="Antivirus Version">
                                </div>
                                <label for="add_msoffice" class="col-sm-2 control-label">MSOffice</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control input-sm" id="add_msoffice" name="add_msoffice" placeholder="MS Office Version">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_dategiven" class="col-sm-3 control-label">Date Given</label>
                                <div class = "form-inline col-xs-3">    
                                    <input type="text" class="form-control input-sm" id="add_dategiven" name="add_dategiven"> 
                                </div>
                                <label for="add_datepulledout" class="col-sm-3 control-label">Date Pulled Out</label>
                                <div class = "form-inline col-xs-3">    
                                    <input type="text" class="form-control input-sm" id="add_datepulledout" name="add_datepulledout"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="add_others" class="col-sm-2 control-label">Others</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control input-sm" rows="2" id="add_others" name="add_others"></textarea>
                                </div>
                            </div>
                        </div>                        
                        <div class="modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Cancel</a>
                            <input type="submit" name="add_entry" id="add_entry" value="Save" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
<!--PRINT DATA -->          
        <div class = "modal fade" id ="print" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <form class="form-horizontal" name="print" method="post" action="print.php">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">×</button>
                            <h4>Print Options</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                    <div class="col-sm-4">
                                        <h4>Print</h4>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1">
                                    <input type="checkbox" id="print_1st" name="print_1st" class="check" checked="checked">
                                    <span>1st Floor</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1">
                                    <input type="checkbox" id="print_2nd" name="print_2nd" class="check" checked="checked">
                                    <span>2nd Floor</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1">
                                    <input type="checkbox" id="print_3rd" name="print_3rd" class="check" checked="checked">
                                    <span>3rd Floor</span>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-sm-offset-1">
                                        <a class="btn btn-sm btn-default" id="toggle_all">Toggle All</a>
                                    </div>
                            </div>
                        </div>
                        <div class = "modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Cancel</a>
                            <input type="submit" name ="print_data" id="print_data" value="Print Preview" class="btn btn-success"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Change Password -->
        <div class = "modal fade" id = "change" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <form class="form-horizontal" name="change" method="post" action="methods/actions.php" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button class="close change_cancel" data-dismiss="modal">&times;</button>
                            <h4>Change Password</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="old_password" class="col-sm-4 control-label">Old Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control changepw" id="old_password" name="old_password" placeholder="Old Password"
                                        required data-validation-required-message="Please enter old password!"
                                        onchange="checkOldPassword();">
                                    <input type="hidden" name="old" id="old" value="<?php echo $_SESSION['password'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new_password" class="col-sm-4 control-label">New Password</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control changepw" id="new_password" name="new_password" placeholder="New Password"
                                    required data-validation-required-message="Please enter new password.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="col-sm-4 control-label">Confim New Password</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control changepw" id="confirm_password" name="confirm_password" placeholder="Confirm New Password"
                                    required data-validation-required-message="Please re-enter new password."
                                    onchange="checkPasswordMatch();">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-5" style="color: red; font-size: 12px;" id="divCheckPasswordMatch">
                                </div>
                            </div>
                        </div>
                        <div class = "modal-footer">
                            <a class = "btn btn-default change_cancel" data-dismiss = "modal">Cancel</a>
                            <input type="submit" name ="change_password" id="changePassword" value="Change Password" class="btn btn-success" disabled/>
                        </div>
                    </form>
                </div>
            </div>
        </div>