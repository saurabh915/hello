<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match= "/">
<html>
<head>
<style>

</style>
</head>
<body>

<h2 align="center"><u>Resume</u></h2>



<xsl:for-each select="Resume/Personal"> 

<xsl:value-of select="@id"/>

<xsl:value-of select="ffd"/>
<xsl:value-of select="lastname"/>
<xsl:value-of select="designation"/>
<xsl:value-of select="salary"/>

</xsl:for-each>

</body>
</html>
</xsl:template>
</xsl:stylesheet> 
