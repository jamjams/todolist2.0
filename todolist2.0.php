<!-- completed login -->
<?php
	require_once(__DIR__ . "/model/config.php");
?>
<html>
	<head>
		<title>-Jah'melah's To-Do List-</title>

		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<header>
		<audio controls>
		  <source src="music/musicfortodo.mp3" type="audio/mpeg">
		</audio>
		<button type="button" class="registerbutton">
			<a href="<?php echo $path. "register.php"?>">Register</a>
		</button>
		<button type="button" class="loginbutton">
			<a href="<?php echo $path. "login.php"?>">Login</a>
		</button>
		<button type="button" class="logoutbutton">
			<a href="<?php echo $path. "controller/logout-user.php"?>">Logout</a>
		</button>
	</header>
	<body>

		<div class="wrap">
			<div class="task-list">
				<ul>
					<?php require("includes/connect.php"); 
					$mysqli=new mysqli('localhost', 'root','root', 'todo');
					$query = "SELECT * FROM task ORDER BY date ASC, time ASC";
					if ($result = $mysqli->query($query)){
						$numrows = $result->num_rows;
						if($numrows>0){
							while($row = $result->fetch_assoc()){
								$task_id = $row['id'];
								$task_name = $row['task'];

								echo '<li>
								<span>'.$task_name.'</span>
								<img id= "'.$task_id. '" class="delete-button" width="10px" src="images/close.svg"/>
								</li>';
							}
						}
					}
					?>
				</ul>
			</div>
		<form class="add-new-task" autocomplete="off"><center>
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</center></form>
		</div>
	</body>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<script>
		add_task();

		function add_task(){
			$('.add-new-task').submit(function() {
				//created new_task variable
				var new_task = $('.add-new-task input[name=new-task]').val();
				//if the variable is not empty
				if(new_task != '') {
					$.post('includes/add-task.php', { task: new_task}, function(data) {
							$('add-new-task input[name=new-task]').val();
							$(data).appendTo('.task-list ul').hide().fadeIn();
					});
				}
				return false;
			});
		}

		$('.delete-button').click(function(){
			var current_element = $(this);
			var task_id = $(this).attr('id');

			$.post('includes/delete-task.php', {id: task_id}, function(){
			current_element.parent().fadeOut("fast", function(){
				$(this).remove();
			});
		});
});
</script>

</html>