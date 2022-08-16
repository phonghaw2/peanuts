<section>
    <div class="search-form">
        <form action="">
            <div class="search-wrapper">
                <input class="search-input" type="search" placeholder="Tìm kiếm" name="q">
                <svg id="search" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                <defs></defs>
                <circle cx="11" cy="11" r="8"></circle>
                <path d="M21 21l-4.35-4.35"></path>
                </svg>
            </div>
        </form>
    </div>
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="{{ asset('img/slide1.jpg') }}" alt="">
            </div>
            <div class="slide">
                <img src="{{ asset('img/slide2.jpg') }}" alt="">
            </div>
            <div class="slide">
                <img src="{{ asset('img/slide3.jpg') }}" alt="">
            </div>
            <div class="slide">
                <img src="{{ asset('img/slide4.jpg') }}" alt="">
            </div>
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>

    </div>
</section>
