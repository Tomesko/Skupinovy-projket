<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="Hotbar.css">

}
</style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change Background Color</title>
        <style>
             body {
                 transition: background-color 0.5s;
                }

                /* Set the color of the text to white when the background color is black */
                body.dark-mode {
                color: white;
                 }
        </style>

   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Save Cookie</title>
         <style>
             body {
                 font-family: Arial, sans-serif;
             }
        </style>
    

</head>
   
        <body id="myBody">
        <h1>Change Background Color</h1>
        <button id="changeColorBtn">Change Color</button>
        <script>
            const changeColorBtn = document.getElementById('changeColorBtn');
             const savedColor = getCookie('savedColor');

             if (savedColor === 'dark') {
                 document.body.classList.add('dark-mode');
                document.body.style.backgroundColor = 'black';
            } else {
                document.body.style.backgroundColor = 'white';
           }

             changeColorBtn.addEventListener('click', () => {
              if (document.body.style.backgroundColor === 'black') {
                    document.body.classList.remove('dark-mode');
                    document.body.style.backgroundColor = 'white';
                    setCookie('savedColor', 'light', 365);
                } else {
                    document.body.classList.add('dark-mode');
                    document.body.style.backgroundColor = 'black';
                    setCookie('savedColor', 'dark', 365);
                }
            });

            function setCookie(name, value, days) {
                let expires = '';
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = 'expires=' + date.toUTCString();
                }
                document.cookie = name + '=' + value + ';' + expires + ';path=/';
            }

             function getCookie(name) {
                const cookies = document.cookie.split(';');
                for (let i = 0; i < cookies.length; i++) {
                    const cookie = cookies[i].trim();
                    if (cookie.startsWith(name + '=')) {
                        return cookie.substring(name.length + 1);
                    }
                }
                return null;
            }
       </script>
 
 
  <h1>Do you want to save a cookie?</h1>
        <button id="saveCookieBtn">Save Cookie</button>
        <button id="dontSaveCookieBtn">Don't Save Cookie</button>
        <script>
            const saveCookieBtn = document.getElementById('saveCookieBtn');
            const dontSaveCookieBtn = document.getElementById('dontSaveCookieBtn');

            saveCookieBtn.addEventListener('click', () => {
                setCookie('savedCookie', 'yes', 30);
                alert('Cookie saved!');
            });

            dontSaveCookieBtn.addEventListener('click', () => {
                setCookie('savedCookie', 'no', -1);
                alert('Cookie not saved.');
            });

            function setCookie(name, value, days) {
                let expires = '';
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = 'expires=' + date.toUTCString();
                }
                document.cookie = name + '=' + value + ';' + expires + ';path=/';
            }
        </script>

<?php
include("Hotbar.html");
?>
   

</body>
</html>