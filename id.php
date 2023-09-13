<?php
require_once("model/crud.php");
require_once("model/helpermethod.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        body{background-color: #ebeff2}.card{background-color: white;border: none;border-radius: 5px;box-shadow: 5px 6px 6px 2px #e9ecef}.allergy{position: relative;bottom: 8px;color: grey}.head{color: #97989a;font-size: 12px}.bottom{color: grey;font-size: 14px}
    </style>
</head>
<body>
<?php
            $query = "SELECT * FROM `student`";
            $result = query_exec($query);
            while ($arrival = mysqli_fetch_array($result)) {
                        ?>
    <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-2 text-center">
                <div class="row">
                    
                    <div class="col-md-7 border-right no-gutters">
                        <div class="py-3"><img src="https://i.imgur.com/hczKIze.jpg" width="100" class="rounded-circle">
                            <h4 class="text-secondary"><?php echo $arrival["name"] ?></h4>
                            <div class="allergy"><span>Student</span></div>
                            <div class="stats">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column"> <span class="text-left head">Semester</span> <span class="text-left bottom">Sixth Semester</span> </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column"> <span class="text-left head">Age</span> <span class="text-left bottom"><?php echo $arrival["age"] ?></span> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column"> <span class="text-left head">Batch</span> <span class="text-left bottom"><?php echo $arrival["batch"] ?></span> </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column"> <span class="text-left head">University</span> <span class="text-left bottom"><?php echo $arrival["uni"] ?></span> </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-3"><button type="button" class="btn btn-primary btn-block">Send Message</button></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="py-3">
                            <div> <span class="d-block head">Home Address</span> <span class="bottom"><?php echo $arrival["address"] ?></span> </div>
                            <div class="mt-4"> <span class="d-block head">Mobile Phone#</span> <span class="bottom"><?php echo $arrival["mobile"] ?></span> </div>
                            <div class="mt-4"> <span class="d-block head">Home Phone#</span> <span class="bottom"><?php echo $arrival["h_no"] ?></span> </div>
                            <div class="mt-4"> <span class="d-block head">Email</span> <span class="bottom"><?php echo $arrival["email"] ?></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
</body>
</html>