<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasetflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <style>
        /* Custom CSS for improved navbar */
        .navbar-custom {
            background-color: #343a40;
            border-bottom: 3px solid #dc3545;
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
            /* max-width: 1000px; */
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
            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="horror.html">Horror</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Sci-Fi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link-custom" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark-custom">
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Action</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Comedy</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Romance</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Fantasy</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Documentary</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Thriller</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Anime</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Drama</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Fiction</a></li>
                    </ul>
                </li>
            </ul> -->
            <div class="input-group input-group-custom">
                <input type="text" class="form-control" placeholder="Cari judul film" aria-label="judul film" aria-describedby="basic-addon2">
                <button class="btn btn-outline-light" type="button">Cari</button>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row flex-nowrap" style="height: 100vh;">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Genre</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <!-- <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Genre</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-custom text-small shadow">
                        <li><a class="dropdown-item dropdown-item-custom" href="#">New project...</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Settings</a></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item dropdown-item-custom" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h1>Product List</h1>
            <!-- Add Product Button -->
            <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="product-table">
                        <!-- Dynamically generated rows will go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Product Modal -->
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

<!-- Edit Modal -->
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
                        <label for="editProductId" class="form-label">Product ID</label>
                        <input type="text" class="form-control" id="editProductId" readonly>
                    </div>
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
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
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

<!-- View Profile Modal -->
<div class="modal fade" id="viewProfileModal" tabindex="-1" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewProfileModalLabel">Admin Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Username: admin</p>
                <p>Email: admin@example.com</p>
                <!-- Add more profile details as needed -->
            </div>
        </div>
    </div>
</div>

<script>
    let products = [
        { id: 1, title: 'Product 1', category: 'Category 1', price: 100, stock: 10 },
        { id: 2, title: 'Product 2', category: 'Category 2', price: 200, stock: 20 }
    ];

    const productTable = document.getElementById('product-table');

    function populateTable() {
        productTable.innerHTML = '';
        products.forEach(product => {
            productTable.innerHTML += `
                <tr>
                    <td>${product.id}</td>
                    <td>${product.title}</td>
                    <td>${product.category}</td>
                    <td>${product.price}</td>
                    <td>${product.stock}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="openEditModal(${product.id})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="openDeleteModal(${product.id})">Delete</button>
                    </td>
                </tr>
            `;
        });
    }

    document.getElementById('addProductForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const title = document.getElementById('addProductTitle').value;
        const category = document.getElementById('addProductCategory').value;
        const price = document.getElementById('addProductPrice').value;
        const stock = document.getElementById('addProductStock').value;
        const newProduct = {
            id: products.length ? products[products.length - 1].id + 1 : 1,
            title,
            category,
            price,
            stock
        };
        products.push(newProduct);
        populateTable();
        document.getElementById('addProductForm').reset();
        bootstrap.Modal.getInstance(document.getElementById('addProductModal')).hide();
    });

    function openEditModal(id) {
        const product = products.find(p => p.id === id);
        document.getElementById('editProductId').value = product.id;
        document.getElementById('editProductTitle').value = product.title;
        document.getElementById('editProductCategory').value = product.category;
        document.getElementById('editProductPrice').value = product.price;
        document.getElementById('editProductStock').value = product.stock;
        new bootstrap.Modal(document.getElementById('editProductModal')).show();
    }

    document.getElementById('editProductForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const id = document.getElementById('editProductId').value;
        const title = document.getElementById('editProductTitle').value;
        const category = document.getElementById('editProductCategory').value;
        const price = document.getElementById('editProductPrice').value;
        const stock = document.getElementById('editProductStock').value;
        const productIndex = products.findIndex(p => p.id == id);
        products[productIndex] = { id: parseInt(id), title, category, price, stock };
        populateTable();
        bootstrap.Modal.getInstance(document.getElementById('editProductModal')).hide();
    });

    function openDeleteModal(id) {
        const product = products.find(p => p.id === id);
        document.getElementById('deleteProductName').textContent = product.title;
        document.getElementById('confirmDeleteButton').onclick = function () {
            products = products.filter(p => p.id !== id);
            populateTable();
            bootstrap.Modal.getInstance(document.getElementById('deleteProductModal')).hide();
        };
        new bootstrap.Modal(document.getElementById('deleteProductModal')).show();
    }

    document.getElementById('viewProfile').addEventListener('click', function () {
        new bootstrap.Modal(document.getElementById('viewProfileModal')).show();
    });

    document.addEventListener('DOMContentLoaded', populateTable);
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
