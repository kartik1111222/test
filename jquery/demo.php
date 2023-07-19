<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #panel,
        #flip {
            padding: 5px;
            font-size: 18px;
            text-align: center;
            background-color: #555;
            color: white;
            border: solid 1px #666;
            border-radius: 3px;
        }

        #panel {
            padding: 50px;
            display: none;
        }
    </style>
</head>

<body>
    <p>Content</p>
    <button id="hide">Click to Hide</button>
    <button id="show">Click to Show</button>
    <button id="fadein">Click to Fade In</button>
    <button id="fadeout">Click to Fade Out</button>
    <button id="stop">Stop sliding</button>

    <div id="flip">Click to slide down panel</div>
    <div id="panel">Hello world!</div>

    <div id="div3" style="width:80px;height:80px;display:none;background-color:black;"></div><br>

    <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
    <div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(function() {
        //hide & show
        $("#hide").click(function() {
            $('p').hide();
        });

        $('#show').click(function() {
            $('p').show();
        });

        //fade in & fade out
        $('#fadein').click(function() {
            $('#div1').fadeIn(2000);
            $('#div2').fadeIn(5000);

        });

        $('#fadeout').click(function() {
            $('#div1').fadeOut(5000);
            $('#div2').fadeOut();
        });

        //slide & stop
        $("#flip").click(function() {
            $("#panel").slideDown(5000);
        });
        $("#stop").click(function() {
            $("#panel").stop();
        });
    });
</script>