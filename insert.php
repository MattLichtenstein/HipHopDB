<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>




What would you like to insert?
<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value="">Select...</option>
    <option value="insertartist.php">Artist</option>
    <option value="insertalbum.php">Album</option>
    <option value="inserttrack.php">Track</option>
</select>
</form>





</body>
</html>



