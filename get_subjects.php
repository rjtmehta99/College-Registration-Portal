<?php

	$connection = mysqli_connect('localhost', 'root', '', 'webtech');

      $subject_id = $_GET['id'];
      //$semester = $_POST['semester'];

      $data_subjects = mysqli_query($connection, "SELECT * FROM `subjects` WHERE `subject_id` = {$subject_id}");

      while ($row_subject = mysqli_fetch_array($data_subjects)) {
        # code...

        echo '<tr>
        <td><select class="form-control" id="course" name="course">
            <option>'.$row_subject['course'].'</option>
          </select></td>
        <td><select class="form-control" id="code" name="code">
            <option>'.$row_subject['code'].'</option>
            </select></td>
        <td><select class="form-control" id="credit" name="credit">
            <option>'.$row_subject['credit'].'</option>
            </select></td>
      </tr>';
      }

/*	session_start();
	
	require_once "config.php";

	$subject_id = $_GET['subject_id'];

	$data_subjects = mysqli_query($mysql, "SELECT * FROM `subjects` WHERE `subject_id` = {$subject_id}");
*/
?>