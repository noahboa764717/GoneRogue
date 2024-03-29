<!DOCTYPE html>
<html>
<head>
      <style>
                       :root {
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: inset 0 1px 4px 0 rgba(0,0,0,.05);
            }
         
            
            @font-face {
                font-family: Optimistic;
                src: url(./Optimistic_Display_W_Md.woff2);
                font-weight: normal;
            }
            @font-face {
                font-family: Optimistic;
                src: url(./Optimistic_Display_W_Bd.woff2);
                font-weight: bold;
            }

            html,
            body {
                height: 100%;
                width: 100%;
            }

            body,div,h1,h2,h3,h4,h5,h6,a,p,b,em {
                font-family: Optimistic,-apple-system,ui-sans-serif,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
            }

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                padding: 25px;
                margin: 0;
                background: white;
                border-bottom: 1px solid lightgray;
                display: flex;
                justify-content: space-between;
                margin-bottom: 25px;
                z-index: 99999;
                align-items: center;
                gap: 20px;
            }

            .search {
                background: rgb(238, 238, 238);
                display: flex;
                padding: 10px;
                box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
                border-radius: 10px;
                border: 1px solid lightgray;
                align-items: center;
            }
            .search-input {
                background: transparent;
                outline: none;
                color: black;
                box-shadow: none;
                border: 0;
                padding: 5px;
                padding-left: 10px;
            }
            .search-icon {
                padding: 5px;
                border-right: 1px solid lightgray;
                padding-right: 10px;
            }

            .container {
                text-align: center;
                margin-top: 150px;
            }

            .catalog {
                display: grid;
                gap: 10px;
                grid-auto-flow: row;
                grid-template-columns: auto auto auto;
                margin-top: 10px;
            }
            @media (max-width: 768px) {
                .catalog {
                    grid-template-columns: auto auto;
                }
            }
            @media (max-width: 500px) {
                .catalog {
                    grid-template-columns: auto;
                }
                .mobile {
                    display:inline-block!important;
                }
            }
            .catalog div {
                background: white;
                border: 1px solid lightgray;
                border-radius: 25px;
                display: flex;
                flex-direction: column;
                transition: 0.1s;
            }
            /* .catalog div:hover {
                box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.12), 0 9px 25px 0 rgba(0, 0, 0, 0.1);
            }
            .catalog div:active {
                box-shadow: none;
            } */
            .catalog div img {
                width: 100%;
                object-fit: cover;
                border-radius: 25px 25px 0 0;
            }
            .catalog div section {
                text-align: left;
                padding: 25px;

            }
            .catalog div section span {
                color: lightgray;
                display: block;
            }

            @media (max-width: 600px) {
                .navbar {
                    justify-content: center;
                }
            }
            .tray {
                justify-content: space-between;
                display: flex;
            }
            a.unavaliable {
                color: gray;
                cursor: not-allowed;
            }
            .catalog div section tray aside a {
                text-decoration: none;
            }
            
            .mobile {
                display: none;
            }
            .note {
                background: rgb(255, 238, 0);
                border-left: 10px solid yellow;
                color: black!important;
                padding: 10px;
                padding-left: 20px;
                border-radius: 10px;
            }
            * {
                transition: 0.4s;
            }
            
            @media (prefers-color-scheme: dark) {
                body {
                    background: rgb(35,39,47);
                    color: rgb(235, 236, 240);
                }
                .search {
                    background: rgb(52, 58, 70,0.8)!important;
                    border: 0;
                }
                .search input {
                    color: rgb(235, 236, 240);
                }
                .catalog div,
                .navbar {
                    background: rgb(35,39,47);
                }
                footer.text-muted,
                footer.bg-light {
                    background-color: rgb(59, 66, 79);
                    color: rgb(235, 236, 240);
                }
            }

            .right-cont {
                display: flex;
                gap: 20px;
            }
            .b-dark {
                display: flex;
            }
            .b-light {
                display: none;
            }
            @media (prefers-color-scheme: dark) {
                div.b-dark {
                    display: none;
                }
                div.b-light {
                    display: flex;
                }
            }
            .b-dark,
            .b-light {
                justify-content: center;
                align-items: center;
                font-size: 2em;
                cursor: pointer;
                transition: 0;
            }
            svg {
                transition: 0;
            }
        </style>
      </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/049529442a.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="/.config/images/favicon.gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>GoneRogue Games: request</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
      <h1><img src="https://gonerogue.ml/apple-touch-icon.png" style="border-radius: 10px; height: 75px;" alt="GoneRogue Favicon"> Gаmes</h1>
      <h1>Request a game</h1>
      <form action="/action_page.php">
   <div class="u-row">
  <label for="fname">Gone Rogue account name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="account"><br>
            </div>
  <div class="u-row">
  <label for="lname">Game requested:</label><br>
  <input type="text" id="lname" name="lname" placeholder="game"><br><br>
            </div>
              <div class="u-row">
    <label for="lname">Url of game requested:</label><br>
  <input type="text" id="lname" name="lname" placeholder="game url"><br><br>
            </div>
              <div class="u-row">
  <input type="submit" value="Submit">
            </div>
</form> 
</body>
</html>
