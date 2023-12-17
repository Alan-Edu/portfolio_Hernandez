<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/barra.css">
    <link rel="stylesheet" href="../../css/diseño.css">
    <link rel="icon" href="../logo.png" type="image/x-icon">
</head>

<body>

    <!-- NAVBAR -->
    <?php require_once '../navbar.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Configura el carrusel de videos
            let currentIndex = 0;
            const $videos = $(".video-item");

            function showVideo(index) {
                $videos.hide();
                $videos.eq(index).show();
            }

            function nextVideo() {
                currentIndex = (currentIndex + 1) % $videos.length;
                showVideo(currentIndex);
            }

            function prevVideo() {
                currentIndex = (currentIndex - 1 + $videos.length) % $videos.length;
                showVideo(currentIndex);
            }

            // Inicializa el carrusel
            showVideo(currentIndex);

            // Agrega botones de navegación
            $("#next-button").click(nextVideo);
            $("#prev-button").click(prevVideo);
        });
    </script>
    <div class="container text-center bg-dark col-8">
        <div class=" mb-4">
            <p class="fs-2 fw-bold mt-4 pt-4 opacity-100 text-light">VIDEOS</p>
            <div class="row align-items-center">
                <button type="button" class="btn btn-light col-1 shadow" id="prev-button"><i class="bi bi-arrow-left-circle fs-4"></i></button>
                <div class="video-carousel mt-4 col">
                    <div class="row align-items-center">
                        <div class="video-item">
                            <iframe width="768" height="432" src="https://www.youtube.com/embed/gDjVCMry_rI?si=JWGzMMaV7N3KRF5V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info w-25"></div>
                            </div>
                        </div>
                        <div class="video-item">
                            <iframe width="768" height="432" src="https://www.youtube.com/embed/f08YeHOc-u8?si=a6MllcNicOknyyOn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                        <div class="video-item">
                            <iframe width="768" height="432" src="https://www.youtube.com/embed/gDjVCMry_rI?si=JWGzMMaV7N3KRF5V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info w-75"></div>
                            </div>
                        </div>
                        <div class="video-item">
                            <iframe width="768" height="432" src="https://www.youtube.com/embed/f08YeHOc-u8?si=a6MllcNicOknyyOn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info w-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-light col-1 shadow" id="next-button"><i class="bi bi-arrow-right-circle fs-4"></i></button>
            </div>
        </div>
        <div class="container col-6 mt-4 bg-white py-4">
            <div class="h4 pb-2 mb-4 text-primary-emphasis  border-bottom border-black">
                ENVIANOS UN COMENTARIO
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-left">Correo</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-primary shadow" id="next-button">Enviar</button>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/sweetAlert.js"></script>
</html>