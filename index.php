<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title>mail send</title>
</head>
<body>
<br>
<br>
<div class="container">
<h2 class="text-align:center">Send Email from localhost server through PHPMailer</h2>
	<form action="index2.php" method="POST">
	    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">To</label>
  <input type="email" name="mail_to" class="form-control" id="exampleFormControlInput1" placeholder="selim@gmail.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Subject</label>
  <input type="text" name="mail_sub" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Subject">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="mail_msg" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write's your on mind."></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
	</form>
    </div>
</body>
</html>