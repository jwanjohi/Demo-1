<?php require ('header.php'); ?>  

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Members</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="../akira chisx/HTML/index.html">Home</a></li>
            <li><a href="">Pages</a></li>
            <li class="active">Registration</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="reg-page">
                <div class="reg-header">
                    <h2>Register a new account</h2>
                    <p>Already Signed Up? Click <a href="../akira chisx/HTML/page_login.html" class="color-green">Sign In</a> to login your account.</p>                    
                </div>

                <label>First Name</label>
                <input type="text" class="form-control margin-bottom-20">
               
                <label>Last Name</label>
                <input type="text" class="form-control margin-bottom-20">
               
                <label>Email Address <span class="color-red">*</span></label>
                <input type="text" class="form-control margin-bottom-20">

                <div class="row">
                    <div class="col-sm-6">
                        <label>Password <span class="color-red">*</span></label>
                        <input type="text" class="form-control margin-bottom-20">
                    </div>
                    <div class="col-sm-6">
                        <label>Confirm Password <span class="color-red">*</span></label>
                        <input type="text" class="form-control margin-bottom-20">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-6">
                        <label class="checkbox">
                            <input type="checkbox"> 
                            I read <a href="../akira chisx/HTML/page_terms.html" class="color-green">Terms and Conditions</a>
                        </label>                        
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit">Register</button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->		
<!--=== End Content Part ===-->

<?php require('footer.php');?>