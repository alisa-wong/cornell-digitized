<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="/public/styles/all.css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script type="text/javascript" src="/public/scripts/jquery-3.2.1.min.js"></script>
    <title>i miss my campus</title>
</head>
<body class="d-flex flex-column justify-content-center">
    <div id="content" class="d-flex position-relative">
        <div id="description" class="d-flex flex-column position-absolute">
            <a href="/"><h1>i miss my campus</h1></a>
            <p>welcome to cornell university from the perspective of a senior graduating during the COVID-19 pandemic</p>
            <div id="sound" class="d-flex flex-row"><p>chimes</p>
                <div id="soundBtns" class="d-inline position-relative">
                    <button id="pause">
                        <img src="/public/images/pause.png" alt="pause">
                    </button>
                    <button id="play" class="position-absolute">
                        <img src="/public/images/play.png" alt="play">
                    </button>
                </div>

                <audio id="chimes" controls="controls" class="hidden">   
                    <source src="/public/media/almamater128.mp3" />   
                </audio>
            </div>
        </div>

        <div id="map-container" class="me-4">
            <div id="map" class="position-relative">
                <img alt="map" id="main-map" class="position-absolute" src="/public/images/map.png"> 

                <div href="?location=zeus" id="zeus-container" class="link position-absolute" data-value="zeus">
                    <img alt="temple of zeus colored" id="zeus-color" class="map-img" src="/public/images/zeus-color.png">
                    <img alt="temple of zeus" id="zeus" class="position-absolute hover map-img" src="/public/images/zeus.png">
                </div>

                <div id="beebe-container" class="position-absolute">
                    <div href="?location=beebe" id="canoe-container" class="link position-absolute" data-value="beebe">
                        <img alt="canoe colored" id="canoe-color" class="map-img" src="/public/images/beebe-color.png">
                        <img alt="canoe" id="canoe" class="position-absolute hover map-img" src="/public/images/beebe.png">
                    </div>
                    <img alt="beebe lake colored" id="beebe-color" class="map-img" src="/public/images/lake-color.png">
                    <img alt="beebe lake" id="beebe" class="position-absolute map-img" src="/public/images/lake.png">
                </div>

                <div href="?location=kennedy" id="kennedy-container" class="link position-absolute" data-value="kennedy">
                    <img alt="kennedy hall colored" id="kennedy-color" class="map-img" src="/public/images/kennedy-color.png">
                    <img alt="kennedy hall" id="kennedy" class="position-absolute hover map-img" src="/public/images/kennedy.png">
                </div>

                <div href="?location=gates" id="gates-container" class="link position-absolute" data-value="gates">
                    <img alt="gates hall colored" id="gates-color" class="map-img" src="/public/images/gates-color.png">
                    <img alt="gates hall" id="gates" class="position-absolute hover map-img" src="/public/images/gates.png">
                </div>

                <div href="?location=bethe" id="bethe-container" class="link position-absolute" data-value="bethe">
                    <img alt="hans bethe house colored" id="bethe-color" class="map-img" src="/public/images/bethe-color.png">
                    <img alt="hans bethe house" id="bethe" class="position-absolute hover map-img" src="/public/images/bethe.png">
                </div>

                <div id="dickson-container" class="link position-absolute" data-value="dickson">
                    <img alt="clara dickson hall colored" id="dickson-color" class="map-img" src="/public/images/dickson-color.png">
                    <img alt="clara dickson hall" id="dickson" class="position-absolute hover map-img" src="/public/images/dickson.png">
                </div>
            </div>
        </div>

        <!-- <div id="modal" class="position-absolute <?php if ($close == 1) { echo 'slide-up'; } else if ($location) { echo 'slide-down '; } ?> ">
            <h1><?php echo $location ?></h1>
            <a href="/?close=1" id="closeBtn" class="btn-close"></a>
        </div> -->
        <div id="modal" class="position-fixed">
            <div id="modal-header" class="position-fixed d-flex justify-content-end align-items-center bg-white">
                <button id="closeBtn" class="btn-close me-4"></button>
            </div>

            <?php include("includes/zeus.php"); ?>
            <?php include("includes/beebe.php"); ?>
            <?php include("includes/bethe.php"); ?>
            <?php include("includes/dickson.php"); ?>
            <?php include("includes/gates.php"); ?>
            <?php include("includes/kennedy.php"); ?>
        </div>
    </div>
    <script type="text/javascript" src="/public/scripts/effects.js"></script>
</body>
</html>