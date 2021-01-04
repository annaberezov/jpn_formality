<!--
Author: Anna-Maria Berezovski
Date: January 4, 2021
Description: This page is the second in sequence. home.php redirects to this page directly
			 In this page, sentences from the database are pulled and displayed. Their seen parameter is also
			 updated in the database. Once the form has been submitted, it redirects to data.php
-->

<!DOCTYPE HTML>
<html>
<body>

<?php
// Instantiating the variables
	$sen1 = $sen2 = $sen3 = $sen4 = $sen5 = $sen6 = $sen7 = $sen8 = $sen9 = $sen10 = " ";
	$id1 = $id2 = $id3 = $id4 = $id5 = $id6 = $id7 = $id8 = $id9 = $id10 = " ";

	try {
		$pdo = new PDO("mysql:dbname=ab477869db;host=localhost;charset=utf8", "ab477869", "chineseisthebest");

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//echo "Connection Good. Host info: ". $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
	} catch(PDOException $e) {
		die("ERROR: Could not connect. " . $e->getMessage());
	}


	try {
		session_start();
		$sql = "SELECT * 
				FROM jpn_data
				WHERE seen = 0";
		$result = $pdo->query($sql);
		if ($result->rowCount() > 0) {
			echo "<table>";
				echo "<tr>";
					echo "<th>日本語</th>";
					echo "<th>書き言葉スタイル</th>";
				echo "</tr>";
			// sentence 1 ---------------------------------------------------------------
			$row = $result->fetch();
			$id1 = $row['id'];
			$_SESSION['id1s'] = $id1;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
					echo "<form action='data.php' method='POST'>";
						echo "<input type='radio' id='futsutai' name=sen1 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen1 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen1 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id1";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }
            

			// sentence 2---------------------------------------------------------------
			$row = $result->fetch();
			$id2 = $row['id'];
			$_SESSION['id2s'] = $id2;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen2 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen2 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen2 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id2";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }


			// sentence 3---------------------------------------------------------------
			$row = $result->fetch();
			$id3 = $row['id'];
			$_SESSION['id3s'] = $id3;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen3 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen3 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen3 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id3";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 4---------------------------------------------------------------
			$row = $result->fetch();
			$id4 = $row['id'];
			$_SESSION['id4s'] = $id4;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen4 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen4 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen4 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id4";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 5---------------------------------------------------------------
			$row = $result->fetch();
			$id5 = $row['id'];
			$_SESSION['id5s'] = $id5;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen5 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen5 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen5 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id5";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 6---------------------------------------------------------------
			$row = $result->fetch();
			$id6 = $row['id'];
			$_SESSION['id6s'] = $id6;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen6 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen6 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen6 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id6";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 7---------------------------------------------------------------
			$row = $result->fetch();
			$id7 = $row['id'];
			$_SESSION['id7s'] = $id7;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen7 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen7 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen7 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id7";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 8---------------------------------------------------------------
			$row = $result->fetch();
			$id8 = $row['id'];
			$_SESSION['id8s'] = $id8;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen8 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen8 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen8 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id8";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 9---------------------------------------------------------------
			$row = $result->fetch();
			$id9 = $row['id'];
			$_SESSION['id9s'] = $id9;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen9 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen9 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen9 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id9";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

			// sentence 10---------------------------------------------------------------
			$row = $result->fetch();
			$id10 = $row['id'];
			$_SESSION['id10s'] = $id10;
			echo "<tr>";
				echo "<td>" . $row['japanese'] . "</td>";
				echo "<td>";
						echo "<input type='radio' id='futsutai' name=sen10 value='1'>";
						echo "<label for='futsutai'>普通体 </label>";
						echo "<input type='radio' id='teinei' name=sen10 value='2'>";
						echo "<label for='teinei'>丁寧 </label>";
						echo "<input type='radio' id='keigo' name=sen10 value='3'>";
						echo "<label for='keigo'>敬語 </label>";
				echo "</td>";
			echo"</tr>";
			try {
				$seenupdate = "UPDATE jpn_data SET seen = 1 WHERE id = $id10";
            	$pdo->exec($seenupdate);
            } catch(PDOException $e) {
                die("ERROR: Could not execute $seenupdate" . $e->getMessage());
            }

				echo "<td>";
					echo "<input type='submit' name='update' value='送信'>";
				echo "</td>";
			echo "</form>";
			echo "</table>";

		} else {
			echo "No records found";
		}
	} catch(PDOException $e) {
		die ("Error: Could not execute $sql. " . $e->getMessage());
	}
unset($pdo);
?>
</body>
</html>
