<!-- login start -->

<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                 
<div class="col-md-7 bg-dark d-flex align-items-center mx-auto">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Login</h5>
                        <h1 class="text-white mb-4 mx-auto">Login</h1>
                        <form method="post">
                            <div class="row g-3">
                                
                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control " placeholder="Password"  />
                                        <label for="passeword">Password</label>
                                    </div>
                                </div>
                                
                                
                                <div class="col-mx-9 ">
                                    <div class="form-floating">
                                    <input type="checkbox" name="remember me"> <b style="font-size: 18px; color: gray;">Remember Me</b>
                                    </div>
                                </div>
                                <a href="<?php echo $mainurl;?>forget-password">Forget Password</a>
                                <div class="col-12">
                                    <button class="btn btn-primary w-25 py-3" type="submit" name="log"  style="margin-left:38%">Login</button><br>
                                    <br>
                                    <b style="font-size: 18px; margin-left:35%"> Don't have an account ?</b> <a href="<?php echo $mainurl;?>register"> Create Your account</a>                                                                        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
    </div>
