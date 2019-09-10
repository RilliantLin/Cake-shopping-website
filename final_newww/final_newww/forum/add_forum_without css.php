<html>
<head><title>add forum</title>
<!--
<script type="text/javascript">
	var xmlHttp;
 	function myFunction() {
		
            xmlHttp = null;
			xmlHttp = new XMLHttpRequest();
            
            if (xmlHttp != null) {
				document.getElementById("info").innerHTML="123";
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", "forumIndex.php?forum_name=form.forum_name.value&forum_description=form.forum_description.value&isguest=form.isguest.value", true);
                xmlHttp.send(null);

            }else {
                alert( "Your browser does not support XMLHTTP.");
            }
	}
	
     function stateChange(){
        if((xmlHttp.readyState ==4)&&(xmlHttp.status == 200)){
            
            document.getElementById("info").innerHTML=xmlHttp.responseText;
           

            
        }            
    }
</script>
-->

<form name="form" action="save_forum.php" method="get"><table width="400" border="1" align="center" cellpadding="5" cellspacing="1" class="mrg-top maintable">
<tr id="title">
<td colspan="2">Forum Management</td>
</tr>
<tr>
<td width="23%"><strong>Forum Name</strong></td>
<td width="77%"><textarea name="forum_name" cols="30" rows="5"></textarea></td>
</tr>

<tr>
<td>Guest?<input name="isguest" type="checkbox" id="isguest" value="1" /></td>
<td><input name="Submit" type="submit" class="btn" value="add" />
<input name="Submit2" type="reset" class="btn" value="reset" /></td>
</tr>
</table>
<br>
</form>
<p id="info"></p>
