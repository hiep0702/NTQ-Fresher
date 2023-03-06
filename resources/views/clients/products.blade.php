@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- end page title -->
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/img-8.png" alt=""
                                            class="img-fluid d-block" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
            <!-- end col -->
        </div>
        <!-- end row -->
@stop



@section('scripts')

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- ecommerce product details init -->
    <script src="assets/js/pages/ecommerce-product-details.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

@stop
