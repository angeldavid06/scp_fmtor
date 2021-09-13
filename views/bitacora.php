<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/components/head.php'; ?>
    <title>Bitácora</title>
</head>
<body>
    <div class="main">
        <div class="row-con">
            <button class="btn-menu btn-icon material-icons" id="btn-menu">menu</button>
            <header class="header">
                <div class="info">
                    <div class="options">
                        <button class="btn-icon material-icons" id="btn-sesion">logout</button>
                    </div>
                    <div class="usuario">
                        <h3><?php echo $_SESSION['usuario'];?> </h3>
                        <p><?php echo $_SESSION['rol'];?> </p>
                    </div>
                </div>
                <div class="logo">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1851.752 520.059">
                            <g id="fmtor" transform="translate(-29.969 -20)">
                                <path id="Exclusión_1" data-name="Exclusión 1"
                                    d="M270.652,502.31H232.137a4.443,4.443,0,0,1-4.394-3.8l-4.269-29.23a4.485,4.485,0,0,0-3.807-3.783A216.593,216.593,0,0,1,198.3,461.2a4.556,4.556,0,0,0-1.125-.141,4.487,4.487,0,0,0-3.889,2.235L178.6,488.769a4.464,4.464,0,0,1-3.851,2.223,4.416,4.416,0,0,1-1.7-.338L137.47,475.913a4.436,4.436,0,0,1-2.6-5.187l7.313-28.939a4.479,4.479,0,0,0-2.058-4.943c-6.169-3.726-12.195-7.787-17.909-12.069a4.577,4.577,0,0,0-2.723-.907,4.418,4.418,0,0,0-2.717.92l-23.58,18.127a4.433,4.433,0,0,1-5.84-.38L60.109,415.3a4.444,4.444,0,0,1-.418-5.788l17.989-24.147A4.473,4.473,0,0,0,77.663,380c-4.267-5.773-8.268-11.779-11.892-17.851a4.552,4.552,0,0,0-3.872-2.208,4.438,4.438,0,0,0-1.151.152L31.834,367.87a4.437,4.437,0,0,1-5.253-2.587L11.84,329.694a4.44,4.44,0,0,1,1.828-5.509l25.941-15.476a4.467,4.467,0,0,0,2.041-4.957,216.532,216.532,0,0,1-4.216-21.535,4.517,4.517,0,0,0-1.257-2.544,4.408,4.408,0,0,0-2.522-1.281L3.8,274.028A4.437,4.437,0,0,1,0,269.637v-38.52a4.448,4.448,0,0,1,3.861-4.4l29.881-3.908A4.511,4.511,0,0,0,37.594,219c1.044-7.029,2.454-14.083,4.189-20.965a4.52,4.52,0,0,0-2.032-4.969L13.872,177.628a4.441,4.441,0,0,1-1.829-5.509l14.741-35.588a4.436,4.436,0,0,1,5.254-2.588l28.993,7.8a4.434,4.434,0,0,0,1.151.152,4.529,4.529,0,0,0,3.864-2.2c3.684-6.132,7.7-12.128,11.945-17.821a4.516,4.516,0,0,0,.018-5.371L60.073,92.42a4.446,4.446,0,0,1,.418-5.789L87.728,59.394a4.445,4.445,0,0,1,5.848-.381l23.642,18.176a4.426,4.426,0,0,0,2.717.92,4.485,4.485,0,0,0,2.705-.9c5.762-4.29,11.8-8.336,17.953-12.025a4.524,4.524,0,0,0,2.059-4.949l-7.286-28.858a4.438,4.438,0,0,1,2.6-5.187L173.555,11.45a4.409,4.409,0,0,1,1.7-.338,4.466,4.466,0,0,1,3.851,2.223l14.723,25.551a4.5,4.5,0,0,0,5,2.1,216.6,216.6,0,0,1,21.389-4.253,4.483,4.483,0,0,0,3.816-3.785L228.835,0,275.09,0l4.287,32.8a4.506,4.506,0,0,0,3.833,3.853,216.947,216.947,0,0,1,21.6,4.253,4.562,4.562,0,0,0,1.106.137,4.511,4.511,0,0,0,3.854-2.176l14.91-25a4.439,4.439,0,0,1,5.512-1.827l35.587,14.741a4.437,4.437,0,0,1,2.583,5.251l-7.491,27.883a4.516,4.516,0,0,0,2.05,5.02,218.258,218.258,0,0,1,18.46,12.343,4.555,4.555,0,0,0,2.711.9,4.406,4.406,0,0,0,2.658-.879l23.136-17.236a4.434,4.434,0,0,1,5.786.421L442.921,87.73a4.455,4.455,0,0,1,.373,5.843l-17.457,22.714a4.512,4.512,0,0,0-.017,5.429A220.424,220.424,0,0,1,438.243,140.3a4.517,4.517,0,0,0,3.865,2.211,4.44,4.44,0,0,0,1.087-.135l27.733-7.011a4.441,4.441,0,0,1,5.192,2.6l14.741,35.588a4.454,4.454,0,0,1-1.882,5.543l-24.672,14.214a4.521,4.521,0,0,0-2.1,5,214.834,214.834,0,0,1,4.234,21.435,4.519,4.519,0,0,0,3.851,3.829l28.16,3.682a4.448,4.448,0,0,1,3.86,4.4v38.52a4.437,4.437,0,0,1-3.8,4.391L470.228,278.7a4.41,4.41,0,0,0-2.523,1.279,4.51,4.51,0,0,0-1.258,2.54,217.559,217.559,0,0,1-4.366,22.008,4.506,4.506,0,0,0,2.094,5.009l24.592,14.173a4.451,4.451,0,0,1,1.891,5.543L475.916,364.84a4.438,4.438,0,0,1-5.192,2.6l-27.813-7.031a4.455,4.455,0,0,0-1.087-.135,4.539,4.539,0,0,0-3.866,2.2,217.881,217.881,0,0,1-12.469,18.548,4.512,4.512,0,0,0,.018,5.439l17.412,22.651a4.455,4.455,0,0,1-.382,5.842L415.3,442.2a4.447,4.447,0,0,1-5.8.42l-23.2-17.284a4.418,4.418,0,0,0-2.661-.88,4.488,4.488,0,0,0-2.7.9,218.283,218.283,0,0,1-18.486,12.3,4.513,4.513,0,0,0-2.068,5.026l7.473,27.806a4.436,4.436,0,0,1-2.583,5.251L329.7,490.47a4.4,4.4,0,0,1-1.7.338,4.46,4.46,0,0,1-3.816-2.164l-14.954-25.069a4.5,4.5,0,0,0-3.854-2.176,4.587,4.587,0,0,0-1.1.134,216.325,216.325,0,0,1-21.61,4.2,4.521,4.521,0,0,0-3.843,3.855l-3.771,28.862A4.458,4.458,0,0,1,270.652,502.31Zm-19.5-413.665c-89.592,0-162.481,72.889-162.481,162.481s72.888,162.481,162.481,162.481,162.481-72.888,162.481-162.481S340.747,88.645,251.155,88.645Z"
                                    transform="translate(1025.718 28.875)" fill="var(--color-text)" />
                                <path id="Trazado_2" data-name="Trazado 2"
                                    d="M1344.7,67.76,1337,72.19Zm5,2.1,2.174,8.606Zm-25.266-29.531-3.4-8.2Zm5.547,1.884,7.685-4.431Zm-43.735,18.044,8.6-2.175Zm2.6-5.187,3.4,8.2Zm2.627,38.993,4.562,7.609Zm2.059-4.949-8.6,2.175Zm-25.435,16.955,5.4-7.037Zm5.422.02,5.307,7.118ZM1238.6,88.268l-6.274-6.275Zm5.848-.38-5.414,7.036Zm-33.085,27.619-6.274-6.275Zm17.5,35.24,7.118,5.3Zm.018-5.371-7.118,5.3Zm-16.977,25.239,2.307-8.57Zm5.014-2.047,7.605,4.57Zm-39.262-3.162-8.2-3.4Zm5.254-2.587-2.307,8.57ZM1164.746,206.5l4.544-7.622Zm-1.828-5.509,8.2,3.4Zm29.739,25.912,8.609,2.168Zm-2.032-4.969,4.544-7.622Zm-6.008,29.747,1.154,8.8Zm3.852-3.813-8.777-1.305Zm-33.733,7.721,1.154,8.8Zm-.062,47.311,1.278-8.782Zm33.635,8.188-8.786,1.261Zm-3.781-3.825,1.278-8.782Zm5.955,30.318-4.544-7.622Zm-27.769,20.985-8.2,3.4Zm1.828-5.509L1160,345.438Zm52.1,37.966,7.615-4.552Zm-5.023-2.056-2.307-8.57Zm16.933,25.268,7.118,5.3Zm-.018-5.361-7.127,5.281Zm-17.554,35.3-6.275,6.275Zm-.417-5.788,7.118,5.3Zm33.5,33.406,5.4,7.037Zm-5.84-.38,6.274-6.275Zm34.86-17.761,5.316-7.105Zm-5.44.013,5.414,7.036Zm25.408,17-8.608-2.174Zm-4.712,34.125-3.4,8.2Zm-2.6-5.186,8.6,2.174Zm43.734,18.043,7.686,4.431Zm-5.547,1.885,3.4-8.2Zm25.24-29.46,2.192-8.6Zm-5.014,2.094-7.686-4.431Zm30.192,5.995-8.786,1.283Zm-3.807-3.782-1.3,8.777Zm8.076,33.013,8.777-1.283Zm47.311-.067,8.8,1.151Zm7.614-32.717-1.243-8.786Zm-3.843,3.854,8.8,1.151Zm30.4-6.01L1452.482,497Zm-4.952-2.042-2.13-8.614Zm25.417,28.938,3.4,8.2Zm-5.511-1.826-7.624,4.546Zm43.681-18.167-8.564,2.3Zm-2.583,5.251,3.4,8.2Zm-2.822-38.083,4.526,7.63Zm-2.068,5.026-8.573,2.3Zm25.914-17.337-5.3,7.117Zm28.994,16.863,6.274,6.275Zm-5.8.421,5.307-7.117Zm33.032-27.659-6.274-6.275Zm-17.031-28.493-7.038,5.408Zm17.4-26.053-2.174,8.6Zm-4.952,2.066-7.605-4.565Zm37.957,2.361,8.191,3.4Zm-5.192,2.6,2.174-8.6Zm-8.644-62.917,8.6,2.179Zm2.094,5.01,4.428-7.69Zm6.052-30.836,1.287,8.782Zm-3.781,3.819,8.777,1.274Zm32-55.264-1.154,8.8Zm-32.011-7.511-8.786,1.275Zm3.852,3.829-1.154,8.8Zm-5.981-30.262-4.429-7.689Zm-2.1,5,8.608-2.157Zm28.656-24.755-8.2,3.4Zm-1.881,5.543,4.428,7.689ZM1621.8,164.236l2.174,8.6Zm5.192,2.6,8.2-3.4Zm-37.877,2.331-7.623,4.547Zm4.952,2.076-2.174-8.6Zm-17.359-26.085-7.038-5.408Zm-.018,5.429,7.109-5.305Zm17.1-33.986-6.283,6.275Zm.373,5.842,7.038,5.408Zm-61.91-16.288-5.307,7.115Zm5.369.022,5.307,7.117ZM1511.748,88.8l-8.573-2.3Zm2.05,5.02-4.544,7.62Zm2.858-38.154,3.4-8.2Zm2.582,5.252-8.564-2.3Zm-43.681-18.166,7.623,4.546Zm5.511-1.827,3.39-8.2Zm-25.382,28.862,2.157-8.609Zm4.961-2.039-7.623-4.546Zm-34.682-38.869-8.8,1.151ZM1374.9,61.819l-8.786-1.283Zm-3.816,3.784-1.287-8.781Zm59.168-3.926,8.8-1.151Zm3.834,3.853-1.269,8.784Zm126.678,23.416,5.307,7.117Zm5.786.421,6.283-6.275Zm73.092,263.217-4.429,7.69Zm1.89,5.543-8.2-3.4Zm-458.823,38.617,2.307,8.57Zm-5.254-2.588,8.2-3.4ZM1379.71,28.877l-8.777-1.283Zm-8.777-1.283-4.819,32.943,17.563,2.567L1388.5,30.16ZM1425.965,20H1379.71V37.749h46.255Zm13.09,40.526-4.3-32.8-17.6,2.3,4.286,32.8Zm18.788.648a224.948,224.948,0,0,0-22.489-4.428l-2.538,17.567a207.294,207.294,0,0,1,20.714,4.078Zm10.09-22.974-14.91,25,15.247,9.093,14.91-25Zm52.121,9.262-35.6-14.741-6.789,16.4,35.588,14.741Zm.257,43.638,7.5-27.882-17.137-4.609-7.5,27.882Zm17.252,7.945A226.453,226.453,0,0,0,1518.351,86.2l-9.1,15.239a208.328,208.328,0,0,1,17.7,11.839Zm17.9-17.215-23.136,17.235,10.605,14.234,23.136-17.236Zm44.6,28.5-27.236-27.238-12.558,12.55,27.237,27.238Zm-16.321,40.242,17.457-22.716-14.067-10.817-17.465,22.716Zm12.984,14.055a223.579,223.579,0,0,0-12.93-19.341L1569.576,155.9a208.946,208.946,0,0,1,11.919,17.822Zm22.9-8.994-27.734,7.011,4.349,17.208,27.734-7.011Zm30.307,43.4L1635.2,163.445l-16.4,6.792,14.741,35.589Zm-30.325,30.843,24.672-14.215-8.866-15.379L1610.754,214.5Zm6.487,17.469a223.2,223.2,0,0,0-4.411-22.317l-17.217,4.314a206.556,206.556,0,0,1,4.056,20.553Zm24.379-.015-28.159-3.682-2.307,17.6,28.159,3.682Zm11.582,51.72V260.53h-17.75v38.52Zm-39.67,17.307,28.284-4.134-2.565-17.563-28.284,4.134Zm-.834,19.224a224.373,224.373,0,0,0,4.544-22.913l-17.563-2.546a206.9,206.9,0,0,1-4.189,21.1Zm22.515,9.314-24.592-14.173-8.866,15.379,24.6,14.174Zm-9.088,52.217,14.741-35.588-16.392-6.793-14.741,35.588Zm-43.371.782,27.813,7.031,4.349-17.209-27.813-7.031Zm-8.147,17.332a225.312,225.312,0,0,0,12.984-19.306l-15.22-9.13a210.7,210.7,0,0,1-11.963,17.79Zm17.359,17.358-17.412-22.652-14.066,10.817,17.412,22.652Zm-28.372,44.764,27.237-27.237-12.549-12.552L1559.893,464.8Zm-40.566-16.022,23.2,17.284,10.605-14.234-23.207-17.284Zm-14.022,12.825a224.985,224.985,0,0,0,19.24-12.8l-10.57-14.256a208,208,0,0,1-17.732,11.793Zm9.452,22.9-7.473-27.805-17.146,4.609,7.481,27.805Zm-43.344,30.5,35.588-14.741-6.8-16.4-35.588,14.741ZM1452.482,497l14.954,25.069,15.247-9.092L1467.729,487.9Zm-17.687,6.4a224.865,224.865,0,0,0,22.5-4.371l-4.269-17.228a206.941,206.941,0,0,1-20.723,4.026Zm-.062,25.081,3.772-28.862-17.6-2.3-3.781,28.862Zm-51.722,11.586h38.516V522.309h-38.516Zm-17.448-40.618,4.278,29.231,17.554-2.567-4.269-29.231Zm-18.584-.771a225.007,225.007,0,0,0,22.258,4.483l2.618-17.554a207.216,207.216,0,0,1-20.492-4.129Zm-9.815,23.405,14.679-25.482-15.371-8.861-14.688,25.482Zm-52.219-9.089,35.588,14.741,6.8-16.4-35.588-14.741Zm-.5-44.5-7.313,28.938,17.208,4.35,7.313-28.938Zm-16.685-7.733q8.986,6.727,18.646,12.561l9.176-15.2q-8.892-5.366-17.182-11.576Zm-18.291,18.073,23.589-18.128-10.818-14.072-23.589,18.128Zm-44.764-28.38,27.237,27.238,12.558-12.551L1217.267,437.9Zm16.729-41.512-17.989,24.146,14.235,10.6,17.989-24.147Zm-12.416-13.358q5.737,9.609,12.389,18.58l14.262-10.563q-6.11-8.257-11.413-17.121Zm-24.006,9.737,28.914-7.775-4.615-17.141-28.914,7.775Zm-30.5-43.349,14.741,35.588,16.4-6.792-14.741-35.589Zm31.425-32L1160,345.438l9.088,15.244,25.95-15.477Zm-6.417-17.61a225.159,225.159,0,0,0,4.393,22.42l17.226-4.293a205.73,205.73,0,0,1-4.047-20.649Zm-26.136-.668,29.855,4.364,2.565-17.563-29.855-4.363ZM1142,259.992v38.52h17.75v-38.52Zm41.472-17.108-29.881,3.908,2.3,17.6,29.881-3.908Zm.586-18.147q-2.7,10.722-4.366,21.828l17.554,2.612q1.531-10.224,4.02-20.1ZM1160.2,214.124l25.87,15.435,9.1-15.244L1169.29,198.88Zm9.256-52.115L1154.718,197.6l16.4,6.793,14.741-35.589Zm44.755.035-28.994-7.8-4.615,17.141,28.994,7.8Zm7.535-16.6q-6.656,8.944-12.433,18.55l15.211,9.141q5.312-8.839,11.457-17.093ZM1203.83,126.6l17.936,24.082,14.235-10.6-17.936-24.081Zm28.5-44.6-27.237,27.238,12.549,12.551,27.237-27.238Zm41.17,17.035-23.642-18.176-10.818,14.072,23.651,18.176Zm13.4-12.578q-9.664,5.8-18.681,12.517l10.605,14.236q8.293-6.181,17.208-11.534Zm-9.265-24.022,7.3,28.857,17.208-4.35-7.295-28.857Zm43.4-30.3-35.588,14.741,6.8,16.4,35.588-14.741Zm31.355,31.2-14.723-25.551-15.38,8.861L1337,72.19Zm17.412-6.506a224.248,224.248,0,0,0-22.267,4.427l4.34,17.211a206.866,206.866,0,0,1,20.5-4.077ZM1337,72.19a13.373,13.373,0,0,0,14.865,6.271l-4.34-17.211a4.377,4.377,0,0,1,4.855,2.079Zm-9.176-23.667a4.441,4.441,0,0,1-5.547-1.884l15.38-8.861a13.315,13.315,0,0,0-16.631-5.653Zm-32.987,9.554a4.437,4.437,0,0,1-2.6,5.187l-6.8-16.4a13.315,13.315,0,0,0-7.81,15.561Zm1.189,43.59a13.373,13.373,0,0,0,6.105-14.733l-17.208,4.35a4.368,4.368,0,0,1,1.97-4.835ZM1262.687,113.1a13.371,13.371,0,0,0,16.134.1l-10.605-14.236a4.374,4.374,0,0,1,5.281.061Zm-17.811-18.557a4.434,4.434,0,0,1-5.84.381l10.818-14.072a13.314,13.314,0,0,0-17.528,1.141Zm-26.811,21.449a4.436,4.436,0,0,1-.426,5.789l-12.549-12.551a13.315,13.315,0,0,0-1.26,17.365Zm17.918,40.053a13.375,13.375,0,0,0,.018-15.972l-14.235,10.6a4.385,4.385,0,0,1-.018-5.231ZM1209.6,179.184a13.368,13.368,0,0,0,14.927-6.046L1209.315,164a4.38,4.38,0,0,1,4.9-1.953Zm-23.74-10.383a4.438,4.438,0,0,1-5.254,2.588l4.615-17.141a13.32,13.32,0,0,0-15.761,7.761ZM1169.29,198.88a4.44,4.44,0,0,1,1.828,5.509l-16.4-6.793a13.31,13.31,0,0,0,5.485,16.527Zm31.976,30.194a13.382,13.382,0,0,0-6.1-14.759l-9.1,15.244a4.374,4.374,0,0,1-2.015-4.822Zm-15.5,31.41a13.36,13.36,0,0,0,11.475-11.306l-17.554-2.612a4.377,4.377,0,0,1,3.781-3.681Zm-26.021-.492a4.435,4.435,0,0,1-3.86,4.4l-2.3-17.6a13.316,13.316,0,0,0-11.591,13.2Zm-3.8,34.13a4.436,4.436,0,0,1,3.8,4.39H1142a13.309,13.309,0,0,0,11.386,13.172Zm41.143,15.709a13.365,13.365,0,0,0-11.289-11.346l-2.565,17.563a4.386,4.386,0,0,1-3.719-3.7Zm-2.059,35.375a13.381,13.381,0,0,0,6.106-14.726l-17.226,4.293a4.389,4.389,0,0,1,2.024-4.81Zm-24.122,9.967a4.44,4.44,0,0,1-1.828,5.509L1160,345.438a13.309,13.309,0,0,0-5.485,16.527Zm53.346,31.3a13.376,13.376,0,0,0-14.945-6.075l4.615,17.141a4.382,4.382,0,0,1-4.908-1.962Zm11.413,33.065a13.374,13.374,0,0,0,0-15.944l-14.262,10.563a4.385,4.385,0,0,1,.027-5.222ZM1217.267,437.9a4.446,4.446,0,0,1,.417,5.789l-14.235-10.6a13.316,13.316,0,0,0,1.26,17.366Zm21.388,26.858a4.446,4.446,0,0,1,5.848.381l-12.558,12.551a13.315,13.315,0,0,0,17.528,1.141Zm39.75-18.21a13.37,13.37,0,0,0-16.161.083l10.818,14.072a4.386,4.386,0,0,1-5.3.056Zm23.252,26.292a13.365,13.365,0,0,0-6.07-14.716l-9.176,15.2a4.383,4.383,0,0,1-1.961-4.829Zm-9.913,23.751a4.436,4.436,0,0,1,2.6,5.186l-17.208-4.35a13.314,13.314,0,0,0,7.81,15.561Zm30.041,16.625a4.44,4.44,0,0,1,5.547-1.884l-6.8,16.4a13.315,13.315,0,0,0,16.631-5.652Zm29.58-31.744a13.365,13.365,0,0,0-14.892,6.262l15.371,8.861a4.375,4.375,0,0,1-4.863,2.077Zm31.762,15.4a13.368,13.368,0,0,0-11.271-11.276l-2.618,17.554a4.384,4.384,0,0,1-3.674-3.711Zm-.115,25.435a4.426,4.426,0,0,1,4.384,3.8l-17.554,2.567a13.3,13.3,0,0,0,13.17,11.387Zm34.115,3.862a4.443,4.443,0,0,1,4.4-3.862v17.749a13.322,13.322,0,0,0,13.206-11.586Zm15.176-40.352a13.369,13.369,0,0,0-11.4,11.49l17.6,2.3a4.377,4.377,0,0,1-3.709,3.782Zm35.428,2.084a13.365,13.365,0,0,0-14.706-6.109l4.269,17.228a4.383,4.383,0,0,1-4.81-2.026Zm9.443,23.243a4.437,4.437,0,0,1,5.511,1.826l-15.247,9.092a13.322,13.322,0,0,0,16.534,5.479Zm33.005-9.49a4.435,4.435,0,0,1,2.583-5.251l6.8,16.4a13.3,13.3,0,0,0,7.757-15.755Zm-1.376-42.767a13.38,13.38,0,0,0-6.106,14.962l17.146-4.609a4.368,4.368,0,0,1-1.979,4.909Zm33.68-11.8a13.364,13.364,0,0,0-15.948,0l10.57,14.256a4.369,4.369,0,0,1-5.218-.027Zm17.412,17.705a4.446,4.446,0,0,1,5.8-.421l-10.605,14.234a13.315,13.315,0,0,0,17.368-1.263Zm26.864-21.4a4.433,4.433,0,0,1,.381-5.842l12.549,12.552a13.319,13.319,0,0,0,1.136-17.527Zm-17.492-38.822a13.367,13.367,0,0,0,.08,16.17l14.066-10.817a4.361,4.361,0,0,1,.053,5.294Zm26.7-23.9a13.368,13.368,0,0,0-14.732,6.1l15.22,9.13a4.384,4.384,0,0,1-4.837,1.974Zm22.631,9.634a4.431,4.431,0,0,1,5.183-2.6l-4.349,17.209a13.308,13.308,0,0,0,15.557-7.812Zm-14.244-59.1a13.384,13.384,0,0,0,6.266,14.877l8.866-15.379a4.382,4.382,0,0,1,2.077,4.859Zm15.478-32.43a13.371,13.371,0,0,0-11.289,11.328l17.563,2.546a4.373,4.373,0,0,1-3.71,3.689Zm24.485.256a4.436,4.436,0,0,1,3.8-4.39l2.565,17.563a13.31,13.31,0,0,0,11.386-13.173Zm3.86-34.12a4.436,4.436,0,0,1-3.86-4.4h17.75a13.315,13.315,0,0,0-11.582-13.2Zm-39.643-15.036a13.382,13.382,0,0,0,11.484,11.353l2.307-17.6a4.388,4.388,0,0,1,3.781,3.7Zm2.227-35.4a13.375,13.375,0,0,0-6.283,14.845l17.217-4.314a4.367,4.367,0,0,1-2.077,4.848Zm22.781-8.672a4.443,4.443,0,0,1,1.881-5.543l8.866,15.379a13.321,13.321,0,0,0,5.653-16.629Zm-9.558-32.985a4.434,4.434,0,0,1-5.183-2.6l16.4-6.792a13.319,13.319,0,0,0-15.566-7.812Zm-42.483.878a13.37,13.37,0,0,0,14.75,6.133l-4.349-17.208a4.372,4.372,0,0,1,4.837,1.983Zm-11.821-33.964a13.366,13.366,0,0,0-.1,16.142l14.226-10.611a4.376,4.376,0,0,1-.053,5.286Zm17.838-16.874a4.443,4.443,0,0,1-.373-5.842l14.067,10.817a13.318,13.318,0,0,0-1.136-17.526Zm-60.561-9.606a13.377,13.377,0,0,0,15.983.024l-10.605-14.234a4.382,4.382,0,0,1,5.236-.02Zm-23.776-26.783a13.364,13.364,0,0,0,6.079,14.944l9.1-15.239a4.367,4.367,0,0,1,1.961,4.9Zm10.082-22.63a4.427,4.427,0,0,1-2.583-5.252l17.137,4.609a13.314,13.314,0,0,0-7.756-15.755ZM1483.18,47.293a4.441,4.441,0,0,1-5.511,1.826l6.789-16.4a13.314,13.314,0,0,0-16.525,5.479Zm-29.651,31.1a13.37,13.37,0,0,0,14.741-6.1L1453.024,63.2a4.381,4.381,0,0,1,4.819-2.023Zm-27.565-40.642a8.876,8.876,0,0,1-8.8-7.724l17.6-2.3A8.874,8.874,0,0,0,1425.965,20Zm-37.38-8.873a8.872,8.872,0,0,1-8.875,8.873V20a8.879,8.879,0,0,0-8.875,8.876Zm-22.471,31.66a4.377,4.377,0,0,1,3.683-3.713l2.574,17.561A13.374,13.374,0,0,0,1383.677,63.1Zm55.334,2.292a13.382,13.382,0,0,0,11.369,11.485l2.538-17.567a4.384,4.384,0,0,1,3.7,3.78ZM1566.07,96.063a4.446,4.446,0,0,1-5.8-.421l12.558-12.55a13.315,13.315,0,0,0-17.368-1.262Zm69.143,264.211a4.433,4.433,0,0,1-1.881-5.543l16.392,6.793a13.3,13.3,0,0,0-5.653-16.629Zm-454.812,27.9a4.437,4.437,0,0,1,5.254,2.587l-16.4,6.792a13.317,13.317,0,0,0,15.762,7.762ZM1388.5,30.16a8.871,8.871,0,0,0,.089-1.284h-17.749a8.889,8.889,0,0,1,.1-1.283Z"
                                    transform="translate(-125.156 0)" fill="none" />
                                <g id="Grupo_1" data-name="Grupo 1" transform="translate(1168.183 150.477)">
                                    <path id="Trazado_3" data-name="Trazado 3"
                                        d="M1406.32,361.561l27.19,38.832,5.822-4.078-13.207-18.861,21.256,21.495-1.109-7.49,2.5-1.748-13.207-18.861,21.524,21.3-1.469-6.824,2.5-1.748-13.4-19.138,21.534,21.3-1.479-6.823,2.782-1.943-13.4-19.138,21.247,21.495-1.192-7.017,3.05-2.137-13.4-19.138,21.247,21.495-1.192-7.017,2.773-1.943-13.4-19.138,21.256,21.495-1.192-7.017,2.773-1.943-13.4-19.138,21.247,21.495-1.192-7.017,2.5-1.748-13.4-19.139,21.534,21.3-1.2-7.017,2.5-1.748-13.4-19.139,21.525,21.3-1.192-7.017,2.772-1.942L1511,318.023l21.247,21.5-1.192-7.018,2.773-1.942-13.4-19.139,21.256,21.5-1.192-7.018,2.44-8.322-21.367-30.51-7.9-.664-4.168,2.913-6.377-3.8,1.386,7.3-4.436,3.107-6.377-3.8,1.386,7.3-4.436,3.107-6.386-3.8,1.386,7.3-4.436,3.107-6.377-3.8,1.386,7.3-4.436,3.107-6.386-3.8,1.673,7.1-4.168,2.913-6.931-3.411,1.386,7.3-4.159,2.913-6.654-3.605,1.386,7.3-4.159,2.913-6.663-3.605,1.386,7.295-4.159,2.914-6.654-3.605,1.386,7.295-3.882,2.719-6.663-3.605,1.118,7.49-4.445,3.108-6.377-3.8,1.386,7.295Z"
                                        transform="translate(-1325.555 -186.08)" fill="var(--color-text)" />
                                    <path id="Trazado_4" data-name="Trazado 4"
                                        d="M1433.522,420.34l10.222,14.6a2.772,2.772,0,0,1-.684,3.862l-25.406,17.794a2.775,2.775,0,0,1-3.863-.681l-10.222-14.6a2.771,2.771,0,0,1,.684-3.861l25.406-17.8A2.774,2.774,0,0,1,1433.522,420.34Z"
                                        transform="translate(-1325.308 -196.211)" fill="var(--color-text)" />
                                    <path id="Trazado_5" data-name="Trazado 5"
                                        d="M1424.053,411.65l-25.415,17.794a2.765,2.765,0,0,1-3.854-.681l-24.2-34.567a2.777,2.777,0,0,1,.675-3.861l25.415-17.794a2.774,2.774,0,0,1,3.863.681l24.2,34.566A2.772,2.772,0,0,1,1424.053,411.65Z"
                                        transform="translate(-1322.807 -192.639)" fill="var(--color-text)" />
                                    <path id="Trazado_6" data-name="Trazado 6"
                                        d="M1392.241,366.215l-25.415,17.794a2.774,2.774,0,0,1-3.863-.68l-9.833-14.041a2.772,2.772,0,0,1,.684-3.862l25.415-17.794a2.774,2.774,0,0,1,3.863.681l9.834,14.041A2.771,2.771,0,0,1,1392.241,366.215Z"
                                        transform="translate(-1321.484 -190.751)" fill="var(--color-text)" />
                                    <path id="Trazado_7" data-name="Trazado 7"
                                        d="M1474.325,198.646l-5.462-7.8a30.3,30.3,0,0,0-42.2-7.441,3.03,3.03,0,0,0-.739,4.22l50.886,72.682a3.035,3.035,0,0,0,4.224.744,30.294,30.294,0,0,0,7.44-42.2l-5.212-7.446-8.151,5.71a7.791,7.791,0,0,1-8.937-12.763Z"
                                        transform="translate(-1326.999 -177.925)" fill="var(--color-text)" fill-rule="evenodd" />
                                    <path id="Trazado_8" data-name="Trazado 8"
                                        d="M1452.542,246.983l-24.648-35.2-5.277,3.7,11.968,17.1-19.26-19.486,1.007,6.789-2.264,1.585,11.968,17.1-19.51-19.311,1.331,6.187-2.264,1.584,12.153,17.351-19.519-19.311,1.331,6.187-2.514,1.761,12.144,17.35-19.26-19.487,1.081,6.362-2.763,1.937,12.144,17.35-19.26-19.487,1.081,6.362-2.514,1.761,12.144,17.35-19.26-19.487,1.081,6.362-2.514,1.761,12.144,17.35-19.26-19.487,1.081,6.362-2.264,1.585,12.144,17.35-19.51-19.31,1.081,6.361-2.264,1.585,12.144,17.35-19.519-19.31,1.09,6.362-2.523,1.761,12.153,17.35-19.269-19.487,1.09,6.362-2.523,1.761,12.153,17.35-19.269-19.487,1.081,6.362-2.209,7.545,19.371,27.659,7.163.6,3.771-2.641,5.785,3.444-1.257-6.614,4.02-2.817,5.785,3.444-1.257-6.614,4.02-2.817,5.786,3.444-1.257-6.614,4.02-2.817,5.785,3.444-1.257-6.614,4.03-2.817,5.776,3.444-1.506-6.438,3.771-2.64,6.284,3.092-1.257-6.613,3.771-2.641,6.035,3.268-1.257-6.614,3.771-2.64,6.044,3.268-1.266-6.614,3.771-2.641,6.044,3.269-1.266-6.614,3.521-2.465,6.035,3.268-1.007-6.79,4.029-2.817,5.785,3.444-1.257-6.613Z"
                                        transform="translate(-1319.671 -180.491)" fill="var(--color-text)" />
                                    <path id="Trazado_9" data-name="Trazado 9" d="M1318.93,319.9l9.307-28.023,20.212,28.863Z"
                                        transform="translate(-1318.93 -186.563)" fill="var(--color-text)" />
                                </g>
                                <path id="Trazado_10" data-name="Trazado 10"
                                    d="M29.994,467.215V114h242.14v59.752H101.311v83.6H248.763v59.752H101.311v150.1Zm300.205,0V114H436.933l64.089,240.935L564.387,114H671.363V467.215H605.105V189.176L534.993,467.215H466.327L396.456,189.176V467.215Zm491.507,0V173.756H716.9V114H997.593v59.752H893.022V467.215Z"
                                    transform="translate(-0.025 -10.578)" fill="var(--color-text)" />
                                <path id="Trazado_11" data-name="Trazado 11"
                                    d="M1758.72,468.215V115h150.107q56.616,0,82.153,9.637,25.785,9.4,41.205,33.731t15.416,55.656q0,39.754-23.367,65.775-23.376,25.78-69.87,32.527,23.123,13.492,38.064,29.634,15.175,16.142,40.717,57.342l43.131,68.908h-85.295l-51.554-76.859q-27.476-41.2-37.593-51.8-10.118-10.841-21.442-14.7-11.315-4.1-35.9-4.1h-14.457V468.215Zm71.318-203.831h52.769q51.318,0,64.084-4.336a38.435,38.435,0,0,0,20-14.939q7.215-10.6,7.224-26.5,0-17.829-9.638-28.671-9.4-11.084-26.74-13.975-8.679-1.2-52.05-1.2h-55.653Z"
                                    transform="translate(-194.554 -10.691)" fill="var(--color-text)" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="ubicacion">
                    <div class="left">
                        <a href="http://localhost/scp_fmtor/?controller=usuariosController&action=menu" class="regresar">
                            <i class="material-icons">arrow_back_ios</i>
                        </a>
                    </div>
                    <div class="right">
                        <p>Bitácora</p>
                    </div>
                </div>
            </header>
            <main class="bitacora">
                <div class="options">
                </div>
                <div class="tabla">
                    <div class="table table-bitacora">
                        <div class="cabecera">
                            <p>Usuario</p>
                            <p>Tabla</p>
                            <p>Acción</p>
                            <p>Descripción</p>
                            <p>Fecha</p>
                        </div>
                        <div class="body">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="public/js/origin.js?1.2"></script>
    <script src="public/js/sesion.js"></script>
    <script src="public/js/preloader.js"></script>
    <script src="public/js/bitacora.js?1.2"></script>
    <!-- <script src="public/js/responsive.js"></script> -->
</body>
</html>