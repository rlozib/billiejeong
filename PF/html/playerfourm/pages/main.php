<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mixed content 문제 해결(https 사이트에서 http 사이트 요청 시 발생하는 보안 문제) -->
    <title>메인페이지</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        
    </style>
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header"> 
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <div id="loading">
        <div class="wrap">
            <svg version="1.1" id="Layer_1" viewBox="0 0 118.333 136.75" width="30%" class="wrap">
                <!-- <path id="bg" fill="#CC3636" d="M14.906,15.084c0,0-1.791-2.841,10.594-7c18.276-6.139,55.333-7.833,76,6.333c0,0,25.667,73.667-42,118.334
                    C59.5,132.751-7.854,105.75,14.906,15.084z"/> -->

                <!-- RED PLATES -->
                <!-- <path id="plate1" fill="#CC3636" d="M58.725,5.513c-13.071,0-25.094,1.952-37.284,5.872c-3.003,12.104-5.486,28.128-5.859,35.833
                C15.04,58.485,15.852,66.63,18.11,75.53c1.265,5.023,2.958,9.727,5.103,14.496c1.396,3.75,2.792,5.688,3.148,6.152
                c3.885,6.83,8.704,13.207,14.506,19.053c5.237,5.273,11.231,10.086,17.846,14.375L58.725,5.513z"/>
                <path id="plate2" fill="#CC3636" d="M58.466,129.606c6.614-4.289,12.608-9.102,17.846-14.375c5.802-5.846,10.621-12.223,14.506-19.053
                c0.356-0.465,1.753-2.402,3.148-6.152c2.145-4.77,3.838-9.473,5.103-14.496c2.259-8.9,3.07-17.045,2.529-28.312
                c-0.373-7.705-2.856-23.729-5.859-35.833c-12.19-3.92-24.213-5.872-37.284-5.872L58.466,129.606z"/>   -->

                <!-- BLUE SIDES  -->
                <!-- <path class="blue"  d="M38.893,115.22c-6.153-6.139-11.243-12.914-15.262-20.156c-4.087-7.334-6.987-15.52-8.691-23.689
                c-1.763-8.41-2.325-16.9-1.729-25.909c0.554-8.476,2.79-21.311,5.555-33.188c-2.642,0.93-5.271,1.953-7.856,3.069
                C7.997,27.011,5.965,41.825,5.92,49.916c-0.045,9.022,1.23,17.765,3.747,25.976c2.642,8.623,6.13,15.639,10.814,22.508
                c4.661,6.842,10.418,13.125,17.102,18.666c6.252,5.197,13.375,9.752,21.142,13.607c-0.012,0,0-0.016,0,0
                C51.331,126.128,44.648,120.944,38.893,115.22"/>
                <path class="blue"  d="M78.546,115.22c6.151-6.139,11.243-12.914,15.262-20.143c4.086-7.348,6.988-15.533,8.703-23.703
                c1.762-8.41,2.313-16.9,1.716-25.909c-0.553-8.476-2.799-21.323-5.554-33.202c2.642,0.93,5.271,1.967,7.868,3.083
                c2.911,11.665,4.943,26.479,4.978,34.57c0.056,9.022-1.23,17.765-3.748,25.976c-2.438,7.998-6.084,15.557-10.813,22.508
                c-4.661,6.842-10.407,13.125-17.102,18.678c-6.241,5.186-13.376,9.74-21.131,13.596l0,0
                C66.107,126.142,72.789,120.944,78.546,115.22"/> -->

                <!-- GOLD OUTER  -->
                <!-- <path id="template" d="M96.968,98.402c-4.661,6.844-10.418,13.129-17.102,18.682c-6.252,5.182-13.387,9.752-21.142,13.592
                c-7.767-3.84-14.89-8.41-21.142-13.592c-6.684-5.553-12.44-11.838-17.102-18.682c-0.361-0.529-1.084-1.633-1.084-1.633l-1.931-3.137
                c0,0-5.903-11.531-7.8-17.723C7.15,67.686,5.875,58.957,5.92,49.934c0.045-8.104,2.077-22.904,4.989-34.57
                C26.035,8.827,42.12,5.506,58.725,5.506s32.689,3.321,47.816,9.857c2.911,11.666,4.943,26.467,4.988,34.57
                c0.012,2.791-0.101,5.568-0.338,8.307l-1.333,9.366c-0.552,2.817-1.251,5.593-2.076,8.304
                C105.333,83.895,101.698,91.467,96.968,98.402 M109.634,12.733C94.158,5.811,77.124,1.878,58.725,1.878S23.291,5.811,7.816,12.733
                C4.248,27.189,2.329,41.191,2.284,49.908c-0.045,9.327,1.265,18.428,3.907,27.064c2.55,8.33,6.354,16.236,11.287,23.477
                c4.854,7.123,10.836,13.658,17.79,19.424c6.535,5.438,15.385,11.387,23.456,14.869c8.071-3.482,16.921-9.432,23.456-14.869
                c6.954-5.766,12.937-12.301,17.79-19.424c4.934-7.24,8.737-15.146,11.287-23.477c2.643-8.637,3.952-17.737,3.907-27.064
                C115.12,41.191,113.201,27.189,109.634,12.733z"/> -->



                <!-- CANNON OUTLINE  -->
                <!-- <path id="cannon" fill="#CC3636" stroke="#FFF" stroke-miterlimit="10" d="M70.425,57.986c-3.848,0-17.681,0.015-21.391,0.015
                H29.065c-2.427,0-4.64,1.687-5.712,4.277c-0.541,0-1.128,0-1.128,0c-0.859,0-2.314,0.73-2.314,3.467
                c0,2.751,1.455,3.482,2.314,3.482c0,0,0.587,0,1.128,0c1.072,2.576,3.285,4.264,5.712,4.264c2.01,0,4.811,0.021,9.314-0.137
                c-0.005,1.229,0.225,2.602,0.225,3.916c0,0.852,0.107,0.642,0.208,1.479c-1.816,2.297-5.306,5.226-7.855,7.126
                c-2.427,1.82-5.26,2.976-7.574,4.185l2.196,3.846c0,0,5.065-1.607,6.231-2.065s7.98-4.216,7.98-4.216l4.292-2.874l10.416-5.958
                l9.75-1.626c0,0,17.32-1.635,17.294-1.922c4.369-1.01,7.801-1.859,7.801-1.859c1.547-0.346,2.652-1.303,2.137-2.604l9.233-0.652
                c0.906,0.526,0.889-6.752,1.155-12.144H70.425z"/> -->

                <!-- CANNON FILL -->
                <!-- <path id="cannon-fill" fill="#A39161" d="M70.425,57.986c-3.848,0-17.722,0.077-21.432,0.077H29.024c-2.427,0-4.64,1.687-5.712,4.277
                c-0.541,0-1.128,0-1.128,0c-0.859,0-2.314,0.73-2.314,3.467c0,2.751,1.455,3.482,2.314,3.482c0,0,0.587,0,1.128,0
                c1.072,2.576,3.285,4.264,5.712,4.264c2.01,0,4.572-0.053,9.076-0.211c-0.227,1.248-0.339,2.551-0.339,3.865
                c0,0.852,0.045,1.701,0.146,2.539c-1.816,2.297-4.509,4.308-7.059,6.208c-2.427,1.82-5.047,2.844-7.361,4.053l-8.581,3.214
                l1.35,2.262c0,0,7.627-1.19,9.42-1.599c7.178-1.635,14.194-6.312,14.194-6.312l4.338-2.863l10.136-5.313l10.197-2.229
                c0,0,16.987-1.572,16.961-1.859c4.369-1.01,7.801-1.859,7.801-1.859c1.547-0.346,2.946-1.489,2.178-2.666l20.165-1.323
                c-0.095,0.526,0.925-6.081,1.191-11.473H70.425z"/> -->





                <!-- WHEEL  --> 
                <!-- <path id="wheel" fill="#CC3636" stroke="#FFF" stroke-miterlimit="10" d="M58.432,54.287c-11.513,0-20.837,9.326-20.837,20.832
                c0,11.52,9.324,20.846,20.837,20.846c11.503,0,20.826-9.326,20.826-20.846C79.258,63.613,69.935,54.287,58.432,54.287z
                M57.337,58.295v11.201c-1.151,0.266-2.168,0.863-2.947,1.699l-9.707-5.605C47.516,61.498,52.088,58.707,57.337,58.295z
                M43.328,82.609c-2.144-4.49-2.281-9.859-0.033-14.615l9.706,5.58c-0.327,1.131-0.316,2.312,0.012,3.402L43.328,82.609z
                M57.337,92.27c-4.832-0.385-9.088-2.791-11.942-6.352c-0.25-0.305-0.486-0.623-0.7-0.943l9.719-5.619
                c0.146,0.158,0.292,0.305,0.451,0.438c0.7,0.598,1.546,1.037,2.473,1.25V92.27z M58.701,78.312c-1.67,0-3.025-1.355-3.025-3.029
                s1.355-3.029,3.025-3.029c1.682,0,3.037,1.355,3.037,3.029S60.383,78.312,58.701,78.312z M60.09,92.27V81.043
                c1.141-0.268,2.146-0.865,2.925-1.688l9.718,5.619C69.9,89.053,65.328,91.844,60.09,92.27z M64.402,76.977
                c0.351-1.156,0.316-2.379,0.012-3.389l9.707-5.605c2.439,5.061,1.908,10.682,0,14.6L64.402,76.977z M62.999,71.186
                c-0.821-0.887-1.894-1.473-2.92-1.72l0.062-11.209c5.599,0.448,10.184,3.743,12.603,7.369L62.999,71.186z"/> -->


                <!-- TEXT -->
<!-- 
                <path class="text" fill="#A39161" d="M86.75,38.746c-1.05,0.04-1.287-0.678-1.298-1.195c0.011-0.531,0.179-1.342,1.85-1.793
                        c0.046,0.57,0.092,1.141,0.092,1.141l0.033,0.52c0.023,0.372,0.046,0.703,0.09,1.076C87.291,38.64,87.043,38.733,86.75,38.746
                        M66.194,37.02c-1.141,0.969-1.987,1.62-3.364,1.594c-1.084-0.027-1.75-0.757-2.155-1.582c1.185-0.438,5.622-2.111,6.896-2.589
                        c0.012,0.93,0.034,2.179,0.034,2.179v0.014c0.022,0.743,0.035,1.461,0.022,2.165c0,0.014,0,0.026,0,0.026L66.194,37.02z
                        M59.918,33.285c0,0,0-0.026,0-0.04c0-1.833,0.678-2.55,1.332-2.616c0.191-0.013,0.699-0.067,0.937,0.797
                        c0.091,0.332,0.136,0.585,0.136,0.77c0,0.505-0.271,0.599-0.588,0.705l-0.011,0.013c0,0-0.937,0.359-1.794,0.692
                        C59.93,33.498,59.918,33.393,59.918,33.285z M26.201,34.627c0.315-0.889,0.563-1.606,1.095-3.135
                        c0.315,1.528,0.486,2.326,0.643,3.082C27.273,34.602,26.969,34.602,26.201,34.627z M67.582,40.021
                        c-0.022,0.426-0.135,1.861-0.169,2.286h6.31c-0.361-1.687-0.519-4.026-0.575-5.78c0,0.014-0.103-3.639-0.103-3.639
                        c-0.011-0.348,0.092-0.64,0.283-0.838c0.181-0.2,0.43-0.307,0.688-0.307c0.294-0.014,0.79-0.014,0.824,1.01l0.146,3.881
                        c0.057,1.738,0.09,4.185-0.146,5.673h6.152c-0.103-0.532-0.271-1.794-0.316-2.151c0.778,1.646,2.427,2.483,4.649,2.483
                        c1.31,0,2.326-0.478,3.083-0.944c0.022,0.053,0.316,0.612,0.316,0.612h11.367c-0.509-1.715-0.813-4.079-1.017-5.846l-1.559-12.729
                        l-5.858-0.957c0.476,1.596,0.825,4.039,1.028,5.794l0.88,8.131c0.158,1.488,0.317,3.069,0.306,4.678l-0.012,0.198l-0.227-0.585
                        c-0.405-0.983-0.665-2.378-0.801-4.265c-0.013-0.012-0.248-2.604-0.248-2.604c-0.305-4.132-2.586-6.019-7.518-6.019
                        c-0.848,0-2.947,0.198-4.212,0.571l0.339,4.703l1.31-0.811c1.083-0.652,1.953-0.943,2.913-0.943c0.778,0,1.287,0.306,1.522,0.837
                        c-0.97,0.16-2.009,0.412-3.159,0.931c-1.75,0.783-2.891,1.9-3.342,3.254c0-0.039-0.011-0.08-0.011-0.119l-0.203-4.305
                        c-0.102-2.79-1.841-4.531-4.527-4.531c-1.241,0-2.348,0.346-3.309,1.038c-0.056-0.174-0.112-0.333-0.168-0.465l-0.249-0.505
                        l-5.057-0.228c0.237,0.905,0.542,3.441,0.609,4.438c-0.271-1.369-0.982-2.83-2.336-3.787c-1.039-0.717-2.336-1.089-3.748-1.089
                        c-1.885,0-3.781,0.783-5.068,2.1c-1.286,1.314-1.985,3.095-2.055,5.194c-0.485-0.519-1.117-0.971-1.907-1.328l-2.325-1.117
                        l-0.112-0.053c-0.554-0.266-0.576-0.345-0.565-0.505c0.023-0.239,0.555-0.492,1.321-0.492c0.949,0,2.337,0.479,3.454,1.196
                        l0.09-4.158c-0.823-0.372-1.975-0.677-3.634-0.677c-0.858,0-2.518,0.118-3.951,0.929l0,0c-0.396,0.226-0.744,0.479-1.061,0.758
                        l0.066-1.223c-1.354-0.146-2.787-0.187-4.548,1.447c-0.022-0.119-0.136-0.677-0.249-1.009l-5.463,0.332
                        c0.406,1.462,0.451,3.681,0.338,5.661l-0.101,2.085c0-0.014-0.012,0.239-0.012,0.239c-0.057,1.09-0.125,2.191-0.237,3.241
                        c-0.451-1.407-0.948-3.334-1.331-4.942l-2.698-12.13l-7.698,1.089c0.068,0.16,0.169,0.559,0.225,0.943
                        c0.068,0.504,0.046,1.555-0.688,3.693c-1.23,3.602-3.014,8.914-4.719,12.582c-0.235,0.52-0.643,1.356-0.643,1.356h6.006
                        c0.078-0.943,0.474-2.484,0.856-3.614c0.825-0.027,3.003-0.08,4.008-0.107c0.192,0.865,0.441,2.1,0.486,2.832l0.067,0.89H41.36
                        c-0.283-1.888-0.169-4.518-0.091-5.993c0.102-1.688,0.452-2.776,1.153-3.494c0.54-0.571,1.184-0.705,1.635-0.717
                        c-0.067,2.259,1.422,3.309,2.743,3.972l2.359,1.208c0.847,0.44,0.836,0.666,0.825,0.826c-0.034,0.452-0.723,0.624-1.344,0.611
                        c-1.231-0.027-2.936-0.877-4.855-2.857l-0.101,5.367c1.524,0.865,3.364,1.17,5.034,1.17c2.744,0,5.679-1.196,6.469-3.746
                        c1.343,2.576,4.041,3.773,6.694,3.773C64.253,42.428,66.036,41.656,67.582,40.021z"/>
                    <path class="text" fill="#FFFFFF" d="M53.303,30.602c-0.711-0.385-1.636-0.65-2.585-0.65c-1.128,0-2.179,0.438-2.246,1.354
                    c-0.079,0.958,0.791,1.29,1.22,1.488c0.451,0.227,1.41,0.691,2.336,1.116c0.915,0.425,2.461,1.302,2.428,3.414
                    c-0.057,2.964-3.195,4.133-5.746,4.133c-1.455,0-3.081-0.292-4.063-0.797l0.045-2.711c1.142,1.037,2.799,1.714,3.963,1.714
                    c1.389,0,2.2-0.597,2.268-1.475c0.068-0.877-0.574-1.356-1.331-1.74c-0.553-0.292-1.445-0.743-2.371-1.208
                    c-1.365-0.693-2.325-1.517-2.213-3.257c0.079-1.169,0.938-2.284,2.156-2.976c1.074-0.599,2.428-0.811,3.489-0.811
                    c1.297,0,2.155,0.199,2.686,0.385 M29.09,35.477l-1.579-7.519l-2.665,7.667 M33.177,34.973c0.475,2.033,1.253,4.995,1.852,6.392
                    h-4.854c-0.079-0.972-0.44-2.671-0.678-3.748l-5.439,0.147c-0.521,1.407-0.825,2.524-1.005,3.601h-3.669
                    c1.558-3.388,3.532-9.129,4.752-12.702c0.633-1.848,0.857-3.295,0.711-4.132l5.825-0.837L33.177,34.973z M44.701,28.609
                    c-1.161-0.054-2.709,0.477-4.3,2.869c0.045-0.902-0.046-1.727-0.215-2.338l-3.624,0.226c0.261,1.541,0.249,3.149,0.159,4.837
                    l-0.103,2.086c-0.102,1.699-0.191,3.534-0.463,5.075h4.154c-0.136-1.568-0.079-3.415,0.022-5.114
                    c0.113-2.061,0.609-3.258,1.399-4.094c0.858-0.891,1.987-1.075,2.846-0.971L44.701,28.609 M96.672,24.543l-3.759-0.598
                    c0.373,1.566,0.519,2.816,0.711,4.504l0.88,8.131c0.192,1.701,0.327,3.243,0.305,4.784h4.063c-0.36-1.541-0.541-3.083-0.733-4.784
                    M79.886,41.364c-0.247-1.541-0.337-3.083-0.396-4.784l-0.202-4.305c-0.09-2.284-1.399-3.641-3.612-3.641
                    c-1.207,0-2.642,0.387-3.859,1.941c-0.035-0.332-0.228-1.422-0.453-1.9l-3.307-0.146c0.294,1.594,0.373,3.201,0.44,4.889
                    l0.045,3.162c0.067,1.701,0.021,3.243-0.102,4.784h4.153c-0.237-1.541-0.327-3.083-0.395-4.784l-0.102-3.652
                    c-0.045-1.289,0.926-2.113,1.919-2.127c1.163-0.025,1.727,0.745,1.772,1.914l0.136,3.865c0.066,1.701,0.09,3.243-0.034,4.784
                    M86.738,39.676c0.712-0.026,1.366-0.345,1.772-0.822c-0.102-0.732-0.125-1.277-0.182-2.034l-0.157-2.218
                    c-2.776,0.451-3.702,1.648-3.658,3.002C84.549,39.105,85.564,39.729,86.738,39.676 M89.301,41.364
                    c-0.181-0.333-0.351-0.771-0.463-1.196c-0.644,0.651-1.818,1.527-3.499,1.527c-2.235,0-4.007-1.021-4.177-3.375
                    c-0.147-2.125,1.445-3.373,2.991-4.065c1.377-0.624,2.608-0.85,3.918-0.996c-0.114-2.019-1.287-2.577-2.643-2.577
                    c-1.31,0-2.37,0.452-3.397,1.089l-0.181-2.352c1.038-0.239,2.314-0.372,3.195-0.372c5.079,0,6.365,2.1,6.603,5.168l0.237,2.604
                    c0.124,1.688,0.372,3.321,0.868,4.545H89.301z M62.062,33.79c1.287-0.465,1.365-1.407,1.038-2.616
                    c-0.293-1.063-1.026-1.568-1.941-1.488c-0.541,0.053-2.201,0.518-2.189,3.6c0,0.559,0.045,1.117,0.124,1.648L62.062,33.79
                    M66.905,33.686l-7.474,2.803c0.565,1.767,1.683,3.029,3.387,3.068c1.604,0.027,2.586-0.719,3.218-1.208l0.834,1.048
                    c-1.172,1.249-2.617,2.086-4.987,2.086c-2.698,0-6.536-1.527-6.627-6.549c-0.101-4.982,3.499-6.896,6.186-6.896
                    c1.175,0,2.28,0.292,3.206,0.931C65.832,29.791,66.668,31.227,66.905,33.686z"/> -->
            </svg>
        </div>
    </div>
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <div class="main-banner-img">
                <img class="img img1" src="../assets/img/main-banner3.jpg" alt="이미지1">
                <img class="img img2" src="../assets/img/main-banner2.jpg" alt="이미지1">
                <img class="img img3" src="../assets/img/main-banner1.jpg" alt="이미지1">
                <div class="main-banner-desc">
                    <span>THE<br>ARSENAL<br>PLAYERS’<br>ASSOCIATION</span>
                </div>
            </div>
            <article class="content-article">
                <div class="mainCont">
                    <div class="main-banner">
                        <div class="main-info-wrap">
                            <div class="main-team-table">
                                <div class="team-table">
                                    <ul>
                                        <li>Top5</li>
                                        <li><img class="logo1" src="../assets/img/arsenal_logo.svg" alt="로고1"><span>1. ARSNAL FC</span></li>
                                        <li><img class="logo2" src="../assets/img/manC_logo.svg" alt="로고2"><span>2. MANCHASTER CITY</span></li>
                                        <li><img class="logo3" src="../assets/img/manU_logo.svg" alt="로고3"><span>3. MANCHASTER UNITED</span></li>
                                        <li><img class="logo4" src="../assets/img/chelsea_logo.svg" alt="로고4"><span>4. CHELSEA FC</span></li>
                                        <li><img class="logo5" src="../assets/img/liverpool_logo.svg" alt="로고5"><span>5. LIVERFUL FC</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-match-result">
                                <div class="result-table-title">top</div>
                                <div class="result-table">
                                    <div class="home-team">
                                        <img src="../assets/img/arsenal_logo.svg" alt="이미지">
                                        <span>ARSNAL FC</span>
                                    </div>
                                    <div class="result-grf-wrap">
                                        <div class="result result1">3 - 0</div>
                                        <div class="result result2">3 - 3</div>
                                        <div class="result result3">3 - 1</div>
                                        <div class="result result4">3 - 0</div>
                                    </div>
                                    <div class="away-team">
                                        <img src="../assets/img/chelsea_logo.svg" alt="이미지">
                                        <span>CHELSEA FC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </article>
            <article class="content-article-max">
                <div class="team-Schedule">
                    <div class="team-Schedule-wrap">
                        <div class="match-title">UPCOMING</div>
                        <div class="main-match-coming-wrap">
                            <div class="main-match-coming">
                                <div class="match-box">
                                    <div class="match-box-title">에미레츠스타디움</div>
                                    <div class="match-box-date">2011.09.11 (목) 21:00</div>
                                    <div class="team-wrap">
                                        <div class="home-team">
                                            <img src="../assets/img/arsenal_logo.svg" alt="이미지">
                                            <span>ARSNAL FC</span>
                                        </div>
                                        <div class="vs">
                                            <div class="result result1">vs</div>
                                        </div>
                                        <div class="away-team">
                                            <img src="../assets/img/chelsea_logo.svg" alt="이미지">
                                            <span>CHELSEA FC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-match-coming">
                                <div class="match-box">
                                    <div class="match-box-title">에미레츠스타디움</div>
                                    <div class="match-box-date">2011.09.11 (목) 21:00</div>
                                    <div class="team-wrap">
                                        <div class="home-team">
                                            <img src="../assets/img/arsenal_logo.svg" alt="이미지">
                                            <span>ARSNAL FC</span>
                                        </div>
                                        <div class="vs">
                                            <div class="result result1">vs</div>
                                        </div>
                                        <div class="away-team">
                                            <img src="../assets/img/chelsea_logo.svg" alt="이미지">
                                            <span>CHELSEA FC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-match-coming">
                                <div class="match-box">
                                    <div class="match-box-title">에미레츠스타디움</div>
                                    <div class="match-box-date">2011.09.11 (목) 21:00</div>
                                    <div class="team-wrap">
                                        <div class="home-team">
                                            <img src="../assets/img/arsenal_logo.svg" alt="이미지">
                                            <span>ARSNAL FC</span>
                                        </div>
                                        <div class="vs">
                                            <div class="result result1">vs</div>
                                        </div>
                                        <div class="away-team">
                                            <img src="../assets/img/chelsea_logo.svg" alt="이미지">
                                            <span>CHELSEA FC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-match-coming">
                                <div class="match-box">
                                    <div class="match-box-title">에미레츠스타디움</div>
                                    <div class="match-box-date">2011.09.11 (목) 21:00</div>
                                    <div class="team-wrap">
                                        <div class="home-team">
                                            <img src="../assets/img/arsenal_logo.svg" alt="이미지">
                                            <span>ARSNAL FC</span>
                                        </div>
                                        <div class="vs">
                                            <div class="result result1">vs</div>
                                        </div>
                                        <div class="away-team">
                                            <img src="../assets/img/chelsea_logo.svg" alt="이미지">
                                            <span>CHELSEA FC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-match-coming">
                                <div class="match-box">
                                    <div class="match-box-title">에미레츠스타디움</div>
                                    <div class="match-box-date">2011.09.11 (목) 21:00</div>
                                    <div class="team-wrap">
                                        <div class="home-team">
                                            <img src="../assets/img/arsenal_logo.svg" alt="이미지">
                                            <span>ARSNAL FC</span>
                                        </div>
                                        <div class="vs">
                                            <div class="result result1">vs</div>
                                        </div>
                                        <div class="away-team">
                                            <img src="../assets/img/chelsea_logo.svg" alt="이미지">
                                            <span>CHELSEA FC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-slide">
                    <div class="img-slide-wrap">
                        <div class="img-slide-inner">
                            <img class="slider" src="../assets/img/sliderimg1.svg" alt="이미지">
                            <img class="slider" src="../assets/img/sliderimg2.svg" alt="이미지">
                            <img class="slider" src="../assets/img/sliderimg3.svg" alt="이미지">
                            <img class="slider" src="../assets/img/sliderimg4.svg" alt="이미지">
                            <img class="slider" src="../assets/img/sliderimg5.svg" alt="이미지">
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script type="text/javascript"> 

    // // 처음 로딩
    // window.onload = (function() {

    //     var fillDur = 2
    //     var tl = new TimelineMax({repeat:-1, repeatDelay:5});
    //     // drawSVG플러그인 필요
    //     // .fromTo("#wheel", 2, {drawSVG:"50% 50%"}, {drawSVG:"0% 100%"})
    //     // .fromTo("#cannon", 2, {stroke:"#FFF", drawSVG:"50% 50%"}, {drawSVG:"0% 100%"})
    //     // .fromTo(["#template", ".blue"], 2, {drawSVG:"50% 50%"}, {drawSVG:"0% 100%"} )
    //     tl.to("#plate1", fillDur, {fill:"#EC1C2E"}, "fill")
    //     .to("#plate2", fillDur, {fill:"#CE1141"}, "fill")
    //     .to("#template", fillDur, {fill:"#A39161", stroke:"#A39161"}, "fill")
    //     .to(".blue", fillDur, {fill:"#003876", stroke:"#003876"}, "fill")
    //     .to("#wheel", fillDur, {fill:"#A39161", stroke:"#FFFFFF"}, "fill")
    //     .to("#cannon", fillDur, {fill:"#A39161", stroke:"#FFFFFF", strokeWidth:"2"}, "fill")
    //     .to("#bg", fillDur, {fill:"#fff"}, "fill")
    //     .to("#cannon-fill", fillDur, {opacity:1}, "fill")
    //     .fromTo(".text", 1, {opacity:0, scale:1.5}, {opacity:1, scale:1, transformOrigin: "0% 50%"}, "-=.25");

    //     setTimeout(function() {
    //         // show loader on page load
    //         const loader = document.querySelector("#loading");
    //         const loaderInner = document.querySelectorAll(".text");
    //         const main = document.querySelector("#header");
    //         const img = document.querySelector(".main-banner-img");
    //         // var gs = new TimelineMax({repeat:-1, repeatDelay:5});
    //         gsap.to(loaderInner, 3, {
    //                     yPercent: -100,
    //                     ease: "power2.out",
    //                     transformOrigin: "bottom",
    //                     scale: 1
    //         })
    //         gsap.to(loader, 3, {
    //                     opacity:1,
    //                     yPercent: -100,
    //                     ease: "power2.out",
    //                     transformOrigin: "bottom",
    //                     scaleY: 1,
    //                     delay:0.5
    //         })
    //         gsap.fromTo(main, 4, {
    //                     y:300
    //         },{
    //                     duration: 2,
    //                     opacity:1,
    //                     yPercent: -300,
    //                     ease: "power2.out",
    //                     transformOrigin: "bottom"
    //         });
    //         gsap.fromTo(img, 4, {
    //                     y:800
    //         },{
    //                     duration: 2,
    //                     opacity:1,
    //                     yPercent: -120,
    //                     ease: "power2.out",
    //                     transformOrigin: "bottom"
    //         });
    //     }, 3000);
    // });
    
    // 이미지 슬라이드 - 배너
    {
        let bannerImgBox = $(".img");
        let countImg = bannerImgBox.length;
        console.log(bannerImgBox[3]);
        var gs = new TimelineMax({repeat:-1, repeatDelay:1});
        setTimeout(function() {
            gs.to(bannerImgBox[2], 6, {
                opacity:1,
                ease: "power2.out"
            })
            gs.to(bannerImgBox[2], 6, {
                opacity:0,
                ease: "power2.out"
            })
            .to(bannerImgBox[1], 6, {
                opacity:0,
                ease: "power2.out"
            })
            .to(bannerImgBox[0], 1, {
                opacity:0,
                ease: "power2.out"
            })
            .to(bannerImgBox[2], 6, {
                opacity:1,
                ease: "power2.out"
            })
            .to(bannerImgBox[1], 0.5, {
                opacity:1,
                ease: "power2.out"
            })
            .to(bannerImgBox[0], 0.5, {
                opacity:1,
                ease: "power2.out"
            })
        }, 3000);
    }

    {
         let matchBox =$(".main-match-coming:first-child");
        // matchBox.draggable({
        //     containment : 'parent' // 부모요소 안에 종속
        // });

        const yoyo1 = new TimelineMax();
        yoyo1.to(matchBox, 2, {y:-40, repeat:-1, yoyo:true})

    }
    
    // 하단이미지 
    {
        let ImgBox = $(".img-slide-inner");
        const tl = new TimelineMax();
        tl.to(ImgBox, 60, {x:-3000, repeat:-1, yoyo:true})
    }
</script>