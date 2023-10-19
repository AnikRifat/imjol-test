<!DOCTYPE html>
<html lang="en">

<head>
    <title>&#65279;</title>

    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="icon" href="noviimages/favicon.ico" type="image/x-icon">

    <!-- Stylesheets-->
    <link rel="stylesheet" id="styles" href="novi/css/style.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,900%7CRoboto:500,400,100,300,600'
        rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Novi Builder -->
    <div id="builder"></div>

    <!-- Emmet -->
    <script src="novi/js/code-editor/emmet.js"></script>
    <script src="novi/js/code-editor/ace/ace.js"></script>
    <script src="novi/js/code-editor/ace/ext-emmet.js"></script>

    <script type="application/javascript">
    var isCookieEnabled, scriptTag, styleTag, id;
    isCookieEnabled = navigator.cookieEnabled;
    id = "";
    scriptTag = document.createElement("script");
    styleTag = document.getElementById("styles");

    if (isCookieEnabled){
        if (getCookie("justupdated")){
            id = "?" + new Date().getTime();
        }
    }

    scriptTag.setAttribute("src", "novi/js/builder.min.js" + id);
    styleTag.setAttribute("href", "novi/css/style.css" + id);
    document.body.appendChild(scriptTag);

    function getCookie(name){
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
</script>
</body>

</html>
