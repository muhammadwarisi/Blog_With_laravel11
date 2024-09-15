<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/19a9066a53.js" crossorigin="anonymous"></script>
    <style>
        .banner {
            background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgMf06Qdc7MyP2SJblZs-C_I9mKmwruDj3moifNGq42fLayMB-ecZstHcLwjk5stGmJ9QlkaYt4Rc_RPsyg31mHNvteLT0hvi7A03vWkdZc5jNfw2yBPENt0rXB8_Xnw0OZJ0gU0nWmc_dfICOtsQ8KGCHWxCKpXXxl4krfRXy2Uww_fKpJshfNSvT2NDc/s6000/pexels-hasanalbari-1229861.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 20%;
            padding-bottom: 20%;
            color: #ffffff;
        }
    </style>
    <title>Laravel UAS</title>
</head>

<body>
    {{-- Nav --}}
    <x-navbar></x-navbar>
    {{-- Content --}}
    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>
    {{-- Footer --}}
    <x-footer></x-footer>
    </div>
</body>

</html>
