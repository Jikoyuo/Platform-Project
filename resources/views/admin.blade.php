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
                        <a href="#" class="nav-link align-middle px-0" onclick="showHome()">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
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
                    </li> -->
                    <!-- Add admin buttons for toggling views -->
                    <li>
                        <a href="#" class="nav-link px-0 align-middle" onclick="showProductList()">
                            <i class="fs-4 bi-box-seam"></i> <span class="ms-1 d-none d-sm-inline">Product List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle" onclick="showUserAccounts()">
                            <i class="fs-4 bi-person"></i> <span class="ms-1 d-none d-sm-inline">User Accounts</span>
                        </a>
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
            <!-- Home Section -->
            <div id="home-section">
                <h1>Welcome to Kasetflix Admin Dashboard</h1>
                <p>This is the home section. Use the menu to navigate through different sections.</p>
            </div>

            <!-- Product List Section -->
            <div id="product-list-section">
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


            <!-- User Accounts Section -->
            <div id="user-accounts-section" style="display: none;">
                <h1>User Accounts</h1>
                <!-- User Accounts Table -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Riwayat Pembelian</th>
                                <!-- <th>Actions</th> -->
                            </tr>
                        </thead>
                        <tbody id="user-table">
                            <!-- Dynamically generated rows will go here -->
                        </tbody>
                    </table>
                </div>
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

    <!-- Edit Product Modal -->
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

<!-- User Details Modal -->
<!-- <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewUserModalLabel">User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>ID:</strong> <span id="userId"></span></li>
                    <li class="list-group-item"><strong>Username:</strong> <span id="userUsername"></span></li>
                    <li class="list-group-item"><strong>Email:</strong> <span id="userEmail"></span></li>
                    <li class="list-group-item"><strong>RiwayatPembelian:</strong> <span id="userRiwayatPembelian"></span></li>
                     Add more user details here as needed 
                </ul>
            </div>
        </div>
    </div>
</div> -->

<!-- Purchase History Modal -->
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzFw5pfKNzL2F51f8HJO9C9tyIMq06keq+08LrD91RPX" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-GLsWn3BGgiATK4gOuTnbQEF61wdex0LiQ6ZWZBIB5iwjm1z9xX3gNCJ7/Rfw5p5T" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzFw5pfKNzL2F51f8HJO9C9tyIMq06keq+08LrD91RPX" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-GLsWn3BGgiATK4gOuTnbQEF61wdex0LiQ6ZWZBIB5iwjm1z9xX3gNCJ7/Rfw5p5T" crossorigin="anonymous"></script>
<script src="admin.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzFw5pfKNzL2F51f8HJO9C9tyIMq06keq+08LrD91RPX" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-GLsWn3BGgiATK4gOuTnbQEF61wdex0LiQ6ZWZBIB5iwjm1z9xX3gNCJ7/Rfw5p5T" crossorigin="anonymous"></script>

<script>

        


    // Function to show Home section and hide other sections
    function showHome() {
        document.getElementById('home-section').style.display = 'block';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'none';
    }

    // Function to show Product List section and hide other sections
    function showProductList() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'block';
        document.getElementById('user-accounts-section').style.display = 'none';
    }

    // Function to show User Accounts section and hide other sections
    function showUserAccounts() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'block';
    }

    // Fetch and display user accounts
    async function fetchUserAccounts() {
        try {
            const response = await fetch('/api/user-accounts');  // Replace with your API endpoint
            const users = await response.json();

            const userTable = document.getElementById('user-table');
            userTable.innerHTML = '';

            users.forEach(user => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.id}</td>
                    <td>${user.username}</td>
                    <td>${user.email}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="viewUserDetails(${user.id})">View</button>
                        <button class="btn btn-secondary btn-sm" onclick="viewPurchaseHistory(${user.id})">View Purchase History</button>
                    </td>
                `;
                userTable.appendChild(row);
            });
        } catch (error) {
            console.error('Error fetching user accounts:', error);
        }
    }

    // View user details
    async function viewUserDetails(userId) {
        try {
            const response = await fetch(`/api/user-accounts/${userId}`);  // Replace with your API endpoint
            const user = await response.json();

            document.getElementById('userId').textContent = user.id;
            document.getElementById('userUsername').textContent = user.username;
            document.getElementById('userEmail').textContent = user.email;
            // Populate more fields as needed

            const viewUserModal = new bootstrap.Modal(document.getElementById('viewUserModal'));
            viewUserModal.show();
        } catch (error) {
            console.error('Error fetching user details:', error);
        }
    }

    // View purchase history
    async function viewPurchaseHistory(userId) {
        try {
            const response = await fetch(`/api/user-accounts/${userId}/purchase-history`);  // Replace with your API endpoint
            const purchaseHistory = await response.json();

            const purchaseHistoryList = document.getElementById('purchaseHistoryList');
            purchaseHistoryList.innerHTML = '';

            purchaseHistory.forEach(purchase => {
                const item = document.createElement('li');
                item.className = 'list-group-item';
                item.textContent = `Order ID: ${purchase.orderId}, Product: ${purchase.product}, Date: ${purchase.date}, Amount: ${purchase.amount}`;
                purchaseHistoryList.appendChild(item);
            });

            const viewPurchaseHistoryModal = new bootstrap.Modal(document.getElementById('viewPurchaseHistoryModal'));
            viewPurchaseHistoryModal.show();
        } catch (error) {
            console.error('Error fetching purchase history:', error);
        }
    }

    // Initial fetch of user accounts
    fetchUserAccounts();

    // Show the home section by default
    showHome();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-FTK/hKNBSh5CYf2ZIdcb46gWJOdFg6Q5Wz2eFSF9GOTpxEyWBRk/tolPeODy+opk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-VgNrIt+Srr1wbIkh+LfAbeFFskG+dNLOupuyb8+nNAEnqk4RzkFoHqAO+B2Im63z" crossorigin="anonymous"></script>
<script>
    // Sample user accounts data
    let accounts = [
        { id: 1, username: 'johndoe', email: 'john@example.com', riwayatPembelian: 'Purchase history details' }
    ];

    // Function to display the home section
    function showHome() {
        document.getElementById('home-section').style.display = 'block';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'none';
    }

    // Function to display the product list section
    function showProductList() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'block';
        document.getElementById('user-accounts-section').style.display = 'none';
    }

    // Function to display the user accounts section
    function showUserAccounts() {
        document.getElementById('home-section').style.display = 'none';
        document.getElementById('product-list-section').style.display = 'none';
        document.getElementById('user-accounts-section').style.display = 'block';
        loadUserAccounts();
    }

    // Function to load user accounts into the table
    function loadUserAccounts() {
        const userTable = document.getElementById('user-table');
        userTable.innerHTML = '';
        accounts.forEach(account => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${account.id}</td>
                <td>${account.username}</td>
                <td>${account.email}</td>
                <td>${account.riwayatPembelian}</td>
            `;
            userTable.appendChild(row);
        });
    }

    // Function to initialize the product list (dummy data)
    function initializeProducts() {
        const products = [
            { id: 1, title: 'Product 1', category: 'Category 1', price: 100, stock: 10 },
            { id: 2, title: 'Product 2', category: 'Category 2', price: 200, stock: 20 },
            // Add more products as needed
        ];

        const productTable = document.getElementById('product-table');
        productTable.innerHTML = '';
        products.forEach(product => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${product.id}</td>
                <td>${product.title}</td>
                <td>${product.category}</td>
                <td>${product.price}</td>
                <td>${product.stock}</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProductModal">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            `;
            productTable.appendChild(row);
        });
    }

    // Initialize the product list
    initializeProducts();

    // Show the home section by default
    showHome();
</script>
</body>
</html>

