<?xml version = "1.0" encoding = "UTF-8"?>
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">    
   <xsl:template match = "/"> 	
      <html> 
         <body> 
		        <div style="margin:auto;">
                <h2><center>Resume</center></h2> 	
		        <p style="line-height:0.4;">Name : <xsl:value-of select = "resume/personal_details/name"/></p>
		        <p style="line-height:0.4;">Mobile Number : <xsl:value-of select = "resume/personal_details/contact_no"/></p>
		        <p style="line-height:0.4;">Mail Id : <xsl:value-of select = "resume/personal_details/e_mail"/></p>
		        <p style="line-height:0.4;">Address : <xsl:value-of select = "resume/personal_details/address"/></p>
		        <hr></hr>
		        <h3><u>Career Objective</u></h3>
		        <p><ul><li style="line-height:0.4;"><xsl:value-of select = "resume/objective"/></li></ul></p>
		        
		        <h3><u>Educational Details</u></h3>
                    <table border = "1"> 
                       <tr bgcolor = "#9acd32"> 
                          <th>Serial Number</th> 
                          <th>Course</th> 
                          <th>Board</th> 
                          <th>Percentage</th>
			        <th>Pass Year</th>
                       </tr> 	
                       <xsl:for-each select="resume/educational_details"> 
                          <tr> 	
                             <td><xsl:value-of select = "sr_no"/></td> 
                             <td><xsl:value-of select = "course"/></td>  
                             <td><xsl:value-of select = "board"/></td> 
                             <td><xsl:value-of select = "percentage"/></td>  
                             <td><xsl:value-of select = "passyear"/></td>		
                          </tr> 
                       </xsl:for-each> 		
                    </table> 

		        <h3><u>Technical Details</u></h3>
		        <p><ul><li style="line-height:0.4;">Programmig Languages : <xsl:value-of select = "resume/technical_details/p_languages"/></li></ul></p>
		        <p><ul><li style="line-height:0.4;">Database : <xsl:value-of select = "resume/technical_details/database"/></li></ul></p>
		        <p><ul><li style="line-height:0.4;">IDE : <xsl:value-of select = "resume/technical_details/ide"/></li></ul></p>

                <h3><u>Cetificates</u></h3>
		        <p><ul><li style="line-height:0.4;">1. <xsl:value-of select = "resume/certifications/one"/></li></ul></p>
		        <p><ul><li style="line-height:0.4;">2. <xsl:value-of select = "resume/certifications/two"/></li></ul></p>
                <p><ul><li style="line-height:0.4;">3. <xsl:value-of select = "resume/certifications/three"/></li></ul></p>

		        <h3><u>Project Details</u></h3>
		        <p><ul><li style="line-height:0.4;">1. <xsl:value-of select = "resume/project_details/one"/></li></ul></p>
		        <p><ul><li style="line-height:0.4;">2. <xsl:value-of select = "resume/project_details/two"/></li></ul></p>
                <p><ul><li style="line-height:0.4;">3. <xsl:value-of select = "resume/project_details/three"/></li></ul></p>
                
		        <h3><u>Personal Details</u></h3>
		        <p style="line-height:0.4;">Father Name : <xsl:value-of select = "resume/basic_details/father_name"/></p>
		        <p style="line-height:0.4;">Date of Birth : <xsl:value-of select = "resume/basic_details/dob"/></p>
		        <p style="line-height:0.4;">Gender : <xsl:value-of select = "resume/basic_details/gender"/></p>
		        <p style="line-height:0.4;">Nationality : <xsl:value-of select = "resume/basic_details/nationality"/></p>
		        <p style="line-height:0.4;">Languages Known : <xsl:value-of select = "resume/basic_details/languages_known"/></p>
		        <p style="line-height:0.4;">Hobbies : <xsl:value-of select = "resume/basic_details/hobbies"/></p>

         </body> 
      </html> 
   </xsl:template>  
</xsl:stylesheet>
