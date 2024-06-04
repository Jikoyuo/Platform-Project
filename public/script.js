// Ambil elemen HTML berdasarkan id
const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");
const login1Btn = document.getElementById("pindah");

// Tambahkan event listener ke tombol register
registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

// Tambahkan event listener ke tombol login
loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
  alert("Button Clicked!");
  window.open("https://github.com/Jikoyuo", "_blank");
});

// Tambahkan event listener ke tombol login1
login1Btn.addEventListener("click", () => {
  container.classList.remove("active");
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
                  <img src="${data.Poster}" class="card-img-top" alt="${data.Title}">
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
