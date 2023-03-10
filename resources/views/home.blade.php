<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update SSMS MobilePro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <h1 class="p-5">Test bro</h1>
    <div class="container text-center mt-3">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="col">
                        <h2 id="title"></h2>
                        <div id="buttonDownload"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


<script>
    $( document ).ready(function() {
    console.log( "ready!" );


    $.ajax({
                url: 'https://srs-ssms.com/list_version_apk_mp.php',
                type: 'post',
                // data: {
                //     image: dataUrl,
                // },
                success: function(data) {
                    var parseData = JSON.parse(data);

                    if (parseData['status'] == 200) {
                        document.getElementById('title').innerHTML = parseData['version']
                        document.getElementById('buttonDownload').innerHTML = '<a href="' + parseData['url'] + '" class="btn btn-primary">Download</a>'
                    } else {
                        document.getElementById('title').innerHTML = parseData['version']
                        document.getElementById('buttonDownload').innerHTML = '<h4>APK BELUM DIPERBARUI!</h4>'
                    }
                }
            });
});
</script>