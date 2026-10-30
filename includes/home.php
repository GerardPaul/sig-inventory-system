
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
?>        
        <div class="container" style="padding-right: 20px; padding-bottom: 10px; width: 100%; padding-top: 0px; margin: 0px;">  
                <div class="btn-group pull-right" >
                        <a href = "#add" title="Add Entry" data-toggle="modal" role="button" class ="btn btn-default btn-sm" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus"></i> Add Entry</a>
                        <a href = "#upload" title="Upload CSV File" data-toggle="modal" role="button" class = "btn btn-default btn-sm" data-backdrop="static" data-keyboard="false"><i class="fa fa-upload"></i> Upload</a>
                        <a href = "#print" title="Print" data-toggle="modal" role="button" class = "btn btn-default btn-sm" data-backdrop="static" data-keyboard="false"><i class="fa fa-print"></i> </a>
                        <a href="index.php" title="Refresh Page" role="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> </a>
                </div>
                <?php
                        if(isset($_GET['upload'])){
                                if($_GET['upload']=="qaz2wsx3edc4rfv5tgb1"){ ?>
                                <div class="alert alert-success alert-dismissable col-sm-3 center-block">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Data Successfully Uploaded!
                                </div>
                                <?php }
                                else{ ?>
                                <div class="alert alert-danger alert-dismissable col-sm-3 center-block">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Something went wrong! Try again!
                                </div>        
                                <?php }
                        }
                        if(isset($_GET['add'])){
                                if($_GET['add']=="BGT54RFVCDE32WSXZAQ1"){ ?>
                                <div class="alert alert-success alert-dismissable col-sm-3 center-block">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Entry Successfully Added!
                                </div>
                                <?php }
                                else{ ?>
                                <div class="alert alert-danger alert-dismissable col-sm-3 center-block">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Something went wrong! Try again!
                                </div>        
                                <?php }
                        }
                        if(isset($_GET['edit'])){
                                if($_GET['edit']=="ZAQ12WSXCDE321QWSAZX"){ ?>
                                <div class="alert alert-success alert-dismissable col-sm-3 center-block">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Entry Successfully Edited!
                                </div>
                                <?php }
                                else{ ?>
                                <div class="alert alert-danger alert-dismissable col-sm-3 center-block">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Something went wrong! Try again!
                                </div>        
                                <?php }
                        }?>
        </div>
                <?php
                if(isset($_POST['search'])){
                                $searchkey = $_POST['srch-term']
                ?>
                <a href = "index.php" title="Back" class = "btn btn-primary btn-sm" style="margin-left:20px"><i class="fa fa-arrow-left"></i> Back</a> 
                         <div class="table-responsive tab-pane fade active in dataCont" id="floor1">
                                
                                    <table class="table table-hover table-striped table-condensed table-bordered">
                                
                                        <thead class="header">
                                            <tr>
                                                <th>Floor</th>
                                                <th>Username / Owner</th>
                                                <th>Department and Location</th>
                                                <th>Computer Name</th>
                                                <th>Processor</th>
                                                <th>RAM</th>
                                                <th>Others</th>
                                            </tr>
                                        
                                        </thead>
                                        
                                        <tbody class="dataCont">
                                            <?php                                
                                                $data = search($searchkey);
                                                foreach ($data as $list){                  
                                                    if($list['others']=="")
                                                        $list['others'] = "No details.";
                                                    echo "<tr >
                                                        <td>".$list['floor'] ."</td>
                                                        <td>". $list['username_owner'] ."</td>
                                                        <td>". $list['department_location'] ."</td>
                                                        <td>". $list['computername'] ."</td>
                                                        <td>". $list['processor'] ."</td>
                                                        <td>". $list['ram'] ."</td>
                                                        <td>
                                                            <a onclick=\"input\" data-toggle=\"modal\" href=\"#edit\"
                                                                        data-id=\"". $list['ID'] ."\" class=\"edit\" data-backdrop=\"static\"
                                                                                data-keyboard=\"false\">
                                                            Details
                                                            </a>
                                                        </td>
                                                    </tr>";
                                               }                
                                
                                             ?>  
                                        </tbody>
                                        
                                    </table>                
                            </div>
                <?php
                }else{
                ?>
                        <div class="con">
                                <ul class="nav nav-tabs" id="tabs">
                                    <li><a href="#floor1" data-toggle="tab" data-id="1"><span>1st Floor</span> </a> </li>
                                    <li><a href="#floor2" data-toggle="tab" data-id="2"><span>2nd Floor</span> </a> </li>
                                    <li><a href="#floor3" data-toggle="tab" data-id="3"><span>3rd Floor</span> </a> </li>
                                </ul>
                                
                                <div class="tab-content" id="tabContents">
                                    <div class="table-responsive tab-pane fade active in dataCont" id="floor1">
                                        
                                            <table class="table table-hover table-striped table-condensed table-bordered" id="printTable">
                                        
                                                <thead class="header">
                                                    <tr>
                                                        <th>Username / Owner</th>
                                                        <th>Department and Location</th>
                                                        <th>Computer Name</th>
                                                        <th>Processor</th>
                                                        <th>RAM</th>
                                                        <th>Others</th>
                                                    </tr>
                                                
                                                </thead>
                                                
                                                <tbody class="dataCont">
                                                    <?php                                
                                                        $data = getFloor(1);
                                                        foreach ($data as $list){                  
                                                            if($list['others']=="")
                                                                $list['others'] = "No details.";
                                                            echo "<tr  >
                                                                <td>". $list['username_owner'] ."</td>
                                                                <td>". $list['department_location'] ."</td>
                                                                <td>". $list['computername'] ."</td>
                                                                <td>". $list['processor'] ."</td>
                                                                <td>". $list['ram'] ."</td>
                                                                <td>
                                                                    <a onclick=\"input\" data-toggle=\"modal\" href=\"#edit\"
                                                                                data-id=\"". $list['ID'] ."\" class=\"edit\" data-backdrop=\"static\"
                                                                                data-keyboard=\"false\">
                                                                    Details
                                                                    </a>
                                                                </td>
                                                            </tr>";
                                                       }                
                                                
                                                     ?>  
                                                </tbody>
                                                
                                            </table>                
                                    </div>
                                    <div class="table-responsive tab-pane fade dataCont" id="floor2">
                                        
                                            <table class="table table-hover table-striped table-condensed table-bordered">
                                        
                                                <thead class="header">
                                                    <tr>
                                                        <th>Username / Owner</th>
                                                        <th>Department and Location</th>
                                                        <th>Computer Name</th>
                                                        <th>Processor</th>
                                                        <th>RAM</th>
                                                        <th>Others</th>
                                                    </tr>
                                                
                                                </thead>
                                                
                                                <tbody class="dataCont">
                                                    <?php                                
                                                        $data = getFloor(2);
                                                        foreach ($data as $list){                  
                                                            if($list['others']=="")
                                                                $list['others'] = "No details.";
                                                            echo "<tr  >
                                                                <td>". $list['username_owner'] ."</td>
                                                                <td>". $list['department_location'] ."</td>
                                                                <td>". $list['computername'] ."</td>
                                                                <td>". $list['processor'] ."</td>
                                                                <td>". $list['ram'] ."</td>
                                                                <td>
                                                                    <a onclick=\"input\" data-toggle=\"modal\" href=\"#edit\"
                                                                                data-id=\"". $list['ID'] ."\" class=\"edit\" data-backdrop=\"static\"
                                                                                data-keyboard=\"false\">
                                                                    Details
                                                                    </a>
                                                                </td>
                                                            </tr>";
                                                       }                
                                                
                                                     ?>  
                                                </tbody>
                                                
                                            </table>
                                    </div>
                                    <div class="table-responsive tab-pane fade dataCont" id="floor3">
                                        
                                            <table class="table table-hover table-striped table-condensed table-bordered">
                                        
                                                <thead class="header">
                                                    <tr>
                                                        <th>Username / Owner</th>
                                                        <th>Department and Location</th>
                                                        <th>Computer Name</th>
                                                        <th>Processor</th>
                                                        <th>RAM</th>
                                                        <th>Others</th>
                                                    </tr>
                                                
                                                </thead>
                                                
                                                <tbody class="dataCont">
                                                    <?php                                
                                                        $data = getFloor(3);
                                                        foreach ($data as $list){                  
                                                            if($list['others']=="")
                                                                $list['others'] = "No details.";
                                                            echo "<tr  >
                                                                <td>". $list['username_owner'] ."</td>
                                                                <td>". $list['department_location'] ."</td>
                                                                <td>". $list['computername'] ."</td>
                                                                <td>". $list['processor'] ."</td>
                                                                <td>". $list['ram'] ."</td>
                                                                <td>
                                                                    <a onclick=\"input\" data-toggle=\"modal\" href=\"#edit\"
                                                                                data-id=\"". $list['ID'] ."\" class=\"edit\" data-backdrop=\"static\"
                                                                                data-keyboard=\"false\">
                                                                    Details
                                                                    </a>
                                                                </td>
                                                            </tr>";
                                                       }                
                                                
                                                     ?>  
                                                </tbody>
                                                
                                            </table>
                                    </div>
                                </div>
                        </div>
                <?php } ?>
<?php
}else{
?>
                <?php
                if(isset($_GET['change'])){
                        if($_GET['change']=="1QAZXSW23EDCVFR45TGB"){ ?>
                        <div class="alert alert-success alert-dismissable col-sm center-block">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Password Successfully Updated! Login again.
                        </div>
                        <?php }
                        else{ ?>
                        <div class="alert alert-danger alert-dismissable col-sm-3 center-block">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Something went wrong! Try again!
                        </div>        
                        <?php }
                }?>
        <div class="container center-block" style="width: 600px;">
                <form class="form-horizontal well" name="sign-in" method="post" action="methods/actions.php">
                        <div class="modal-header">
                            <h3>Sign In</h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                        required data-validation-required-message="Please enter username!"
                                        value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} ?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                                    required data-validation-required-message="Please enter password!">
                                </div>
                            </div>
                            <?php if(isset($_SESSION['logout'])){?>
                            <div class="form-group">
                                <span class="col-sm-offset-3" style="color: red; font-size: 12px;">Invalid Username or Password!</span>
                            </div>
                            <?php }?>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="sign_in" id="sign_in" value="Sign In" class="btn btn-success" />
                        </div>
                </form>
            </div>    
        </div>        
<?php } ?>