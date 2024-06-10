const audio = document.getElementById("background-music");
const playPauseButton = document.getElementById("play-pause-button");
const playIcon = document.getElementById("play-music");
const pauseIcon = document.getElementById("pause-music");

let isPlaying = false;

function togglePlayPause() {
  console.log("Toggle function called");
  if (isPlaying) {
    audio.pause();
    playIcon.classList.remove("hidden");
    pauseIcon.classList.add("hidden");
  } else {
    audio.play();
    playIcon.classList.add("hidden");
    pauseIcon.classList.remove("hidden");
  }
  isPlaying = !isPlaying;
}

playPauseButton.addEventListener("click", togglePlayPause);

audio.addEventListener("ended", function () {
  audio.currentTime = 0;
  audio.play();
});

var swiper = new Swiper(".swiper", {
  grabCursor: true,
  initialSlide: 4,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 10,
  speed: 1000,
  freeMode: false,
  mousewheel: {
    thresholdDelta: 30,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  on: {
    click(event) {
      swiper.slideTo(this.clickedIndex);
    },
  },
});

particlesJS("particles-js", {
  particles: {
    number: {
      value: 180,
      density: {
        enable: true,
        value_area: 800,
      },
    },
    color: {
      value: "#fff",
    },
    shape: {
      type: "circle",
    },
    opacity: {
      value: 0.3,
      random: false,
      anim: {
        enable: false,
        speed: 4,
        opacity_min: 0.1,
        sync: false,
      },
    },
    size: {
      value: 4,
      random: true,
      anim: {
        enable: true,
        speed: 2,
        size_min: 0.1,
        sync: false,
      },
    },
    line_linked: {
      enable: false,
    },
    move: {
      enable: true,
      speed: 0.4,
      direction: "right",
      random: true,
      straight: false,
      out_mode: "none",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200,
      },
    },
  },
  retina_detect: true,
});


// Fungsi untuk mencari film
function searchMovie() {
  $("#movie-list").html("");
  $.ajax({
    url: "https://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "ccd14ef6",
      s: $("#search-input").val(),
    },
    success: function (result) {
      if (result.Response === "True") {
        let movies = result.Search;
        $.each(movies, function (i, data) {
          $("#movie-list").append(
            `
              <div class="col-md-3">
                <div class="card">
                  <img src="${data.Poster}" class="card-img-top" alt="${data.Title}" style="max-height:360px; min-height:360px">
                  <div class="card-body">
                    <h5 class="card-title">${data.Title}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">${data.Year}</h6>
                    <a href="#" class="card-link see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="${data.imdbID}">See Detail</a>
                  </div>
                </div>
              </div>
            `
          );
        });
        $("#search-input").val("");
      } else {
        $("#movie-list").html(`
          <div class="col">
            <h1 class="text-center">${result.Error}</h1>
          </div>
        `);
      }
    },
  });
}

// Event listener untuk tombol search
$("#search-button").on("click", function () {
  searchMovie();
});

// Event listener untuk input pencarian film
$("#search-input").on("keyup", function (e) {
  if (e.which === 13) {
    searchMovie();
  }
});

// Event listener untuk melihat detail film
$("#movie-list").on("click", ".see-detail", function () {
  $.ajax({
    url: "https://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "ccd14ef6",
      i: $(this).data("id"),
    },
    success: function (movie) {
      if (movie.Response === "True") {
        $("#movie-list").html(`
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <img src="${movie.Poster}" class="img-fluid" alt="${movie.Title}">
              </div>
              <div class="col-md-8">
                <ul class="list-group">
                  <li class="list-group-item"><h3>${movie.Title}</h3></li>
                  <li class="list-group-item">Released: ${movie.Released}</li>
                  <li class="list-group-item">Genre: ${movie.Genre}</li>
                  <li class="list-group-item">Director: ${movie.Director}</li>
                  <li class="list-group-item">Actors: ${movie.Actors}</li>
                </ul>
              </div>
            </div>
          </div>
        `);
      }
    },
  });
});

