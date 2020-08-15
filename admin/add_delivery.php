<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ontrack | Delivery</title>

  <style type="text/css">
    body {

      background-image: url('images/bg1.gif');

    }

    table {
      border: 0px red solid;

      padding-top: 0px;
      margin-top: 0px;
      cellspacing: 0px;
      cellpadding: 0px;
    }

    td {
      border: 0px green dotted;
    }

    table.login_tab {
      background: rgba(255, 255, 255, 0.9);
      cellspacing: 0px;
      cellpadding: 0px;
    }

    table.main_tab {
      background: rgba(0, 0, 0, 0);
      width: 70%;
    }

    td.login {
      background-color: #C0C0C0;
      padding-left: 5px;
      padding-right: 5px;
    }

    td.login_table {
      background: rgba(248, 248, 255, 1);
      padding-top: 50px;
      padding-left: 40px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    td.login_nam {
      height: 30px;
      font-size: 13pt;
      color: white;
      background-color: #3b5998;
      padding-left: 5px;
    }

    td.new {
      height: 30px;
      font-weight: none;
      font-size: 11pt;
    }

    a {
      color: #999933;
    }

    a:hover {

      font-size: 30pt;
    }

    td.marquee {
      padding-top: 1px;
      padding-bottom: 1px;
      padding-left: 130px;
      background: rgba(0, 0, 0, 1);
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    td.footer {
      background-color: #2952A3;
      background-image: url('images/tdback1.gif');
      border-top: 1px grey solid;
      color: #999933;
      text-align: center;
      font-size: 8pt;
      padding-bottom: 5px;
      padding-top: 5px;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="metro, free website template, beautiful grid, image grid menu, colorful theme" />
  <meta name="description" content="Metro is a free website template by templatemo.com and it features jQuery horizontal scrolling among pages." />

  <link href="templatemo_style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
  <script type="text/javascript" src="js/jquery.localscroll-min.js"></script>
  <script type="text/javascript" src="js/init.js"></script>

  <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
  <script type="text/JavaScript" src="js/slimbox2.js"></script>

  <style type="text/css">
    <!--
    .style1 {
      color: #000000
    }

    .style2 {
      color: #000000
    }
    -->
  </style>

  <form action="addcourier.php" method="post" name="frmShipment">

    <table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
      <tbody>
        <tr>
          <td colspan="3" class="TrackMediumBlue" align="left">
            <strong>Sender's info : </strong></td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right" width="162">Sender Name :</td>
          <td width="16">&nbsp;</td>
          <td width="339">
            <input name="sname" maxlength="100" size="40" type="TEXT"> </td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Origin City :</td>
          <td>&nbsp;</td>
          <td><input name="orig" id="orig" maxlength="13" size="40" type="TEXT"></td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Sender's Address :</td>
          <td>&nbsp;</td>
          <td><span class="REDLink">
              <textarea name="saddress" cols="27" rows="2" id="saddress"></textarea>
              *</span></td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" class="TrackMediumBlue" align="right">
            <div class="headtext13" align="left"><strong>Receiver info : </strong></div>
          </td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Receiver's Name : </td>
          <td>&nbsp;</td>
          <td><input name="rname" id="rname" maxlength="100" size="40" type="TEXT">
            <span class="REDLink">*</span></td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Destination City : </td>
          <td>&nbsp;</td>
          <td><input name="dest" id="dest" maxlength="13" size="40" type="TEXT"></td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right"> Receiver's Address: : </td>
          <td>&nbsp;</td>
          <td><span class="REDLink">
              <textarea name="raddress" cols="27" rows="2" id="raddress"></textarea>
              *</span></td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" class="TrackMediumBlue" align="right">
            <div class="headtext13" align="left"><strong>Courier info : </strong></div>
          </td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Mode of Transport :</td>
          <td>&nbsp;</td>
          <td><select id="mode" name="mode">
              <option value="air" selected="selected">Air</option>
              <option value="surface">Surface</option>
              <option value="water">Water</option>
            </select> </td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Weight : </td>
          <td>&nbsp;</td>
          <td><input id="weight" size="10" maxlength="10" name="wt">
            (kg)</td>
        </tr>
        <tr>
          <td class="TrackMediumBlue" align="right">Number of Packages:</td>
          <td>&nbsp;</td>
          <td><input name="num" id="num" size="40" maxlength="20" type="INT"></td>
        </tr>

        <tr>
          <td class="TrackNormalBlue" align="right" valign="top">Status :</td>
          <td>&nbsp;</td>
          <td><select name="status" id="status">
              <option selected="selected" value="Loaded">Loaded</option>
            </select></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>


          <td><input align="right" name="pay" type="submit" value="Add Delivery" /></td>


        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </form>




  <td </td> <tr>
  <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
      <tbody>
        <tr>
          <td bgcolor="" height="40" width="476">&nbsp;</td>
          <td bgcolor="" width="304">
            <div align="right"></div>
          </td>
        </tr>
      </tbody>
    </table>
  </td>
  </tr>
  </tbody>
  </table>


  </div>
  </br>


  </div>


<body>
</body>

</html>