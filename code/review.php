<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Feedback</title>
	<style type="styles.css"></style>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body style="background-color: lightgreen">
	 <h1 style="text-align:center;color:black;">Thankyou For Shopping With Us </h1>
	<h1 style="text-align: center;">FEEDBACK</h1>
<form style="text-align: center;" method="post" action="insert.php">
<div><h3>How was your experience of shopping with us</h3></div>
<div>
<label for="a">
	<svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-emoji-laughing" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5z"/>
  <path d="M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
<br>
	Good
	<input type="radio" id="a" name="w" value="Good">
</label>
<p style="margin-left: 0px">

<label for="b"><svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
<br>
Bad
	<input type="radio" id="b" name="w" value="Bad">
</div>
</label>
</p>
<div>Any Comments</div>
<form action="/action_page.php">
<label for="w3review"></label>
<textarea id="w3review" name="w3review" rows="10" cols="50">
  </textarea>

</form>
<div>
<a href="homepage.php" style="margin-left: 660px">
Submit
</a>

</div>
</form>
</body>
</html>