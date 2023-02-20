
<?php
include("../config/db.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Make Request</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.container {
    margin: 30px auto;
}

.container .card {
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background: #fff;
    border-radius: 0px;
}

body {
    background: #eee;
    font-size: 12px !important;
}



.btn.btn-primary {
    background-color: #ddd;
    color: black;
    box-shadow: none;
    border: none;
    width: 100%;
    height: 100%;
}

.btn.btn-primary:focus {
    box-shadow: none;
}

.container .card .img-box {
    width: 80px;
    height: 50px;
}

.container .card img {
    width: 100%;
    object-fit: fill;
}

.container .card .number {
    font-size: 24px;
}

.container .card-body .btn.btn-primary .fab.fa-cc-paypal {
    font-size: 32px;
    color: #3333f7;
}

.fab.fa-cc-amex {
    color: #1c6acf;
    font-size: 32px;
}

.fab.fa-cc-mastercard {
    font-size: 32px;
    color: red;
}

.fab.fa-cc-discover {
    font-size: 32px;
    color: orange;
}

.c-green {
    color: green;
}

.box {
    height: 40px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ddd;
}
input{
	font-size: 12px !important;
}

.btn.btn-primary.payment {
    background-color: #1c6acf;
    color: white;
    border-radius: 0px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px;
 
}


.form__div {
    height: 50px;
    position: relative;
    margin-bottom: 24px;
}

.form-control {
    width: 100%;
    height: 45px;
    font-size: 14px;
    border: 1px solid #DADCE0;
    border-radius: 0;
    outline: none;
    padding: 2px;
    background: none;
    z-index: 1;
    box-shadow: none;
}

.form__label {
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #fff;
    color: #80868B;
    font-size: 16px;
    transition: .3s;
    text-transform: uppercase;
}

.form-control:focus+.form__label {
    top: -8px;
    left: 12px;
    color: #1A73E8;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
}

.form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
    top: -8px;
    left: 12px;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
}

.form-control:focus {
    border: 1.5px solid #1A73E8;
    box-shadow: none;
}
	</style>

	<div class="container">
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                    </div>
                    <div class="number">
                          <label class="fw-bold">**** **** **** 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <small><span class="fw-bold">Name:</span><span>Doe</span></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                            alt="">
                    </div>
                    <div class="number">
                    	  <label class="fw-bold">**** **** **** 1060</label>
                                           </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <small><span class="fw-bold">Name:</span><span>Doe</span></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png"
                            alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold">**** **** **** 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <small><span class="fw-bold">Name:</span><span>Doe</span></small>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-3">
                    <p class="mb-0 fw-bold h3">Συμπλήρωση αιτήματος </p>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-3">
                
                    <div class="card-body border p-0">
                        <p>
                            <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                aria-controls="collapseExample">
                                <span class="fw-bold">Lamb Details</span>
                                <span class="">
                                    <span class="fab fa-cc-amex"></span>
                                    <span class="fab fa-cc-mastercard"></span>
                                    <span class="fab fa-cc-discover"></span>
                                </span>
                            </a>
                        </p>


                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0 mb-3">
                                    <p class="h4 mb-0">Περίληψη</p>
                                    <p id="product" class="mb-0">
                                    </p>
                                    <p id="product_price" class="mb-0">
                                       
                                    </p>
                                    <p class="mb-0">Συμπληρώστε τις λεπτομέρειες με τον σύνδεσμο url σας και ανεβάστε το λογότυπό σας</p>
                                </div>
                                <div class="col-lg-7">
                                    <form enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input id="name" name="name" type="text" class="form-control" placeholder="" required>
                                                    <label for="" class="form__label">Your Name</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input id="date" type="date" name="date" class="form-control" placeholder=" " required>
                                                    <!-- <label for="" class="form__label">URL</label> -->
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                       <input type="file" name="myfile">
                                                    <!-- <label for="" class="form__label">cvv code</label> -->
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input id="url" type="text" name="url" class="form-control" placeholder="" required>
                                                    <label for="" class="form__label">Website URL</label>
                                                </div>
                                            </div>

                                               <div class="col-6">
                                                <div class="form__div">
                                                    <input id="email" type="email" name="email" class="form-control" placeholder="" required>
                                                    <label for="" class="form__label">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button name="submit" class="btn btn-sm btn-primary w-100">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
               <a href="../payments/card/"><div class="btn btn-primary btn-sm payment">
                    Make Payment
                </div></a>
            </div>
        </div>
    </div>

                        <script>
                            var product = document.getElementById('product');
                            var product_price = document.getElementById('product_price');
                            var price = 100;

                            console.log(100 * lambs);

                            var lambs = localStorage.getItem("Value");
                            console.log(price)


                            var displayLambs = `<span class="fw-bold">Product:</span><span class="c-green">: Number of
                                            lambs:${lambs}</span>`;


                            var displayPrice =` <span class="fw-bold">Price:</span>
                                        <span class="c-green">:€${price}</span>`;

                           
                            
                            product.innerHTML=displayLambs;  
                            product_price.innerHTML=displayPrice;              
                        </script>
<!-- <script type="module" src="js/request.js"></script> -->
</body>
</html>