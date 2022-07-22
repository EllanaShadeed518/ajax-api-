











<!DOCTYPE html>
<html>
    <head>
        <title>Weather Using OpenWeatherMap API With PHP</title>
        <style>
            body{
                font-family: "Lucida Console", "Courier New", monospace;
                font-size: 0.8em;
                color:black;
                background-color: #E6E6FA;
            }
            .c{
                border:black 1px solid;
                border-radius:2px;
                padding:10px ;
                width:600px;
                margin:auto;
            }
         
        </style>
    </head>
    <body>
        <div id="weather" class="c">
     </div>
     <script>
     let n = document.getElementById("weather");


let cityid = prompt("enter the city id ");
let myHttp = new XMLHttpRequest();
const url = `http://api.openweathermap.org/data/2.5/forecast?id=${cityid}&lang=en&appid=b3aaf699260ae84eedc6580f158f7e7e`;
myHttp.onreadystatechange = function() {
    if (myHttp.readyState == 4 && myHttp.status == 200) {
      let   data = JSON.parse(myHttp.responseText);
console.log(data.list[0].main.temp);
let r= `<p> TEMP IS:${data.list[0].main.temp}</p>`;
console.log(r);
n.innerHTML = r;


    }
  
}

    myHttp.open("GET", url);
myHttp.send();

     </script>

    </body>
    </html>