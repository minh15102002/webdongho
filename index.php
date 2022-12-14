<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>DMTwatch.COM</title>
    <?php include('css-libary.php') ?>

</head>
<style>
    .col-sm-4 a img:hover {
        opacity: 0.6;
    }
</style>

<body>
    <?php include 'component/header_2.php' ?>
    <?php include('silder.php') ?>
    <div class="product-area section" style="margin-top: -30px;">
        <div class="container">
            <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #222222;margin-bottom: 20px;">SẢN PHẨM MỚI</p>
            <div class="row" style="margin-top: -30px;">
                <div class="col-12">
                    <div class="product-info">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php include('./component/new_product.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="display: flex;flex-direction: center;">
        <!-- <img src="./images/sale.png" alt="" width="200px"> -->
        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #222222;margin-bottom: 20px;">GIẢM GIÁ</p>
        <img src="./images/flash.png" alt="" width="50px"></div>
    </div>
    <?php include('carouselsp.php') ?>
    <div class="container">
        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #222222;margin-bottom: 20px;">GỢI Ý SẢN PHẨM</p>
    </div>
    <?php include('carouselop.php') ?>
    <div class="container" style="margin-top: 40px;">
        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #222222;margin-bottom: 20px;">DANH MỤC HOT</p>
    </div>
    <div class="container" style="margin-top: 30px;padding-left: 25%;">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href="product_1.php"><span><img style="border-radius: 5px;" src="https://cdn3.dhht.vn/wp-content/uploads/2018/10/icon-1.jpg" alt=""></span><span style="padding-left: 25px;">Đồng hồ nam</span></a></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href="product_2.php"><span><img style="border-radius: 5px;" src="https://cdn3.dhht.vn/wp-content/uploads/2018/10/icon-2.jpg" alt=""></span></a><span style="padding-left: 25px;">Đồng hồ nữ</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://cdn3.dhht.vn/wp-content/uploads/2018/10/icon-3.jpg" alt=""></span></a><span style="padding-left: 35px;">Đồng hồ đôi</span></div>
       </div>
    </div>
    <!-- Start Shop Services Area -->
    <section class="shop-services section home" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Đơn hàng trên 20tr</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Đổi trả miễn phí</h4>
                        <p>Kiểm tra đổi trả</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Thanh toán chắc chắn</h4>
                        <p>An toàn 100%</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Giá cả hợp lý</h4>
                        <p>Giá rẻ</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 offset-lg-3 col-12">
                            <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#e28585; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
                            <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
                                    <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
                                    <div class="button" style="margin-top:30px;">
                                        <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php
    include 'component/footer.php'
    ?>
    <?php include('jquery.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: './component/ajax-live-search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>
</body>

</html>