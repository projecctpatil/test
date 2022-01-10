<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Brooch </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->

	<!-- CSS
	============================================ -->

<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('assets/css/lnr-icon.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">



<style type="text/css">
	body{
  background:#eee;
}

.bgWhite{
  background:white;
  box-shadow:0px 3px 6px 0px #cacaca;
}

.title{
  font-weight:600;
  margin-top:20px;
  font-size:24px
}

.customBtn{
  border-radius:0px;
  padding:10px;
}

form input{
  display:inline-block;
  width:50px;
  height:50px;
  text-align:center;
}
</style>

</head>

<body>

	<div class="container">
		  <div class="row justify-content-md-center">
		      <div class="col-md-4 text-center">
		        <div class="row">
		          <div class="col-sm-12 mt-5 bgWhite">
		            <div class="title">
		              Verify OTP
		            </div>
		            
		            <form action="" class="mt-5">
		              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 >
		              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 >
		              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 >
		              <input class="otp" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)' maxlength=1 >
		            </form>
		            <hr class="mt-4">
		            <button class='btn btn-primary btn-block mt-4 mb-4 customBtn'>Verify</button>
		          </div>
		        </div>
		      </div>
		  </div>
		</div>

<!-- JS
	============================================ -->
	<!-- jQuery JS -->
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/slick.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/all.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/theia-sticky-sidebar/ResizeSensor.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	
	
	<script>
		let digitValidate = function(ele){
		  console.log(ele.value);
		  ele.value = ele.value.replace(/[^0-9]/g,'');
		}

		let tabChange = function(val){
		    let ele = document.querySelectorAll('input');
		    if(ele[val-1].value != ''){
		      ele[val].focus()
		    }else if(ele[val-1].value == ''){
		      ele[val-2].focus()
		    }   
		 }
	</script>
	
	
</body>
</html>