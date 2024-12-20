<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bc44e66a1b.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="nav">
        <span id="logo">Motorparts and Accessories</span>
        <div id="links">
            <span>Orders</span>
            <span>Sales</span>
            <span>Inventory</span>
            <span><i class="fa-solid fa-user"></i></span>
        </div>
    </div>
    
    <div id="search_div">
        <i class="fa-solid fa-search"></i>
        <input type="text" id="inp" style="border: none; width: 90%; height: 100%; margin-left: 10px;">
    </div>

    <!-- Form for new item -->
    <form id="item_form" class="item_form_show" action="create.php" method="post" enctype="multipart/form-data">
        <h3>New Item</h3>
        <div id="pic">
            <img src="" alt="" style="width: 80%; height: 150px;">
            <a style="font-size: 13px; font-weight: lighter;">(optional)</a> <br>
            <button class="btn" id="upload_image_btn" type="button">Upload Image</button>
            <input type="file" name="image" id="image_input" style="display: none;">
        </div>
        <div style="margin-top: 50px;">
            <label for="name">Item Name: </label> <br>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="type">Item Type: </label> <br>
            <input type="text" name="type" id="type">
        </div>
        <div>
            <label for="stock">Stocks:</label> <br>
            <input type="text" name="stock" id="stock" required>
        </div>
        <div>
            <label for="price">Price: </label> <br>
            <input type="text" name="price" id="price" required>
        </div>

        <div id="cc">
            <button class="btn confirm_btn" id="create_btn" type="submit" name="insert">Create</button>
        </div>
        <div id="cancel_cont">
            <button class="btn cancel_btn" id="cancel_btn" type="button">Cancel</button>
        </div>
    </form>

    <!-- For edit item -->
    <form id="edit_form" class="item_form" action="create.php" method="post" enctype="multipart/form-data">
        <h3>New Item</h3>
        <div id="pic">
            <img src="" alt="" style="width: 80%; height: 150px;">
            <a style="font-size: 13px; font-weight: lighter;">(optional)</a> <br>
            <button class="btn" id="upload_image_btn" type="button">Upload Image</button>
            <input type="file" name="image" id="image_input" style="display: none;">
        </div>

        <input type="text" name="id" id="edit_id" style="display: none;">

        <div style="margin-top: 50px;">
            <label for="name">Item Name: </label> <br>
            <input type="text" name="name" id="edit_name" required>
        </div>
        <div>
            <label for="type">Item Type: </label> <br>
            <input type="text" name="type" id="edit_type" required>
        </div>
        <div>
            <label for="stock">Stocks:</label> <br>
            <input type="text" name="stock" id="edit_stock" required>
        </div>
        <div>
            <label for="price">Price: </label> <br>
            <input type="text" name="price" id="edit_price" required>
        </div>

        <div id="cc">
            <button class="btn confirm_btn" id="edit_btn" type="submit" name="insert">Edit</button>
        </div>
        <div id="cancel_cont">
            <button class="btn cancel_btn" id="edit_cancel_btn" type="button">Cancel</button>
        </div>
    </form>

    <!-- Sort and Create New Item -->
    <div class="container">
        <div class="sort">
            <label for="services" style="font-weight: bold;">Type:</label>
            <br>
            <select id="services" name="services" class="select">
                <option value="" disabled selected>Select Type...</option>
                <option value="web-design">..</option>
                <option value="app-development">..</option>
                <option value="seo">..</option>
            </select>
            <br><br><br>
            <label for="services" style="font-weight: bold;">Sort by:</label>
            <br>
            <input type="radio" name="sort" style="margin-top: 10px;"> Stock
            <br>
            <input type="radio" name="sort" style="margin-top: 10px;"> Price
            <br><br><br>
            <button id="new_btn" class="new_stock btn">+ Create New Item</button>
        </div>

        <div class="item_container" id="item_container">
            <?php include('read.php'); ?>
        </div>
    </div>

    <script src="index.js"></script>
</body> 
</html>
