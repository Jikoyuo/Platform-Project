<!-- start sliders gambar -->
<audio id="background-music" loop>
    <source
        src="slide/SW.mp3"
        type="audio/mpeg" />
</audio>
<button id="play-pause-button">
    <ion-icon class="audio-icon" id="play-music" name="play"></ion-icon>
    <ion-icon
        class="audio-icon hidden"
        id="pause-music"
        name="pause"></ion-icon>
</button>

<div id="particles-js" class="particles"></div>

<div class="container">
    <div class="swiper">
        <h1 class="text-center text-white mb-lg-5"
            style="font-size: 3rem; font-weight: bold;">Movies/series yang mungkin anda suka</h1>

        <div class="swiper-wrapper">
            @foreach ( $sliders as $slider)
            <a href="/product/{{$slider->slug}}">
                <div class="swiper-slide">
                    <img
                        src="{{$slider->img_url}}" />
                    <p>{{$slider->name}}</p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- end sliders gambar -->
