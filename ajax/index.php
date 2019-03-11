<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX - Les bases</title>
</head>
<body>
    
<script>
    // On instancie le moteur ajax
    var xhr = new XMLHttpRequest();

    // Executer une requête http
    xhr.open('GET', './worker.php');
    xhr.send();

    xhr.addEventListener('readystatechange', function(){
        if (4 === xhr.readyState){
            if (200 === xhr.status){
                 //On récupère la réponse HTTP
    console.log(xhr.response);
    document.getElementsByTagName('h1')[0].innerHTML = xhr.response;

            }
        }
    });


</script>
</body>
</html>