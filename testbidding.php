<?php
// Connect to the MySQL database
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$host = "localhost:3308";
$username = "root";
$password = "";
$dbname = "ag";     //je ne sais pas quel dbname mettre? 
$conn = mysqli_connect($host, $username, $password, $dbname);
//$db_handle = mysqli_connect('localhost:3308', 'root', '');
//$db_found = mysqli_select_db($db_handle, $database);

// Get the current highest bid for the auction listing
$produit_id = $_POST['produit_id'];
$sql = "SELECT * FROM produits WHERE id=$produit_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$current_bid = $row['current_bid'];

// Check if the new bid is higher than the current highest bid
$new_bid = $_POST['new_bid'];
if ($new_bid > $current_bid) {
  // Update the database with the new highest bid
  $sql = "UPDATE listings SET current_bid=$new_bid WHERE id=$listing_id";
  mysqli_query($conn, $sql);
  echo "Bid placed successfully!";
} else {
  echo "Your bid must be higher than the current highest bid.";
}
//end else fermer la connection 
?>
<?php mysqli_close($db_handle); ?>
