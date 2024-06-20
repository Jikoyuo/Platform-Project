<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasetflix || {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Custom CSS for improved navbar */
        .navbar-custom {
            background-color: #343a40;
            border-bottom: 3px solid ;
        }
        .navbar-brand-custom {
            color: #dc3545;
            font-weight: bold;
        }
        .nav-link-custom {
            color: #ffffff;
        }
        .nav-link-custom:hover {
            color: #dc3545;
        }
        .input-group-custom {
            margin-left: auto;
            width: 100%;
        }
        .dropdown-menu-dark-custom {
            background-color: #343a40;
            border: none;
        }
        .dropdown-item-custom {
            color: #ffffff;
        }
        .dropdown-item-custom:hover {
            background-color: #dc3545;
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-white">
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-custom" href="#">Kasetflix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="input-group input-group-custom">
                <input type="text" id="search-input" class="form-control" placeholder="Cari judul film" aria-label="judul film" aria-describedby="basic-addon2">
                <button class="btn btn-outline-light" id="search-button" type="button">Cari</button>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row flex-nowrap" style="height: 100vh;">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#343a40 ;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Home</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0" onclick="showHome()">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0" onclick="showProductList()">
                            <i class="fs-4 bi-box-seam"></i> <span class="ms-1 d-none d-sm-inline">Product List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0" onclick="showUserAccounts()">
                            <i class="fs-4 bi-person"></i> <span class="ms-1 d-none d-sm-inline">User Accounts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0" onclick="showSearchSection()">
                            <i class="fs-4 bi-search"></i> <span class="ms-1 d-none d-sm-inline">Cari kaset</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="/" class="align-items-center text-white text-decoration-none">
                        <button class="text-xl-center mx-1">Back to Home</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <!-- Home Section -->
            <div id="home-section">
                <h1>Welcome to Kasetflix Admin Dashboard</h1>
                <p>This is the home section. Use the menu to navigate through different sections.</p>
            </div>

            <!-- Product List Section -->
            <div id="product-list-section" style="display: none;">
                <h1>Product List</h1>
                <!-- Add Product Button -->
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-primary" onclick="showAddProduct()">Add Product</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-slug="{{ $product->slug }}" data-year="{{ $product->year }}" data-price="{{ $product->price }}" data-stock="{{ $product->stock }}" data-img="{{ $product->img_url }}" data-trailer="{{ $product->trailer }}">
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" onclick="showEditProduct(this)">Edit</button>
                                        <form action="/admin/delete" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- User Accounts Section -->
            <div id="user-accounts-section" style="display: none;">
                <h1>User Accounts</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->phone_number}}</td>
                                    <td>{{$user->role}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Search Section -->
            <!-- Search Section -->
            <div id="search-section" style="display: none;">
                <h1>Search Results</h1>
                <div class="row" id="movie-list">
                    <!-- Movie results will be appended here -->
                </div>
            </div>


            <!-- Add Product Section -->
            <div class="container mt-5" id="add-product-section" style="display: none;">
                <h1 class="mb-4">Add Product</h1>
                <form action="/admin/add" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="add-title" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="add-desc" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="add-slug" name="slug" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" id="add-year" name="year" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="100" class="form-control" id="add-price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="add-stock" name="stock" required>
                    </div>
                    <label>Genres:</label><br>
                    @foreach ($genres as $genre)
                        <input type="checkbox" class="form-check-input" id="genre-{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}">
                        <label class="form-check-label" for="genre-{{ $genre->id }}">{{ $genre->genre }}</label><br>
                    @endforeach
                    <div class="form-group">
                        <label for="img_url">Image URL</label>
                        <input type="text" class="form-control" id="add-img_url" name="img_url" required>
                    </div>
                    <div class="form-group">
                        <label for="trailer">Trailer Embedded URL</label>
                        <input type="text" class="form-control" id="add-trailer" name="trailer" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!-- Edit Product Section -->
            <div class="container mt-5" id="edit-product-section" style="display: none;">
                <h1 class="mb-4">Edit Product</h1>
                <form action="/admin/edit" method="POST">
                    @csrf
                    <input type="hidden" id="product-id" name="id">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" id="year" name="year" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="100" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <label>Genres:</label><br>
                    @foreach ($genres as $genre)
                        <input type="checkbox" class="form-check-input" id="genre-{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}">
                        <label class="form-check-label" for="genre-{{ $genre->id }}">{{ $genre->genre }}</label><br>
                    @endforeach
                    <div class="form-group">
                        <label for="img_url">Image URL</label>
                        <input type="text" class="form-control" id="img_url" name="img_url" required>
                    </div>
                    <div class="form-group">
                        <label for="trailer">Trailer Embedded URL</label>
                        <input type="text" class="form-control" id="trailer" name="trailer" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm">
                    <div class="mb-3">
                        <label for="addProductTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="addProductTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="addProductCategory" class="form-label">Category</label>
                        <input type="text" class="form-control" id="addProductCategory" required>
                    </div>
                    <div class="mb-3">
                        <label for="addProductPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="addProductPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="addProductStock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="addProductStock" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editProductForm">
                    <div class="mb-3">
                        <label for="editProductTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="editProductTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProductCategory" class="form-label">Category</label>
                        <input type="text" class="form-control" id="editProductCategory" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProductPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="editProductPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProductStock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="editProductStock" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductModalLabel">Delete Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this product?</p>
                <p id="deleteProductName"></p>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewPurchaseHistoryModal" tabindex="-1" aria-labelledby="viewPurchaseHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewPurchaseHistoryModalLabel">Purchase History</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group" id="purchaseHistoryList">
                    <!-- Dynamically generated purchase history items will go here -->
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzFw5pfKNzL2F51f8HJO9C9tyIMq06keq+08LrD91RPX" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-GLsWn3BGgiATK4gOuTnbQEF61wdex0LiQ6ZWZBIB5iwjm1z9xX3gNCJ7/Rfw5p5T" crossorigin="anonymous"></script>

<script>
    function showHome() {
        document.getElementById('home-section').style.display = 'block';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'none';
        document.getElementById('search-section').style.display = 'none';
        document.getElementById('add-product-section').style.display = 'none';
        document.getElementById('edit-product-section').style.display = 'none';
    }

    function showProductList() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'block';
        document.getElementById('user-accounts-section').style.display = 'none';
        document.getElementById('search-section').style.display = 'none';
        document.getElementById('add-product-section').style.display = 'none';
        document.getElementById('edit-product-section').style.display = 'none';
    }

    function showUserAccounts() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'block';
        document.getElementById('search-section').style.display = 'none';
        document.getElementById('add-product-section').style.display = 'none';
        document.getElementById('edit-product-section').style.display = 'none';
    }

    function showSearchSection() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'none';
        document.getElementById('search-section').style.display = 'block';
        document.getElementById('add-product-section').style.display = 'none';
        document.getElementById('edit-product-section').style.display = 'none';
    }

    function showAddProduct(){
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'none';
        document.getElementById('search-section').style.display = 'none';
        document.getElementById('add-product-section').style.display = 'block';
        document.getElementById('edit-product-section').style.display = 'none';
    }

    function showEditProduct(button) {
        var row = button.closest('tr');
        var id = row.getAttribute('data-id');
        var title = row.getAttribute('data-name');
        var desc = row.getAttribute('data-description');
        var year = row.getAttribute('data-year');
        var slug = row.getAttribute('data-slug');
        var price = row.getAttribute('data-price');
        var stock = row.getAttribute('data-stock');
        var img = row.getAttribute('data-img');
        var trailer = row.getAttribute('data-trailer');

        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'none';
        document.getElementById('search-section').style.display = 'none';
        document.getElementById('add-product-section').style.display = 'none';
        document.getElementById('edit-product-section').style.display = 'block';

        document.getElementById('product-id').value = id;
        document.getElementById('name').value = title;
        document.getElementById('description').value = desc;
        document.getElementById('year').value = year;
        document.getElementById('slug').value = slug;
        document.getElementById('price').value = parseFloat(price);
        document.getElementById('stock').value = parseInt(stock);
        document.getElementById('img_url').value = img;
        document.getElementById('trailer').value = trailer;
    }

   $(document).ready(function() {
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
            success: function(result) {
                if (result.Response === "True") {
                    let movies = result.Search;
                    $.each(movies, function(i, data) {
                        $("#movie-list").append(
                            `
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="${data.Poster}" class="card-img-top" alt="${data.Title}">
                                    <div class="card-body">
                                        <h5 class="card-title">${data.Title}</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">${data.Year}</h6>
                                        <input type="number" class="form-control mb-2" placeholder="Masukkan jumlah stock" id="stock-${data.imdbID}">
                                        <input type="number" class="form-control mb-2" placeholder="Masukkan harga" id="price-${data.imdbID}">
                                        <input type="text" class="form-control mb-2" placeholder="Masukkan URL trailer" id="trailer-${data.imdbID}">
                                        <button class="btn btn-primary tambah-barang" data-id="${data.imdbID}" data-title="${data.Title}" data-year="${data.Year}" data-poster="${data.Poster}">Tambah Barang</button>
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

    function getMovieDetails(imdbID, callback) {
        $.ajax({
            url: "https://omdbapi.com",
            type: "get",
            dataType: "json",
            data: {
                apikey: "ccd14ef6",
                i: imdbID,
            },
            success: function(details) {
                if (details.Response === "True") {
                    callback(details);
                } else {
                    console.error("Error fetching movie details: " + details.Error);
                }
            },
        });
    }

    $("#search-button").on("click", function() {
        showSearchSection();
        searchMovie();
        
    });

    $("#search-input").on("keyup", function(e) {
        if (e.which === 13) {
            showSearchSection();
            searchMovie();
        }
    });

    $("#movie-list").on("click", ".tambah-barang", function() {
        var id = $(this).data("id");
        var title = $(this).data("title");
        var year = $(this).data("year");
        var stock = $(`#stock-${id}`).val();
        var price = $(`#price-${id}`).val();
        var trailer = $(`#trailer-${id}`).val();
        var poster = $(this).data("poster");

        getMovieDetails(id, function(details) {
            var description = details.Plot;
            var genres = details.Genre.split(", ").map(function(genre) {
                return genre.trim();
            });

            // Navigasi ke halaman Tambah Barang dan isi form
            showAddProduct();
            $('#add-title').val(title);
            $('#add-desc').val(description);
            $('#add-slug').val(title.replace(/\s+/g, '-').toLowerCase());
            $('#add-year').val(year);
            $('#add-price').val(price);
            $('#add-stock').val(stock);
            $('#add-img_url').val(poster);
            $('#add-trailer').val(trailer);

            // Centang genre yang sesuai
            genres.forEach(function(genre) {
                $(`input.form-check-input:checkbox`).each(function() {
                    if ($(this).next('label').text() === genre) {
                        $(this).prop('checked', true);
                    }
                });
            });
        });
    });

    // Initial display of home section
    showProductList();
});
    // Initial display of home section
    showHome();
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>
</html>
