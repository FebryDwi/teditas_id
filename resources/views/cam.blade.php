<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TEDITAS Webcam</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- SCRIPT SPEECH TO TEXT -->

    <style>
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        a:link {
            color: #000;
            text-decoration: none;
        }

        a:visited {
            color: #000;
        }

        /* camera config */
        .posisi {
            width: 100%
        }

        #my_camera {
            width: 100%
        }

        .button {
            background: -webkit-linear-gradient(top, #008dfd 0, #0370ea 100%);
            border: 1px solid #076bd2;
            border-radius: 3px;
            color: #fff;
            display: none;
            font-size: 13px;
            font-weight: bold;
            line-height: 1.3;
            padding: 8px 25px;
            text-align: center;
            text-shadow: 1px 1px 1px #076bd2;
            letter-spacing: normal;
        }

        .center {
            padding: 10px;
            text-align: center;
        }

        .final {
            color: black;
            padding-right: 3px;
        }

        .interim {
            color: gray;
        }

        .info {
            font-size: 14px;
            text-align: center;
            color: #777;
            display: none;
        }

        .right {
            float: right;
            padding-right: 2%;
            padding-top: 1%;
        }

        .sidebyside {
            display: inline-block;
            width: 45%;
            min-height: 40px;
            text-align: left;
            vertical-align: top;
        }

        #headline {
            font-size: 40px;
            font-weight: 300;
        }

        #info {
            font-size: 20px;
            /* text-align: center; */
            color: #777;
            visibility: hidden;
        }

        #results {
            font-size: 30px;
            font-weight: bold;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            min-height: 150px;
            max-height: 300px;
            height: 560px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        #start_button {
            border: 0;
            background-color: transparent;
            padding: 0;

        }

        /* box kiri */
        div.kiri {
            width: 100%;

            /* "padding = ukuran kotak" */
        }

        /* box right */
        div.kanan {
            width: 100%;
        }

        .container {
            text-align: center;
        }

        .container img {
            display: inline-block;
            margin: 10px;
        }

        div.ISI_konten {
            background-color: #000000;
            width: 1980px;
            height: 750px;
            position: fixed;
            z-index: -1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="http://teditas.id/"> TEDITAS. </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div>
                    <img src="images/tut_wuri_handayani.png" alt="" style="height:50px">
                    <img src="images/PKM23.png" alt="" style="height:50px">
                    <img src="images/merdeka_belajar.png" alt="" style="height:50px">
                    <img src="images/kampus_merdeka.png" alt="" style="height:50px">
                    <img src="images/simbelmawa.png" alt="" style="height:50px">
                    <img src="images/logo_kampus.png" alt="" style="height:60px">
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="http://teditas.id/" class="nav-link contact">Kembali</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row px-5 d-flex mt-4" style="background-color: #000000">
        <div class="col-sm-6 my-3 order-1 py-5" style="background-color: #ffffff">
            <div class="kiri">
                <div id="info">
                    <p id="info_start">Klik pada icon "mikrofon" untuk mulai berbicara test</p>
                    <p id="info_speak_now">Bicara Sekarang.</p>
                    <p id="info_no_speech">
                        Tidak ada speech terdeteksi.
                        <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                            Klik Disini Untuk Melihat Bantuan</a>.
                    </p>
                    <p id="info_no_microphone" style="display: none">
                        No microphone was found. Ensure that a microphone is installed and that
                        <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                            microphone settings</a>
                        are configured correctly.
                    </p>
                    <p id="info_allow">Klik Tombol "Allow" untuk mengaktifkan microphone Anda.</p>
                    <p id="info_denied">Permintaan Akses Microphone di Tolak</p>
                    <p id="info_blocked">
                        Permission to use microphone is blocked. To change, go to
                        chrome://settings/contentExceptions#media-stream
                    </p>
                    <p id="info_upgrade">
                        Web Speech API is not supported by this browser. Upgrade to
                        <a href="//www.google.com/chrome">Chrome</a> version 25 or later.
                    </p>
                </div>
                <div class="right">
                    <button id="start_button" onclick="startButton(event)">
                        <a href="#" class="fa fa-microphone">Mulai</a>
                    </button>
                </div>
                {{-- <div>
        <button onclick="location.reload();">Refresh</button>
      </div> --}}
                <div id="results">
                    <span id="final_span" class="final"></span>
                    <span id="interim_span" class="interim"></span>
                    <p></p>
                </div>

                <div class="center">

                    <script>
                        var count = 0;
                        setTimeout("pageScroll()", 1200);

                        function pageScroll() {
                            // If condition to set repeat
                            if (count < 1) {
                                var objDiv = document.getElementById("results");
                                objDiv.scrollTop = objDiv.scrollTop + 1;
                                if (objDiv.scrollTop == objDiv.scrollHeight - 400) {
                                    setTimeout(function() {
                                        objDiv.scrollTop = 0;
                                        count++;
                                    }, 600000);
                                }

                                //set scrolling time start
                                setTimeout("pageScroll()", 10);

                                //set scrolling time end
                            }
                        }
                    </script>

                    {{-- <div class="sidebyside">
          <button id="email_button" class="button" onclick="emailButton()">
            Create Email</button>
          <div id="email_info" class="info">
            Text sent to default email application.<br>
            (See chrome://settings/handlers to change.)
          </div>
        </div> --}}
                    <p></p>
                    <div id="div_language">
                        <select id="select_language" onchange="updateCountry()"></select>
                        &nbsp;&nbsp;
                        <select id="select_dialect"></select>
                    </div>
                </div>
                <script>
                    var langs = [
                        ["Bahasa Indonesia", ["id-ID"]],
                        ['English', ["en-GB"]]

                    ];

                    for (var i = 0; i < langs.length; i++) {
                        select_language.options[i] = new Option(langs[i][0], i);
                    }
                    select_language.selectedIndex = 1;
                    updateCountry();
                    select_dialect.selectedIndex = 1;
                    showInfo("info_start");

                    function updateCountry() {
                        for (var i = select_dialect.options.length - 1; i >= 0; i--) {
                            select_dialect.remove(i);
                        }
                        var list = langs[select_language.selectedIndex];
                        for (var i = 1; i < list.length; i++) {
                            select_dialect.options.add(new Option(list[i][1], list[i][0]));
                        }
                        select_dialect.style.visibility =
                            list[1].length == 1 ? "hidden" : "visible";
                    }

                    var create_email = false;
                    var final_transcript = "";
                    var recognizing = false;
                    var ignore_onend;
                    var start_timestamp;
                    if (!("webkitSpeechRecognition" in window)) {
                        upgrade();
                    } else {
                        start_button.style.display = "inline-block";
                        var recognition = new webkitSpeechRecognition();
                        recognition.continuous = true;
                        recognition.interimResults = true;

                        recognition.onstart = function() {
                            recognizing = true;
                            showInfo("info_speak_now");
                            start_img.src = "mic-animate.gif";
                        };

                        recognition.onerror = function(event) {
                            if (event.error == "no-speech") {
                                start_img.src = "mic.gif";
                                showInfo("info_no_speech");
                                ignore_onend = true;
                            }
                            if (event.error == "audio-capture") {
                                start_img.src = "mic.gif";
                                showInfo("info_no_microphone");
                                ignore_onend = true;
                            }
                            if (event.error == "not-allowed") {
                                if (event.timeStamp - start_timestamp < 100) {
                                    showInfo("info_blocked");
                                } else {
                                    showInfo("info_denied");
                                }
                                ignore_onend = true;
                            }
                        };

                        recognition.onend = function() {
                            recognizing = false;
                            if (ignore_onend) {
                                return;
                            }
                            start_img.src = "mic.gif";
                            if (!final_transcript) {
                                showInfo("info_start");
                                return;
                            }
                            showInfo("");
                            if (window.getSelection) {
                                window.getSelection().removeAllRanges();
                                var range = document.createRange();
                                range.selectNode(document.getElementById("final_span"));
                                window.getSelection().addRange(range);
                            }
                            if (create_email) {
                                create_email = false;
                                createEmail();
                            }
                        };

                        var latestTranscript = "";
                        recognition.onresult = function(event) {
                            var interim_transcript = "";
                            for (var i = event.resultIndex; i < event.results.length; ++i) {
                                if (event.results[i].isFinal) {
                                    final_transcript += event.results[i][0].transcript;
                                } else {
                                    interim_transcript += event.results[i][0].transcript;
                                }
                            }
                            final_transcript = capitalize(final_transcript);

                            var newTranscript = final_transcript.slice(latestTranscript.length);
                            latestTranscript = final_transcript;

                            final_span.innerHTML = linebreak(final_transcript);
                            interim_span.innerHTML = linebreak(interim_transcript);
                            if (final_transcript || interim_transcript) {
                                showButtons("inline-block");
                            }
                        };

                        // Reset Transcript and restart recognition
                        function resetTranscriptAndRestart() {

                            interim_span.innerHTML = ""; // Append the new transcript

                            // Clear the final transcript
                            final_transcript = "";
                            final_span.innerHTML = "";

                            showButtons("none"); // Hide the buttons

                            // Restart the recognition process
                            recognition.start();
                            ignore_onend = false;
                            start_img.src = "mic-slash.gif";
                            showInfo("info_allow");
                        }

                        // Refresh the transcript every 6 seconds
                        // setInterval(resetTranscriptAndRestart, 120000); // Refresh the transcript every 6 seconds
                    }


                    function upgrade() {
                        start_button.style.visibility = "hidden";
                        showInfo("info_upgrade");
                    }

                    var two_line = /\n\n/g;
                    var one_line = /\n/g;

                    function linebreak(s) {
                        return s.replace(two_line, "<p></p>").replace(one_line, "<br>");
                    }

                    var first_char = /\S/;

                    function capitalize(s) {
                        return s.replace(first_char, function(m) {
                            return m.toUpperCase();
                        });
                    }

                    function createEmail() {
                        var n = final_transcript.indexOf("\n");
                        if (n < 0 || n >= 80) {
                            n = 40 + final_transcript.substring(40).indexOf(" ");
                        }
                        var subject = encodeURI(final_transcript.substring(0, n));
                        var body = encodeURI(final_transcript.substring(n + 1));
                        window.location.href = "mailto:?subject=" + subject + "&body=" + body;
                    }

                    function copyButton() {
                        if (recognizing) {
                            recognizing = false;
                            recognition.stop();
                        }
                        copy_button.style.display = "none";
                        copy_info.style.display = "inline-block";
                        showInfo("");
                    }

                    function emailButton() {
                        if (recognizing) {
                            create_email = true;
                            recognizing = false;
                            recognition.stop();
                        } else {
                            createEmail();
                        }
                        email_button.style.display = "none";
                        email_info.style.display = "inline-block";
                        showInfo("");
                    }

                    function startButton(event) {
                        if (recognizing) {
                            recognition.stop();
                            return;
                        }
                        final_transcript = "";
                        recognition.lang = select_dialect.value;
                        recognition.start();
                        ignore_onend = false;
                        final_span.innerHTML = "";
                        interim_span.innerHTML = "";
                        start_img.src = "mic-slash.gif";
                        showInfo("info_allow");
                        showButtons("none");
                        start_timestamp = event.timeStamp;
                    }

                    function showInfo(s) {
                        if (s) {
                            for (var child = info.firstChild; child; child = child.nextSibling) {
                                if (child.style) {
                                    child.style.display = child.id == s ? "inline" : "none";
                                }
                            }
                            info.style.visibility = "visible";
                        } else {
                            info.style.visibility = "hidden";
                        }
                    }

                    var current_style;

                    function showButtons(style) {
                        if (style == current_style) {
                            return;
                        }
                        current_style = style;
                        copy_button.style.display = style;
                        email_button.style.display = style;
                        copy_info.style.display = "none";
                        email_info.style.display = "none";
                    }
                </script>

            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="kanan">


                <!-- MAIN CSS -->
                <link rel="stylesheet" href="css/templatemo-digital-trend.css" />
                <!-- camera-->
                <script type="text/javascript" src="js/webcam-pakai.js"></script>
                <!-- camera-->
                <script language="JavaScript">
                    // SCRIPT CAMERA DI BAWAH INI
                    function ShowCam() {

                        Webcam.set({
                            width: 668,
                            height: 520

                        });

                        Webcam.attach('#my_camera');


                    }
                    const counterShowCame = true;
                    if (counterShowCame) {
                        window.onload = ShowCam; //jangan dihapus ini ilmu penting
                    }
                    //window.onload= ShowCam;//jangan dihapus ini ilmu penting
                </script>
                </head>
                <div class="posisi" id="Cam">
                    <div id="my_camera">
                        <div>
                            <form>
                        </div>

                    </div>
                    {{-- BUTTON CAME --}}
                    {{-- <p class="mb-1" onclick="hideCame()">
      <i class="fa fa-camera" style="color: #04996C"></i> --}}
                    </p>
                    <!-- SCRIPT CAMERA DI ATAS INI -->
                </div>
            </div>


        </div>
        <script>
            // function ShowCam() {
            //   Webcam.set({
            //       width: 788,
            //       height: 470

            //   });
            //   Webcam.attach('#my_camera');

            // }


            // function hideCame() {
            //   counterShowCame = false;

            //   if ()
            //   Webcam.reset();

            // }
        </script>

        {{-- <div class="row">
      <div class="row">
        <i class="fa-regular fa-copyright"></i>
      </div>
      <div class="row">
        Copyright: Stiki Malang 2023
      </div>
    </div> --}}

</body>

</html>
