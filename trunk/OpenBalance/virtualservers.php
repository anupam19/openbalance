<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>OpenBalance virutal servers</title>

  <link rel="STYLESHEET" href="style.css" type="text/css">
  <script type="text/javascript" src="dojo.js"></script>
  <script type="text/javascript">
  	dojo.require("dojo.widget.Dialog");
  </script>
  <script type="text/javascript">
  	var addServiceDlg;
  	var addServerDlg;
	function init(e) {
		addServiceDlg = dojo.widget.byId("AddServiceContent");
		addServiceDlg.setBackgroundColor("gray");
		addServiceDlg.setBackgroundOpacity(0.5);
		var closeServiceBtn = document.getElementById("serviceHider");
		addServiceDlg.setCloseControl(closeServiceBtn);

		addServerDlg = dojo.widget.byId("AddServerContent");
		//addServerDlg.setBackgroundColor("gray");
		addServerDlg.setBackgroundOpacity(0);
		var closeServerBtn = document.getElementById("serverHider");
		addServerDlg.setCloseControl(closeServerBtn);
	}
	dojo.addOnLoad(init); 
  </script>

</head>


<body style="background-color: rgb(255, 255, 255);">

<div align="center">
<table border="0" cellpadding="0" cellspacing="0" width="750">

  <tbody>

    <tr>

      <td colspan="3" width="750">
      <table border="0" cellpadding="0" cellspacing="0" width="750">

        <tbody>

          <tr>

            <td colspan="3" width="750"> <span style="font-size: 28px; color: rgb(255, 186, 39);">OpenBalance</span></td>

          </tr>

          <tr>

            <td width="330"> <span style="font-size: 20px; color: rgb(204, 204, 204);">balancing
loads for great justice</span></td>

            <td align="right" width="400">
            <table border="0" cellpadding="0" cellspacing="0" width="400">

              <tbody>

                <tr>

                  <td align="right" height="20"> <span style="color: rgb(170, 170, 170);"> This is not a search
box&nbsp; </span> <input onfocus="this.style.background='FFFFFF';" onblur="this.style.background='F9F9F9';" type="text">&nbsp;
                  <input style="border: 0pt none ; padding: 0pt; background-color: rgb(255, 186, 39); color: rgb(255, 255, 255); width: 25px; font-weight: bold;" value="GO" type="submit"> </td>

                </tr>

              </tbody>
            </table>

            </td>

            <td width="20"></td>

          </tr>

        </tbody>
      </table>

      </td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#ffffff" height="15"></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#cccccc" height="1"></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#ffffff" height="10"></td>

    </tr>

    <tr>

      <td bgcolor="#ffffff" valign="top" width="170">
      <span style="font-size: 6px;"><br>

      </span>
      <div align="center"> <big> </big>
      <table style="height: 96px; width: 157px;" border="0" cellpadding="0" cellspacing="0">

        <tbody>

          <tr style="font-weight: bold;">

            <td><big>Load Balancer</big></td>

          </tr>

          <tr>

            <td>
            <ul>

              <li><a href="servers.php">Servers</a></li>

              <li><a href='services.php'>Services</a></li>

              <li><big><b>Virtual Servers</b></big></li>

            </ul>

            </td>

          </tr>

        </tbody>
      </table>

      <span style="font-size: 6px;"><br>

      </span> </div>

      </td>

      <td bgcolor="#cccccc" width="1"></td>

      <td valign="top" width="579" align='center'>
      <table style="width: 95%;" border="0" cellpadding="2" cellspacing="0">

        <tbody>

          <tr>

            <td style="width: 90px;">&nbsp;</td>

            <td style="color: rgb(255, 170, 39); width: 30%;"><font size="+1"><b>Name</b><br><hr color='#cccccc' width='100%' /></font></td>

            <td style="color: rgb(255, 170, 39);"><font size="+1"><b>IP</b><br><hr color='#cccccc' width='100%' /></font></td>

            <td style="color: rgb(255, 170, 39);"><font size="+1"><b>Port</b><br><hr color='#cccccc' width='100%' /></font></td>

            <td style="color: rgb(255, 170, 39);"><font size="+1"><b>Protocol</b><br><hr color='#cccccc' width='100%' /></font></td>

          </tr>
          <tr>

            <td><a href='#' alt='Disable'><img border=0 style="width: 16px; height: 16px;" alt="Disable" title="Disable" src="images/lightbulb.png"></a> <a href='#' alt='Edit'><img style="width: 16px; height: 16px;" border=0 alt="Edit" title="Edit" src="images/server_edit.png"></a> <a href='#'><img border=0 style="width: 16px; height: 16px;" alt="Copy" title="Copy" src="images/server_go.png"></a> <a href='#'><img border=0 style="width: 16px; height: 16px;" alt="Delete" title="Delete" src="images/server_delete.png"></a></td>

            <td>Production Website</td>

            <td>200.42.59.76</td>

            <td>80</td>

            <td>HTTP</td>

          </tr>

          <tr>
            <td><a href='#' alt='Enable'><img border=0 style="width: 16px; height: 16px;" alt="Enable" title="Enable" src="images/lightbulb.png"></a> <a href='#' alt='Edit'><img style="width: 16px; height: 16px;" border=0 alt="Edit" title="Edit" src="images/server_edit.png"></a> <a href='#'><img border=0 style="width: 16px; height: 16px;" alt="Copy" title="Copy" src="images/server_go.png"></a> <a href='#'><img border=0 style="width: 16px; height: 16px;" alt="Delete" title="Delete" src="images/server_delete.png"></a></td>

            <td>Internal JNDI</td>

            <td>192.168.40.1</td>
	    
            <td>1099</td>

            <td>TCP</td>

          </tr>

          <tr>

            <td colspan="3">
            <br>

            <a href='javascript:addServiceDlg.show()' alt='Add'><img border=0 style="width: 16px; height: 16px;" alt="Add" title="Add" src="images/server_add.png"> Add New Virtual Server</a>
            </td>

          </tr>

        </tbody>
      </table>

      </td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#ffffff" height="10"></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#cccccc" height="1"></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#ffffff" height="5"></td>

    </tr>

  </tbody>
</table>

</div>

<div dojoType="dialog" id="AddServiceContent" bgColor="white" bgOpacity="0.5" toggle="fade" toggleDuration="250">
		<table border='1' bordercolor='black' cellpadding='5' cellspacing='0' bgcolor='white'>
		<tr><td align='center'>
			<b>Add Service</b>
			<form name='addService' action='services.php' method='post'>
		<table border='0' cellpadding='3' cellspacing='0' bgcolor='white'>
			<tr>
				<td><b>Name:</b></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td><b>Server:</b></td>
				<td>
					<select name='server'>
						<option>Server One</option>
						<option>Server Two</option>
						<option>Server Three</option>
					</select>
					OR
            				<a href='javascript:addServerDlg.show()' alt='New Server'><img border=0 style="width: 16px; height: 16px;" alt="New Server" title="New Server" src="images/server_add.png"> Add New Server</a>
				</td>
			</tr>
			<tr>
				<td><b>Port:</b></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td><b>Protocol:</b></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
                  			<input style="border: 0pt none ; padding: 0pt; background-color: rgb(255, 186, 39); color: rgb(255, 255, 255); width: 30px; font-weight: bold;" value="Add" type="submit">
                  			<input style="border: 0pt none ; padding: 0pt; background-color: rgb(255, 186, 39); color: rgb(255, 255, 255); width: 45px; font-weight: bold;" value="Cancel" id="serviceHider" type="button">
				</td>
			</tr>
		</table>
			</form>
		</td></tr></table>
</div>
<div dojoType="dialog" id="AddServerContent" bgColor="white" bgOpacity="0.5" toggle="fade" toggleDuration="250">
	<table border='1' bordercolor='black' cellpadding='5' cellspacing='0' bgcolor='white'>
	<tr><td align='center'>
		<b>Add Server</b>
		<form name='addServer' action='servers.php' method='post'>
	<table border='0' cellpadding='3' cellspacing='0' bgcolor='white'>
		<tr>
			<td><b>Name:</b></td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td><b>IP:</b></td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input style="border: 0pt none ; padding: 0pt; background-color: rgb(255, 186, 39); color: rgb(255, 255, 255); width: 30px; font-weight: bold;" value="Add" type="submit">
				<input style="border: 0pt none ; padding: 0pt; background-color: rgb(255, 186, 39); color: rgb(255, 255, 255); width: 45px; font-weight: bold;" value="Cancel" id="serverHider" type="button">
			</td>
		</tr>
	</table>
		</form>
	</td></tr></table>
</div>
</body>
</html>
