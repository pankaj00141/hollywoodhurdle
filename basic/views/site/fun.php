<!-- this script got from www.htmlbestcodes.com-Coded by: Krishna Eydat -->
<html>
<head></head>
<body>
<script>
    var ie=document.all?1:0
    var ns6=document.getElementById&&!document.all?1:0
    var ns4=document.layers?1:0
    var posleft=1
    var idoftrembleobject="trembletext"
    var trembleobject

    function starttremble() {
        if (ie || ns4 || ns6) {
            if (ie) {
                trembleobject=eval("document.all."+idoftrembleobject+".style")
            }
            if (ns6) {
                trembleobject=idoftrembleobject
            }

            dotremble()
        }
    }
    function dotremble() {
        posleft*=-1
        if (ie) {
            trembleobject.posLeft+=posleft
        }
        if (ns6) {
            var newpos=parseInt(document.getElementById(trembleobject).style.left)+posleft
            document.getElementById(trembleobject).style.left=newpos
        }
        var timer=setTimeout("dotremble()",20)
    }
    onload=starttremble
</script>
<div id="tremblebox" style="position:relative">
<span id="trembletext" style="position:absolute;left:10px;top:30px;">
<font size=2 color=black face=Verdana>This is your shaking text</font>!
</span></div>
<br/><br/>
<br/>
<p><a target="_blank" href="http://www.htmlbestcodes.com/"><span style="font-size: 8pt; text-decoration: none">HTML Best Codes</span></a></p>
</body>
</html>