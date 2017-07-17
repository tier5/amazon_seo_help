@include('header')
    <div class="bodypart">
        <div class="container">
            <div class="row two-panel">
                <div class="col-md-12 col-sm-12">
                    <div class="align-center">
                        <div class="page-heading">
                            <h2>Amazon Seller Account Details</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            </p>
                        </div>    
                    </div>
                </div>    
            </div>
            <div class="row two-panel price-body">


                @if (isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="col-md-6 col-sm-6 col-sm-offset-3">
                   <form method="post" action="{{ route('/userregistration') }}">
                   <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <input class="form-control" placeholder="username" name="username" type="text" required="required"> 
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="password
Re" name="lastname" type="text" required="required"> 
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Username" name="username" type="text" required="required"> 
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Email" name="email" type="email" required="required"> 
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password"> 
                     </div>
                     <div class="form-group">
                        <input class="form-control" name="password_confirmation" placeholder="Re-enter password" type="password"> 
                     </div>
                     <div class="form-group">
                        <input class="sign-in" value="Sign Up" type="submit">
                     </div>
                  </form>
                </div>  



                <!-- <div class="col-md-3 col-sm-3 price-box bronze-box">
                    <h2>BRONZE PACKAGE</h2>
                    <div class="price-tag">
                        <h3><span>$</span>0<span>/MO</span></h3>
                    </div>
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
                    </p>
                    <a href="#">GET FREE</a>
                </div>
                <div class="col-md-3 col-sm-3 price-box-blue">
                    <h2>SILVER PACKAGE</h2>
                    <div class="price-tag">
                        <h3><span>$</span>10<span>/MO</span></h3>
                    </div>
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
                    </p>
                    <a href="#">GET FREE</a>
                </div>
                <div class="col-md-3 col-sm-3 price-box gold-box">
                    <h2>GOLD PACKAGE</h2>
                    <div class="price-tag">
                        <h3><span>$</span>15<span>/MO</span></h3>
                    </div>
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
                    </p>
                    <a href="#">GET FREE</a>
                </div>
                <div class="col-md-3 col-sm-3 price-box customized-box">
                    <h2>CUSTOMIZED PACKAGE</h2>
                    <div class="price-tag">
                        <h3><span>$</span>30<span>/MO</span></h3>
                    </div>
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
                    </p>
                    <a href="#">GET FREE</a>
                </div> -->
            </div>    
        </div>
        <div class="bottom-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <a href="#">Blog Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')