let counter = 0;

function countingClicks(){
    if(counter<3)
    {
        document.getElementById("counting").innerHTML = ++counter;
    }
}