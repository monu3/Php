<html 
    xsl:version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
>
<head>
    <title>external html and style for xml</title>
    <style>


    </style>
</head>
<body>
     <xsl:variable name="externalData" select="document('student.xml')"/>
        <div class="students">
            <xsl:for-each <select name="$externalData/CSIT/student" id=""></select>>
            <div class="student">
                <div class="image">
                     <img src="{image}" alt="auth" />
                </div>
                <div class="content">
                    <h5><xsl:>

</body>

</html>