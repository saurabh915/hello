<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match= "/">
<html>
<head>
<style>
td {
  text-align: center;
}
table
{
   border-bottom: 2px inset #ddd;
  
}
</style>
</head>
<body>

<h2 align="center"><u>Employee Details</u></h2>

<table  align="center" border-width="4px" border-style="solid">
<tr bgcolor="#ff6347">
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>

<xsl:for-each select="class/employee"> 
<tr>
<td>
<xsl:value-of select="@id"/>
</td>
<td><xsl:value-of select="firstname"/></td>
<td><xsl:value-of select="lastname"/></td>
<td><xsl:value-of select="designation"/></td>
<td><xsl:value-of select="salary"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet> 
