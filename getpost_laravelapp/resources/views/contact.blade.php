<html>
<head>
    <title>Contactus Page</title>
</head>
<form method="POST" action="{{ URL::to('/process') }}">    
@csrf
Name:<input type="text" name="txt1">
<br/>
Age:<input type="number" name="txt2">
<br/>
<input type="submit" value="submit">
</form>
</html>