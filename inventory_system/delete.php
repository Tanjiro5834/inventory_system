<?php
    require_once "db_connector.php";

    if (isset($_POST['id'])) {
        $itemId = $_POST['id'];

        $delete = "DELETE FROM items WHERE id=?";
        if ($stmt = mysqli_prepare($conn, $deleteQuery)) {
            mysqli_stmt_bind_param($stmt, "i", $itemId);
            $success = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            
            header("Location: inventory.php?message=" . ($success ? "Item deleted successfully" : "Error deleting item"));
        } else {
            echo "Error: Could not prepare the SQL statement.";
        }
    }
    mysqli_close($conn); 
?>