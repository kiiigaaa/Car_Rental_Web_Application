 
    
    var Form1 = document.getElementById("form1");
    var Form2 = document.getElementById("form2");
    var Form3 = document.getElementById("form3");

    var Next1 = document.getElementById("Next1");
    var Next2 = document.getElementById("Next2");
    var Back1 = document.getElementById("Back1");
    var Next3 = document.getElementById("Next3");
    var Back2 = document.getElementById("Back2");

    var progress = document.getElementById("progress");

    Next1.onclick = function(){
        Form1.style.display = "none";
        Form2.style.display = "revert";
        progress.style.width = "240px";
    }
    
    Back1.onclick = function(){
        Form1.style.display = "revert";
        Form2.style.display = "none";
        progress.style.width = "120px";
    }
    Next2.onclick = function(){
        Form2.style.display = "none";
        Form3.style.display = "revert";
        progress.style.width = "360px";
    }
    Back2.onclick = function(){
        Form2.style.display ="revert";
        Form3.style.display ="none";
        progress.style.width = "240px";
    }
