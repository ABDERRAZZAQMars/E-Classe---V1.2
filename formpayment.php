<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:#e5e5e570;">
    <div class="conatiner-fluid" style="overflow-x: hidden;">
        <div class="row">
            <input type="checkbox" id="menu" class="d-none">
            <!--Side Bare-->
            <?php
            include("./sidebar.php");
            ?>
            <!--Nave Bar-->
            <div class="col">
                <div class="row" style="background-color: white;">
                    <?php
                    include("./navbar.php");
                    ?>
                </div>
                <div class="d-flex justify-content-between mx-auto mt-3" style="width: 95%;border-bottom: 1px solid gray;">

                    <h1>STUDENT FORM</h1>
                    <div>
                        <img src="./Icones/up.svg" alt="">
                        <a href="formstudent.php"><button type="button" class="btn btn-info ms-3 text-white">ADD NEW STUDENT</button></a>
                    </div>
                </div>
                <div class="conatiner-fluid mx-auto mt-3" style="width: 95%;">
                    <div class="row" style="overflow-x: auto;">
                        <form action="addpayment.php" method="POST" style="width: 800px; border-radius: 10px;" class="container bg-white mx-auto">
                            <div class="p-2">
                                <label for="nom" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer full name" name="nom">
                            </div>
                            <div class="p-2">
                                <label for="payment_schedule" class="form-label">Payment schedule</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer your e-mail" name="payment_schedule">
                            </div>
                            <div class="p-2">
                                <label for="bill_number" class="form-label">Bill number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer your phone" name="bill_number">
                            </div>
                            <div class="p-2">
                                <label for="amount_paid" class="form-label">Amount paid</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer enroll number" name="amount_paid">
                            </div>
                            <div class="p-2">
                                <label for="balance_amount" class="form-label">Balance amount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer date of admission" name="balance_amount">
                            </div>
                            <div class="p-2">
                                <label for="datepayment" class="form-label">Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Entrer date of admission" name="datepayment">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info m-3 text-white fw-bold">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>