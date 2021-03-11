<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/utilities/spacing">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <style>
            body {
                background-color: #DCDCDC;
            }
            /* Search bar Style */
            input[type=text] {
                width: 360px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 17px;
                font-size: 10px;
                background-color: white;
                /* background-image: url('searchicon.png'); */
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 9px 20px 10px 20px;
                outline: none;
            }
                input[type=text]:focus {
                    width: 100%;
            }
            /* Charts Style */
            .example {
            text-align: center;
            padding: 4em;
            }

            .pie {
              width: 60px;
              height: 60px;
              border-radius: 50%;
              background: #eee;
              background-image: linear-gradient(to right, transparent 50%, #4CC9D8 0);
              position: relative;
              display: inline-block;
              margin: 10px;
            }

            .pie::before {
              content: '';
              display: block;
              margin-left: 50%;
              height: 100%;
              border-radius: 0 100% 100% 0 / 50%;
              background-color: inherit;
              transform-origin: left;
            }

            .pie::after {
              content: attr(data-value);
              position: absolute;
              width: 70%;
              height: 70%;
              margin: auto;
              border-radius: 50%;
              background-color: #fff;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              text-align: center;
              font: 900 20px/41px Tahoma;
            }
            /* W3-Container Style 2 */
            .w3-container2{
                border-radius: 15px;
                background:white;
                line-height: 5px;
                max-width:10px;
                text-align: center;
                color:black;
                margin: 0 auto;
                padding: 10px 610px;

            }
            /* PLAN B*/
            div {
                  /* background:#09364F; */
                  padding:33px;
                }

                }
                span, p:after {
                  display:inline-block;
                }
                .first-line span {
                  border-radius: 15px;
                  background:#DCDCDC;
                  line-height: 5px;
                  max-width:40px;
                  /* margin-top:1px; */
                  text-align:center;
                  color:white;
                  margin: 3px;
                  padding: 35px 99px;
                }
                .first-line span:nth-child(1) {
                  background:#09364F;
                }
                .first-line span:nth-child(2) {
                  background:#09364F;
                }
                .first-line span:nth-child(3) {
                  background:#09364F;
                }
                .first-line span:last-child {
                  background:#09364F;
                }
                .second-line span {
                  border-radius: 15px;
                  background:white;
                  line-height: 5px;
                  max-width:5px;
                  margin-top:1px;
                  text-align: center;
                  color:black;
                  margin: 0 auto;
                }
                .second-line span:nth-child(1) {
                  background:white;
                  padding: 40px 120px;
                }
                .second-line span:last-child {
                  background:white;
                  padding: 40px 290px;
                }
                /**/
                .third-line span {
                  border-radius: 15px;
                  background:#DCDCDC;
                  line-height: 5px;
                  max-width:40px;
                  /* margin-top:1px; */
                  text-align:center;
                  color:black;
                  margin: 5px;
                }
                .third-line span:nth-child(1) {
                  background:white;
                  padding: 40px 130px;
                }
                .third-line span:last-child {
                  background:white;
                  padding: 40px 290px;
                }
                /**/
                .fourth-line span {
                  border-radius: 15px;
                  background:#DCDCDC;
                  line-height: 5px;
                  max-width:40px;
                  /* margin-top:1px; */
                  text-align:center;
                  color:black;
                  margin: 5px;
                }
                .fourth-line span:nth-child(1) {
                  background:white;
                  padding: 40px 130px;
                }
                .fourth-line span:last-child {
                  background:white;
                  padding: 40px 290px;
                }




        </style>
        <title>Global Shopping Mall</title>
    </head>
    <body>
        <form class="example" action="#" style="margin: 1px;max-width:300px">
            <input type="text" name="search" placeholder="Search..">
        </form>

        <div class="w3-container1">
            <div class="first-line">
                <p>
                    <span>NEW VISIT</span>
                    <span>WEEKLY SALES</span>
                    <span>TOTAL USER</span>
                    <span>TOTAL MERCHANT</span>
                </p>
                </div>
        <!-- <div class="w3-container  w3-text-theme">
            <div class="panel" style="position:left;top:48px;right:24px;">
                <div class="pie" data-value="80"></div> -->
                <br>
        <div class="w3-container2">
            <div class="second">
                <p>GRAPH</p>
            </div>
        </div>

        <div class="w3-container3">
            <div class="second-line">
                <p>
                    <span>TOTAL SELLING PRODUCT</span>
                    <span>TOP MERCHANT</span>
                </p>
            </div>
        </div>
        <div class="w3-container4">
            <div class="third-line">
                <p>
                    <span>PERCENTAGE</span>
                    <span>BAR CHART</span>
                </p>
            </div>
        </div>
        <div class="w3-container5">
            <div class="fourth-line">
                <p>
                    <span>LIST OF LESS STOCK</span>
                    <span>MERCHANT SALE</span>
                </p>
            </div>
        </div>
</div>


    </div>

<script>
    //no JS is required this is just to duplicate the pies
    // For percentage loop
//     var i = 0;
//     while (i < 3) {
//         duplicatePies(i);
//         i++
//     }
//
//     function duplicatePies(i) {
//     	var el =  document.createElement("div");
//     	el.setAttribute('data-value', i);
//       el.className="pie";
//       document.body.appendChild(el);
//     }
// </script>
    </body>
</html>
