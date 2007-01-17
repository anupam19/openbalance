<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>OpenBalance servers</title>


  <link rel="STYLESHEET" href="style.css" type="text/css">
  <script type="text/javascript" src="dojo.js"></script>
  <script type="text/javascript">
  	dojo.require("dojo.widget.Dialog");
	dojo.require("dojo.widget.ContentPane");
  </script>
  <script type="text/javascript">
  	var addServerDlg;
	var serverContent;

	function init(e) {
		serverContent = dojo.widget.byId("ServerContent");
		serverContent.cacheContent = false;
		addServerDlg = dojo.widget.byId("AddServerContent");
		addServerDlg.setBackgroundColor("gray");
		addServerDlg.setBackgroundOpacity(0.5);
		var btn = document.getElementById("hider");
		addServerDlg.setCloseControl(btn);
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
      <div align="center">
      <table style="height: 96px; width: 157px;" border="0" cellpadding="0" cellspacing="0">

        <tbody>

          <tr style="font-weight: bold;">

            <td><big>Load Balancer</big></td>

          </tr>

          <tr>

            <td>
            <ul>

              <li><big><b>Servers</b></big></li>

              <li><a href="services.php">Services</a></li>

              <li><a href="virtualservers.php">Virtual Servers</a></li>

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
      <div dojotype="ContentPane" id="ServerContent" href="serverContent.php">
      </div>
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
<div dojoType="dialog" id="AddServerContent" bgColor="white" bgOpacity="0.5" toggle="fade" toggleDuration="250">
	<form onsubmit="return false;">
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
                  			<input style="border: 0pt none ; padding: 0pt; background-color: rgb(255, 186, 39); color: rgb(255, 255, 255); width: 45px; font-weight: bold;" value="Cancel" id="hider" type="button" onclick="javascript:serverContent.refresh()">
				</td>
			</tr>
		</table>
			</form>
		</td></tr></table>
	</form>
</div>
</body>
</html>
