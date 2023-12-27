<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor Aeroporto PMW 1.0</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

    <div class="app">

        <style>
            .rederAlert{
                display: block;
                position: absolute;
                top: 30px;
                right: 30px;
            }
            .alert{
                display: flex;
                background-color: black;
                width: 250px;
                height: 50px;
                color: white;
                border-radius: 5px;
            }
            .IMGalert{
                /* background-color: blue; */
                /* background-color: red; */
                height: 50px;
                justify-content: center;
                align-items: center;
                display: flex;
                margin-left: 15px;
            }
            .IMGalert img{
                height: 30px;
            }
            .msgalert{
                width: 100%;
                /* background-color: violet; */
                display: flex;
                justify-content: center;
                align-items: center;
            }


        </style>
        <div class="rederAlert" id="renderAlert">
            <!-- <div class="alert">
                <div class="IMGalert">
                    <img src="./img/load.gif" alt="">
                </div>
                <div class="msgalert">
                    <p>Trabalhando..</p>
                </div>
            </div> -->
        </div>

        <div class="boxSivs">
            <div class="boxTitle">
                <p style="font-size: 24px; color: white"> Fids </p>
                <p>Informativos de Voo's</p>
            </div>


            <div id="renderSiv" class="renderSiv">
                <div class="SIV" style="background-color:black;">
                    <img src="./img/load.gif" alt="" style="width: 50%; height: 50%; border-radius: 5px;">
                </div>
            </div>
        </div>

        <!-- impressoras -->
        <div class="boxSivs">
            <div class="boxTitle">
                <p style="font-size: 24px; color: white"> Impressoras </p>
                <p>status impressoras CCR</p>
            </div>


            <div id="renderIMP" class="renderSiv">
                <div class="SIV" style="background-color:black;">
                    <img src="./img/load.gif" alt="" style="width: 50%; height: 50%; border-radius: 5px;">
                </div>
            </div>
        </div>


        <!-- switchs -->
        <div class="boxSivs">
            <div class="boxTitle">
                <p style="font-size: 24px; color: white"> Switchs </p>
                <p>Status switchs CCR</p>
            </div>


            <div id="renderSW" class="renderSiv">
                <div class="SIV" style="background-color:black;">
                    <img src="./img/load.gif" alt="" style="width: 50%; height: 50%; border-radius: 5px;">
                </div>
            </div>

        </div>

        <p style="text-align: center; margin-top: 50px; color: white">Desenvolvido por
            < BrunoDEV />
        </p>

        <script src="js/index.js"></script>
</body>

</html>