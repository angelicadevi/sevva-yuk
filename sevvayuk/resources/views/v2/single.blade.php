@extends('layout.mainlayout')

        @section('page')

        <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                    <div class="col-first">
                        <h1>Detail Vendor</h1>
                         <nav class="d-flex align-items-center justify-content-start">
                            <a href="/">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <a href="#">Detail Vendor</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!-- Start Product Details -->
        <div class="container">
            <div class="product-quick-view">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="quick-view-carousel-details">
                            <div class="item" style="background: url({{asset($products->path_image)}});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-view-content">
                            <div class="top">
                                <h3 class="head">{{$products->nameProduct}}</h3>
                                <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">Rp.{{$products->price}}</span></div>
                                <div class="available">Stock <span>{{$products->stok}}</span></div>
                            </div>
                            <div class="middle">
                            <p class="content">{{$products->description}}</p>
                            </div>
                            <div >
                                <!-- <div class="quantity-container d-flex align-items-center mt-15">
                                    Quantity:
                                    <input type="text" class="quantity-amount ml-15" value="1" />
                                    <div class="arrow-btn d-inline-flex flex-column">
                                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                    </div>

                                </div> -->
                                <!-- <div class="d-flex mt-20">
                                    <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="details-tab-navigation d-flex justify-content-center mt-30">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order">Order</a>
                    </li>
                    <li>
                        <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments">Pertanyaan</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order">
                  <div class="review-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                          <div class="add-review">
                              <h3>Detail Pesanan</h3>
                          <form action="/rent" method="post">
                               {{ csrf_field() }}
                              <input type="hidden" name="product" value="{{$products->id}}">
                              <div class="col-sm-4" >
                                  <p style="text-align:left">Tanggal mulai:</p>
                                    <input name="start_date" type="date" class="form-control">
                              </div>
                              <br>
                              <div class="col-sm-4" >
                                  <p style="text-align:left">Tanggal berakhir:</p>
                                    <input name="end_date" type="date" class="form-control">
                              </div>
                              <br>
                              <div class="col-sm-4" >
                                <p style="text-align:left">Jumlah</p>
                                <input name="amount" type="text" placeholder="contoh: 12" onblur="this.placeholder = 'Jumlah'" required class="common-input">
                            </div>
                            <br>
                            <div class="col-sm-4">
                                <button type="submit" class="view-btn color-2"><span>Order</span></button>
                            </div>
                              </form>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments">
                    <div class="review-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="add-review">
                                    <h3>Ajukan Pertanyaan</h3>
                                    <form action="#" class="main-form">
                                        <input type="text" placeholder="Your Full name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Your Full name'" required class="common-input">
                                        <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address'" required class="common-input">
                                        <input type="text" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone Number'" required class="common-input">
                                        <textarea placeholder="Messege" onfocus="this.placeholder=''" onblur="this.placeholder = 'Messege'" required class="common-textarea"></textarea>
                                        <button class="view-btn color-2"><span>Submit Now</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Details -->


        @endsection
