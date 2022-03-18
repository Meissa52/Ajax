<div align="center">
<?php
          if (isset($_GET['Message'])) {
			echo "<div class='center'>
					<h4 class='green-text'>$_GET[Message]</h4>
					<br />
					</div>";
		}
	?>
	</div>
<form action="login.php" method="POST"> <!---->
	<table align="center">
		<tr>
			<th><h2 align="center">Login</h2></th>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input id="UserName" type="text" name="uname" maxlength="20" value="Soccer"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input id="Password" type="password" name="pwd" maxlength="20" value="Bestsoccerplayer"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
</form>