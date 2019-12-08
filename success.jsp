<%
    if ((session.getAttribute("ID") == null) || (session.getAttribute("ID") == "")) {
%>
You are not logged in<br/>
<a href="login.html">Please Login</a>
<%} else {
%>
Welcome <%=session.getAttribute("ID")%>
<a href='org2.html'>home</a>
<%
    }
%>