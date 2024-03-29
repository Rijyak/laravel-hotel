@include('header')
@include('sweetalert::alert') 
  @if(session('success_message'))
    <div class="alert alert-success">
      {{session('success_message')}}
    </div>
  @endif
  <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Rooms</span>
          <h2 class="heading">Rooms &amp; Suites</h2>
        </div>
      </div>
    </div>
  </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 mb-5">
            
            <div class="block-3 d-md-flex">
              <div class="image" style="background-image: url('images/img_1.jpg'); "></div>
              <div class="text">

                <h2 class="heading">Bachelor Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">1500</span><sub>/per night</sub></div>
                <ul class="specs mb-5">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
<!-- modal view -->
                <button type="button" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#login-modal1">Book Now</button>
                <form action="{{ action('BachelorController@store') }}" method="POST">
                  {{ csrf_field() }}

                  <div class="modal" role="dialog" id="login-modal1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2>Booking Bachelor Room</h2>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                            </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                            </div>
                             <div class="form-group">
                              <input type="number" class="form-control" name="phone" placeholder="Enter your phone number">
                            </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="email" placeholder="Enter your Email">
                            </div>
                            <div class="row">
                                    <div class="col-md-6">
                                     <div class="form-group">
                                      <div class="icon">
                                        <span class="icon-calendar"></span><input type="date"  name="checkin" class="form-control" placeholder="Enter your date.">
                                      </div>
                                    </div>
                                    </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="icon">
                                            <span class="icon-calendar"></span><input type="date"  name="checkout" class="form-control">
                                          </div>
                                        </div>
                                  </div>
                          </div>

                            <button type="submit" class="btn btn-primary py-3 px-5"> Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </form>

               
<!-- modal view -->
              </div>
            </div>


          </div>  


          <div class="col-md-12 mb-5">
            
            <div class="block-3 d-md-flex">
              <div class="image order-2" style="background-image: url('images/img_2.jpg'); "></div>
              <div class="text order-1">
                
                <h2 class="heading">Family Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">2450</span><sub>/per night</sub></div>
                <ul class="specs mb-5">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>

<!-- modal view -->
                <button type="button" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#login-modal">Book Now</button>
                <form action="{{ action('FamilyController@store') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="modal" role="dialog" id="login-modal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2>Booking Family Room</h2>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input type="text" class="form-control" name="" placeholder="Enter your Name">
                            </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="" placeholder="Enter your Address">
                            </div>
                             <div class="form-group">
                              <input type="number" class="form-control" name="" placeholder="Enter your phone number">
                            </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="" placeholder="Enter your Email">
                            </div>
                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                  <div class="icon">
                                    <span class="icon-calendar"></span><input type="text" id="checkin_date" class="form-control" placeholder="Enter your date.">
                                  </div>
                                </div>
                                  </div>
                                   <div class="col">
                                  <div class="form-group">
                                    <div class="icon">
                                      <span class="icon-calendar"></span><input type="text" id="checkout_date" class="form-control" placeholder="Enter your date.">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <button type="submit" class="btn btn-primary py-3 px-5"> Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>

               
<!-- modal view -->
                
              </div>
            </div>


          </div>  


          <div class="col-md-12">
            
            <div class="block-3 d-md-flex">
              <div class="image" style="background-image: url('images/img_3.jpg'); "></div>
              <div class="text">

                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">4500</span><sub>/per night</sub></div>
                <ul class="specs mb-5">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
<!-- modal view -->
                <button type="button" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#login-modal3">Book Now</button>
                  <div class="modal" role="dialog" id="login-modal3">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2>Booking Presidential Room</h2>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input type="text" class="form-control" name="" placeholder="Enter your Name">
                            </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="" placeholder="Enter your Address">
                            </div>
                             <div class="form-group">
                              <input type="number" class="form-control" name="" placeholder="Enter your phone number">
                            </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="" placeholder="Enter your Email">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                               <div class="form-group">
                                <div class="icon">
                                  <span class="icon-calendar"></span><input type="text" id="checkin_date" class="form-control" placeholder="Enter your date.">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <div class="icon">
                                  <span class="icon-calendar"></span><input type="text" id="checkout_date" class="form-control" placeholder="Enter your date.">
                                </div>
                              </div>
                            </div>
                          </div>
                            <button type="submit" class="btn btn-primary py-3 px-5"> Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>

               
<!-- modal view -->

              </div>
            </div>


          </div>  

        </div>

        

        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center section-heading">
              <h2 class="heading">More Rooms</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, iusto, omnis! Quidem, sint, impedit? Dicta eaque delectus tempora hic, corporis velit doloremque quod quam laborum, nobis iusto autem culpa quaerat!</p>
            </div>
          </div>

        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_1.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Bachelor Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">1560</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_2.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Family Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">2450</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_3.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">3750</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_1.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Bachelor Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">1560</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_2.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Family Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">2450</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_3.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">3750</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_1.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Bachelor Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">1560</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_2.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Family Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">2450</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="images/img_3.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>Rs</sup><span class="number">3750</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    





  
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <span class="subheading-sm">Reviews</span>
            <h2 class="heading">Guest Reviews</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_3.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Martin Newmansfield</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Nancy Green</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Elizabeth Charles</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  <div class="block-22">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading mb-4">Be Sure To Get Our Promos</h2>
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="email" class="form-control email" placeholder="Enter your email">
                <!-- <input type="submit" class="btn btn-primary submit"> -->
                <button type="submit" class="btn btn-primary submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@include('footer')