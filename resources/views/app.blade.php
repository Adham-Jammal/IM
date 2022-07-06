<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IM</title>
    <link href="{{asset('img/logo.png')}}" rel="icon">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/'.LaravelLocalization::getCurrentLocale().'-style.css')}}">

</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=966502921441&text=" id="whatsapp"><i class="fab fa-whatsapp"></i></a>
    <div id="preloader"></div>

    <div id="pop_up">
        <button onclick="hide()" id="close"><i class="fas fa-times"></i></button>
        <div class="popup-form">
            <form action="{{route('request')}}" method="POST">
                @csrf
                <h4> {{__('index.pop1')}} </h4>

                <label for="phone">{{__('index.ph2')}} </label>
                <input required type="number" name="phone" id="phone">

                <input type="text" name="service_req" hidden id="service_req">

                <label for="car_type">{{__('index.pop2')}} </label>
                <input required type="text" name="car-type" id="car_type">
                <label for="color">{{__('index.pop3')}}</label>
                <input required type="color" name="color" id="color">
                <label for="color">{{__('index.pop4')}}</label>
                <select required name="size" id="size">
                    <option value="small">{{__('index.pop21')}}</option>
                    <option value="medium">{{__('index.pop22')}}</option>
                    <option value="large">{{__('index.pop23')}}</option>
                </select>
                <label for="date">{{__('index.pop5')}}</label>
                <input required type="datetime-local" id="date" name="date">
                <input required type="submit" name="send" id="popup_send" value=" {{__('index.52')}}">
            </form>
        </div>
    </div>
    @include('layouts.header')

    @yield('main')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main-'.LaravelLocalization::getCurrentLocale().'.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Success message --}}
    @if(session()->has('message'))
    <script src="{{ asset('js/success-message-'.LaravelLocalization::getCurrentLocale().'.js')}}"></script>
    @endif

</body>

</html>
