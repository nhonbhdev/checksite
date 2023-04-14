<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Web</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div id="kq"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            const links = [
                "https://nguyenvando.net/",
                "https://google.com/",
            ];
            links.map(function (urlLink) {
                var settings = {
                    "url": "checkUrl",
                    "method": "GET",
                    "data":
                    {
                        link: urlLink,
                    },
                    "timeout": 0,
                };
                $.ajax(settings)
                    .done(function (response) {
                        $("#kq").append(response);
                    });
            })

        })
    </script>
</body>

</html>