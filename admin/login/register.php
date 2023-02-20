

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<title>
    OVOKOS
  </title>


<link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard" />





<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

<link id="pagestyle" href="../assets/css/soft-ui-dashboard.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<style>
    .async-hide {
      opacity: 0 !important
    }
  </style>
<script>
    (function(a, s, y, n, c, h, i, d, e) {
      s.className += ' ' + y;
      h.start = 1 * new Date;
      h.end = i = function() {
        s.className = s.className.replace(RegExp(' ?' + y), '')
      };
      (a[n] = a[n] || []).hide = h;
      setTimeout(function() {
        i();
        h.end = null
      }, c);
      h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
      'GTM-K9BGS8K': true
    });
  </script>






</head>
<body class="">



<div class="container position-sticky z-index-sticky top-0">
<div class="row">
<div class="col-12">

<nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
<div class="container-fluid pe-0">
<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="">
Login
</a>
<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
</button>

</div>
</nav>

</div>
</div>
</div>
<main class="main-content  mt-0">
<section>
<div class="page-header min-vh-75">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
<div class="card card-plain mt-8">
<div class="card-header pb-0 text-left bg-transparent">
<h3 class="font-weight-bolder text-info text-gradient">OffCall Registration</h3>
<p class="mb-0">Enter your email and password to sign up</p>
</div>
<div class="card-body">
<form role="form" method="post" action="../server/register.php">
<label>Email</label>
<div class="mb-3">
<input id="email" type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
</div>

<label>Username</label>
<div class="mb-3">
<input id="email" type="text" name="username" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
</div>
<label>Password</label>
<div class="mb-3">
<input id="password" type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
</div>


<label>Confirm Password</label>
<div class="mb-3">
<input id="password" type="password" name="password2" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
</div>

<div class="text-center">
<button id="login" type="submit" name="register_btn" class="btn bg-gradient-info w-100 mt-4 mb-0">Register</button>
</div>
</form>
</div>

</div>
</div>
<div class="col-md-6">
<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('https://raw.githubusercontent.com/creativetimofficial/soft-ui-dashboard/main/assets/img/curved-images/curved-6.jpg')"></div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>



<!-- <script type="module" src="./db/login.js"></script> -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="../assets/js/soft-ui-dashboard.min.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"774b88b59a3f4fcb","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>
</html>