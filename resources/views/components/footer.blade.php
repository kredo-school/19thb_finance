<div class="container-fluid position-relative">
    <div class="row justify-content-center mx-auto" style="max-width: 1200px;">

        <!-- logo -->
        <div class="col-md-2 footer-logo">
            <a class="d-flex align-items-center mx-auto" href="#" style="max-width: 70px; height: 80px;">
                <img src="{{ asset('images/footer-pig-logo.png') }}" alt="" class="img-fluid">
            </a>
        </div>

        <!-- nav -->
        <div class="col-md-6 footer-nav">
            <ul class="d-sm-flex list-unstyled text-white justify-content-center mt-4 mb-0">
                <li class="text-center px-4 mx-auto"><a class="nav-link" href="#">Home</a></li>
                <li class="text-center px-4 mx-auto"><a class="nav-link" href="#">Service</a></li>
                <li class="text-center px-4 mx-auto text-nowrap"><a class="nav-link" href="{{ route('aboutUs') }}">About Us</a></li>
                <li class="text-center px-4 mx-auto"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                <li class="text-center px-4 mx-auto"><a class="nav-link" href="{{ route('inquiry') }}">Inquiry</a></li>
            </ul>
        </div>

        <!-- SNS link -->
        <div class="col-md-2 align-items-center d-flex footer-sns">
            <div class="mx-auto footer-sns-content">
                <a href="https://www.instagram.com" class="d-block text-decoration-none">
                    <i class="fa-brands fa-instagram text-white"></i>
                </a>
                <a href="https://www.twitter.com" class="d-block text-decoration-none">
                    <i class="fa-brands fa-x-twitter text-white"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-nowrap">
        <small class="color-Muted m-0">Copyright&copy;:2024 Money-juu All Rights Reserved.</small>
    </div>
    
</div>
