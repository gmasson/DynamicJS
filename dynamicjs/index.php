<?php
/*
* DynamicJS 
*/

header("Content-Type: application/javascript; charset=utf-8");

echo "// DynamicJS \n";

/* Sample code */
echo "document.getElementById('test').innerHTML='<h1>Hello World</h1>'; \n";
echo "document.write('<br>'); \n";
echo "document.write('Success'); \n";