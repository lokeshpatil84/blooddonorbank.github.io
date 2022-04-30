<?php
$id = $_GET['id']; 

require_once 'php/DBConnect.php';
$db = new DBConnect();
$flag = $db->checkAuth();

$donor = $db->getDonorProfileById($id);

$title = "Donor Profile";
include 'layout/_header.php';

if($flag){
    include 'layout/_top_nav.php';
}

?>

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-5">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h5>Basic Info</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td><label>Name</label></td>
                            <td><?= $donor[0]['fname']." ".$donor[0]['mname']." ".$donor[0]['lname']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Gender</label></td>
                            <td><?= $donor[0]['sex']; ?></td>
                        </tr>
                        <tr>
                            <td><label>D.O.B</label></td>
                            <td><?= $donor[0]['bday']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Gender </label></td>
                            <td><?= $donor[0]['sex']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Address </label></td>
                            <td><?= wordwrap($donor[0]['h_address'], 26, '<br>'); ?></td>
                        </tr>
                        <tr>
                            <td><label> City </label></td>
                            <td><?= $donor[0]['city']; ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
       
        <div class="col-sm-1"></div>
    </div>
</div>

<?php include 'layout/_footer.php'; ?>
