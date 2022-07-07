@php
$lang2 =  LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

 <header class="wrapper">
    <nav id="main_nav" class="container">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo"></a><img src="{{asset('img/burger.png')}}" class="burger" alt="burger"></a></label>

      <div class="content">
          <div class="logo">
          <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
            </div>
     </div>

        <div class="content">
        <ul class="links">
            <li> <a href="/">{{__('index.37')}}</a> </li>
            <li> <a href="#">{{__('index.38')}}</a></li>
            <li> <a href="#">{{__('index.39')}}</a></li>
            <li> <a href="{{ LaravelLocalization::getLocalizedURL($lang2, null, [], true) }}">{{__('index.40')}}</a></li>
        </ul>
      </div>
    </nav>
</header>

