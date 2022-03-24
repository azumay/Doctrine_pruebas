## Paso 1 - Instalación 
<code>sudo composer install</code>

## Paso 2 - Configurar credenciales Base de Datos
<code>config.php</code>

## Paso 3 - Generar Getters & Setters
<code>php vendor/doctrine/orm/bin/doctrine.php orm:generate-entities src/</code>

Expected result:
<a href="https://i.imgur.com/pDW3nCZ.png"><img src="https://i.imgur.com/pDW3nCZ.png" title="source: imgur.com" /></a>

## Paso 4 - Generar esquema DB a partir de las clases
⚠️**Antes tenemos que tener creada la Base de Datos**⚠️<br>
<code>php vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:create</code><br>
Expected result:
<a href="https://i.imgur.com/SJuSzRu.png"><img src="https://i.imgur.com/SJuSzRu.png" title="source: imgur.com" /></a>

