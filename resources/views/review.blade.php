<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../reviewStyle.css">
</head>
<body>
    <div class="card-and-form-container">
        <!-- Card -->
        <!-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="Dune.jpeg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div> -->

        <!-- Formulir Review -->
        <div class="review-form">
            <h2>User Reviews</h2>
            <form id="reviewForm" action="/review/add" method="POST">
                @csrf
                <label for="rating">Rating (1-5):</label>
                <input type="number" id="star" name="star" min="1.0" max="5.0" required>

                <label for="review">Review:</label>
                <textarea id="review" name="review" rows="4" required></textarea>

                <input type="hidden" value="{{$product_id}}" name="movie_id">
                <button type="submit" id="submitBtn">Submit</button>
            </form>
        </div>
    </div>

    <script src="../main.js"></script>
</body>
</html>
