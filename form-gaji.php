<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="" content="">
  <title>Gaji</title>
</head>

<body>
  <FORM ACTION=GAJI.PHP METHOD=post>
    <TABLE>
      <TR>
        <TD>NIP : </TD>
        <TD>
          <INPUT TYPE=text NAME=nip>
        </TD>
      <TR>
        <TD>Golongan : </TD>
        <TD>
          <INPUT TYPE=radio NAME=gol value=1>I
          <INPUT TYPE=radio NAME=gol value=2 CHECKED>II
          <INPUT TYPE=radio NAME=gol value=3>III
        </TD>
      </TR>
      <TR>
        <TD>Jabatan : </TD>
        <TD><SELECT NAME=jab>
            <OPTION value=1>Direksi
            <OPTION value=2>Kepala Bidang
            <OPTION value=3 SELECTED>Staff
          </SELECT>
        </TD>
      </TR>
      <TR>
        <TD VALIGN=top>Potongan Organisasi : </TD>
        <TD><INPUT TYPE=checkbox NAME=org1 CHECKED>Koperasi
          <BR>
          <INPUT TYPE=checkbox NAME=org2>Serikat Pekerja
        </TD>
      </TR>
      <TR>
        <TD>
          <INPUT TYPE=submit VALUE=Submit>
        </TD>
    </TABLE>
  </FORM>
</body>

</html>