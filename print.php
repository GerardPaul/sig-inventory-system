<?php
    session_start();
    include_once "methods/query.php";
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Print Preview</title>
        <link href = "css/print.css" rel = "stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>
    <body>
        <div style="display:inline;">
            <h2>SIG Inventory</h2>
            <b>Total Number of results: <?php echo $num; ?></b>
            <form action="index.php">
                <input type="submit" value="Back" class="print_ignore">
                <input type="submit" class="print_ignore" id="print" value="Print" onclick="window.print()">
            </form>
        </div>
        <div class="con page" id="printDiv" style="margin-top: 20px;">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead class="header">
                    <tr>
                        <th>Floor</th>
                        <th>Username / Owner</th>
                        <th>Department and Location</th>
                        <th>Computer Name</th>
                        <th>Asset Tag No.</th>
                        <th>No. of Monitor</th>
                        <th>Brand</th>
                        <th>Monitor Asset Tag No.</th>
                        <th>OS</th>
                        <th>W/OEM Sticker</th>
                        <th>AVV</th>
                        <th>Processor</th>
                        <th>RAM</th>
                        <th>Hard Drive</th>
                        <th>MSOffice Version</th>
                        <th>Date Given</th>
                        <th>Date Pulled Out</th>
                        <th>Others</th>
                    </tr>
                    
                </thead>
                <tbody class="dataCont">
                    <?php    
                        foreach ($data as $list){ 
                            echo "<tr>
                                <td>". $list['floor'] ."</td>
                                <td>". $list['username_owner'] ."</td>
                                <td>". $list['department_location'] ."</td>
                                <td>". $list['computername'] ."</td>
                                <td>". $list['asset_tag_computer'] ."</td>
                                <td>". $list['number_of_monitor'] ."</td>
                                <td>". $list['brand_of_monitor'] ."</td>
                                <td>". $list['asset_tag_monitor'] ."</td>
                                <td>". $list['os'] ."</td>
                                <td>". $list['oem'] ."</td>
                                <td>". $list['avv'] ."</td>
                                <td>". $list['processor'] ."</td>
                                <td>". $list['ram'] ."</td>
                                <td>". $list['hard_drive'] ."</td>
                                <td>". $list['ms_office_version'] ."</td>
                                <td>". $list['date_given'] ."</td>
                                <td>". $list['date_pulled_out'] ."</td>
                                <td>". $list['others'] ."</td>
                            </tr>";
                       } 
                    ?>
                    
                </tbody>
            </table>
        </div>
        <script type="text/javascript">
            function printData()
                {
                  var divToPrint=document.getElementById("printDiv").innerHTML;
                  newWin= window.open("", "print_window", "status=1,toolbar=1,height='1',width='1'");
                  newWin.document.write('<html><head><link rel="stylesheet" type="text/css" href="css/print.css" /><title>Print Preview</title></head><body><div><table>'   
                        + divToPrint + '</table></div></body></html>');
                  newWin.print();
                  newWin.close();
                }
        </script>
    </body>
</html>