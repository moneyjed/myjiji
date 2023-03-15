<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="demo">
            <h2>Let AJAX change this text</h2>
            <button type="button" onclick="loadDoc()">Change Content</button>
        </div>
        <p id="para1">This is my paragraph which I will style in a moment</p>
        <script>
            function loadDoc() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function () {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
                xhttp.open("GET", "ajax_info.txt", true);
                xhttp.send();
            }
        </script>
        <h1 title="Here is tooltip for 1st level header">Here is a First-level Header</h1>
        <h2 title="Here is tooltip for my 2nd level header">Here is a Second-level Header</h2>
        <p>Here is a paragraph under the second-level header. I intend to place some content in this paragraph</p>
        <a href="https://www.digitalfortressltd.com" class="myLink">Visit Digital Fortress</a>
        <div>
            <img src="images/Jed_20230202_09_27_26_Pro.jpg" class="myImg" alt="Picture of Jed" title="Here is tooltip for Jed's picture"/>
        </div>
        <p style="color:blue;" title="Here is tooltip for my blue paragraph">This is a blue paragraph.</p>
        <style>
            #para1{
                text-align: center;
                color: red;
            }
            .myImg{
                width:200px;
                height:auto;
            }
        </style>
    </body>
</html>
