<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <h2>Каталог товаров</h2>
                <!-- Создание таблицы для представления данных -->
                <table border="1">
                    <tr><th>ID</th><th>Название</th><th>Цена</th></tr>
                    <!-- Перебираем все товары и выводим их в таблицу-->
                    <xsl:for-each select="products/product">
                        <tr>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="price"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
