<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <title>CPS530 Lab03</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
    <link rel="stylesheet" href="style.css" charset="utf-8">
  </head>
<body class="center">
<form action = "part2.asp" method ="get" >
<INPUT TYPE = "SUBMIT" NAME = "bcolor" VALUE = "Blue" style = "    background-color: blue;">
<INPUT TYPE = "SUBMIT" NAME = "bcolor" VALUE = "Red" style = "    background-color: red;">
<INPUT TYPE = "SUBMIT" NAME = "bcolor" VALUE = "Green" style = "    background-color: green;">
<INPUT TYPE = "SUBMIT" NAME = "bcolor" VALUE = "Orange" style = "    background-color: orange;">
<INPUT TYPE = "SUBMIT" NAME = "bcolor" VALUE = "Yellow" style = "    background-color: yellow;">
</form>
<%
bgcolor = (request.querystring("bcolor"))
Response.Write ("<style> body{background-color:"& bgcolor & "}</style>" )
theTime = Request.Cookies("lastVisitTime")
theDate = Request.Cookies("lastVisitDate")
If theTime = "" Then
	Response.write "<h3>Hello and Welcome.<br> This is your First Visit</h3>"
else	
	Response.write "<h3>Glad to have you back.<br>Your last visit was at " & theTime & " on " & theDate & "</h3>"
End If
Response.Cookies ("lastVisitDate") = date()
Response.Cookies ("lastVisitDate").expires = Date() + 365
Response.Cookies ("lastVisitTime") = time()
Response.Cookies ("lastVisitTime").expires = Date() + 365
%>
</body>
</html>


