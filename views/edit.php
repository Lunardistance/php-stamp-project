<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="editSubmit.php" method="POST">
    <div class="form-group">
		<label for="studentid">Stamp Id</label>
		<input type="text" class="form-control" id="stampid" name="stampid" />
	</div>
	<div class="form-group">
		<label for="picture">Image</label>
		<input type="file" method="post" class="form-control" id="image" name="image" required />
	</div>
	<div class="form-group">
		<label for="desc">Description</label>
		<input type="text" class="form-control" id="desc" name="desc" required />
    </div>
    <div class="form-group">
    <label for="collection">Collection</label>
		<input type="text" class="form-control" id="name" name="collection" required />
    </div>
    <div class="form-group">
    <label for="size">size</label>
    <select class="custom-select" id="size" name="size" required>
			<option selected>Choose one</option>
			<option value="yes">.5x.5</option>
            <option value="no">1x1</option>
            <option value="no">1.5x1.5</option>
            <option value="no">2x2</option>
            <option value="no">3x3</option>
            <option value="no">1x1.5</option>
            <option value="no">1x2</option>
            <option value="no">1x3</option>
            <option value="no">2x1</option>
            <option value="no">2x1.5</option>
            <option value="no">2x3</option>
            <option value="no">3x1</option>
            <option value="no">3x1.5</option>
            <option value="no">3x2</option>
</select></div>
    <div class="form-group">
    <label for="duplicates">Number of Duplicates?</label>
		<input type="text" class="form-control" id="duplicatenumber" name="duplicatenumber" required />
    </div>
	<div class="form-group">
		<label for="album">Glued to Album?</label>
		<select class="custom-select" id="glued" name="glued" required>
			<option selected>Choose one</option>
			<option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
	</div>
	<div class="form-group">
		<label for="year">Year</label>
		<textarea class="form-control" id="year" name="year" required></textarea>
	</div>

	<button type="submit" class="btn btn-primary mb-2">Enter</button>
	<a href="login.php">Back</a>

    </form>
</body>
</html>