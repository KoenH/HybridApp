<!DOCTYPE html>

<html>
    <head>
        <title>Hybrid</title>
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scaleable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.0.css" />
        <link rel="stylesheet"  href="css/mystyle.css" />
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.mobile-1.2.0.min.js"></script>
        <script>
            document.addEventListerner("deviceready", onDeviceReady, false);
            
            function onDeviceReady(){
                
            }
        
            function alertDismissed(){
                
            }
        
            function showAlert(){
                navigator.notification.alert(
                    'You are Awsome!',
                            alertDismissed,
                            'Game Over',
                            'Done'
                            );
                }
        </script>
    </head>
    <body>

        <div data-role="page" id="index">
            <div data-role="header"><h1>First Hybrid App</h1></div>
            <div data-role="content">
                <a data-role="button" href="#" onclick="showAlert(); return false;">Dialog message</a>
                <a data-role="button" href="#about">About Page</a>
            </div>
            <div data-role="footer" data-position="fixed"><h3>&COPY; Koen Hendriks 2012</h3></div>
        </div>

        <div data-role="page" id="about">
            <div data-role="header">
                <a href="#index" data-icon="arrow-l">back</a>
                <h1>About</h1>
            </div>
            <div data-role="content">

            </div>
            <div data-role="footer" data-position="fixed"><h3>&COPY; Koen Hendriks 2012</h3></div>
        </div>

    </body>
</html>