<?php
session_start();
require_once "functions.php";
$_user_id = $_SESSION['id'];
if(!$_user_id) {
	header("Location: index.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-3">
				<div class="left-side">
					<h1>Menu</h1>
					<div class="left-side-links">
						<a href="words.php" class="menu-item" data-target="words">All Words</a>
						<a href="#" class="menu-item" data-target="wordsform">Add New Word</a>
						<a href="logout.php">Logout</a>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="vocabolary-section">
		            <h1 class="text-center">My Vocabolaries</h1>
		            <div class="content-panel">
		            	<div class="vocabolary-word-table helement" id="words">
		            		<div class="mb-5">
		            			<div class="row">
			            			<div class="col-6">
			            				<select id="alphabets" class="form-select w-50" name="" id="">
			            					<option value="all">All Words</option>
			            					<option value="a">#A</option>
			            					<option value="b">#B</option>
			            					<option value="c">#C</option>
			            				</select>
			            			</div>
			            			<div class="col-6">
			            				<form method="post" action="">
			            					<input class="ms-auto form-control mb-2" type="search" name="search" id="search" placeholder="Search">
				            				<input type="submit" name="submit" value="submit" class="btn btn-primary" />
			            				</form>
			            			</div>
			            		</div>
		            		</div>
		            		<table id="wordsTable" class="table table-bordered table-hover">
		            			<thead>
		            				<tr>
		            					<th>Word</th>
		            					<th>Definition</th>
		            				</tr>
		            			</thead>
		            			<tbody>
		            				<?php
	            						if(isset($_POST['submit'])) {
	            							$searchedText = $_POST['search'];
	            							$words = getWords($_user_id, $searchedText);
	            						} else {
	            							$words = getWords($_user_id);
	            						}
		            					if(count(getWords($_user_id)) > 0) {
		            						$length = count($words);
		            						for($i = 0; $i < $length; $i++) {?>
		            							<tr>
					            					<td><?php echo $words[$i]['word']; ?></td>
					            					<td><?php echo $words[$i]['meaning']; ?>.</td>
					            				</tr>
		            						<?php }
		            					}
		            				?>
		            			</tbody>
		            		</table>
		            	</div>
		            	<!-- /. word list -->
		            	<div class="word-insert-form helement" id="wordsform" style="display: none;">
		            		<form action="tasks.php" method="post">
		            			<h4>Add New Word</h4>
		            			<fieldset>
		            				<label for="word">Word</label>
		            				<input type="text" name="word" id="word" placeholder="Insert Word" class="form-control mb-3 mt-1">
		            				<label for="meaning">Meaning</label>
		            				<textarea name="meaning" id="meaning" cols="30" rows="10" class="form-control mb-3" placeholder="Defination"></textarea>
		            				<input type="hidden" name="action" value="addword">
		            				<input type="submit" class="btn btn-primary" value="Add Word">
		            			</fieldset>
		            		</form>
		            	</div>
		            </div>
		            <!-- content panel -->
		        </div>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
</body>
</html>