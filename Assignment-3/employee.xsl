<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Employee Details</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        text-align: center;
                    }
                    h1 {
                        color: #2c3e50;
                    }
                    table {
                        width: 60%;
                        margin: auto;
                        border-collapse: collapse;
                        background-color: white;
                    }
                    th, td {
                        border: 1px solid #2c3e50;
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #3498db;
                        color: white;
                    }
                    tr:nth-child(even) {
                        background-color: #ecf0f1;
                    }
                    tr:hover {
                        background-color: #d5dbdb;
                    }
                </style>
            </head>
            <body>
                <h1>Employee List</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Hire Year</th>
                        <th>Salary</th>
                    </tr>
                    <xsl:for-each select="employees/employee">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="position"/></td>
                            <td><xsl:value-of select="department"/></td>
                            <td><xsl:value-of select="hire_year"/></td>
                            <td><xsl:value-of select="salary"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
