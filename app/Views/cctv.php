<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera CCTV</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .cctv-box {
            background: #fafafa;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .cctv-box:hover {
            transform: scale(1.05);
        }
        .cctv-box img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }
        .cctv-box .label {
            background: rgba(0, 0, 0, 0.75);
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            opacity: 0.85;
        }
        iframe {
            width: 80%;
            height: 500px;
            border: none;
            margin-top: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .active {
            background-color: #28a745;
        }
        .btn-next {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        .btn-next:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="page-wrapper bg-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <h1>Kamera CCTV</h1>
                                <iframe id="cctv-frame" src="http://renzo.dyndns.tv/mjpg/video.mjpg" allowfullscreen></iframe>
                                <div class="grid" id="cctv-grid"></div>
                                <button class="btn-next" onclick="nextPage()">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const streams = [
            'http://90.146.10.190/mjpg/video.mjpg', // Camera 1 -> Link 5
            'http://46.19.234.136/axis-cgi/mjpg/video.cgi', // Camera 2
            'http://5.172.188.145:9995/axis-cgi/mjpg/video.cgi', // Camera 3
            'http://166.151.98.221:7001/cgi-bin/faststream.jpg?stream=full&fps=25', // Camera 4
            'http://83.48.75.113:8320/axis-cgi/mjpg/video.cgi', // Camera 5 -> Link 1
            'http://renzo.dyndns.tv/mjpg/video.mjpg' // Camera 6
        ];

        const camerasPerPage = 4;
        let currentPage = 0;

        // Initialize the page with cameras
        function loadPage() {
            const startIdx = currentPage * camerasPerPage;
            const endIdx = startIdx + camerasPerPage;
            const currentCameras = streams.slice(startIdx, endIdx);

            const grid = document.getElementById('cctv-grid');
            grid.innerHTML = '';

            currentCameras.forEach((cameraUrl, index) => {
                const div = document.createElement('div');
                div.classList.add('cctv-box');
                div.onclick = () => switchCamera(startIdx + index);
                div.innerHTML = `<img src="${cameraUrl}" alt="CCTV Offline">
                                <div class="label">Camera ${startIdx + index + 1}</div>`;
                grid.appendChild(div);
            });
        }

        // Switch camera to the clicked one
        function switchCamera(index) {
            document.getElementById('cctv-frame').src = streams[index];
        }

        // Load the next page of cameras
        function nextPage() {
            if ((currentPage + 1) * camerasPerPage < streams.length) {
                currentPage++;
                loadPage();
            } else {
                currentPage = 0; // Reset to the first page if reached the end
                loadPage();
            }
        }

        // Initialize the page
        loadPage();
    </script>
</body>
</html>
