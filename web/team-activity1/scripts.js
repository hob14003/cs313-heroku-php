
var faded = "false";

function myClick () {    
alert("Clicked");

}


function changeDivColor ()
{
    let div = document.getElementById("div1");
    let color = document.getElementById("inputBox").value;

    div.style.backgroundColor = color;
}

function changeDivColorJquery()
{
    let div = $("#div1");
    
    let color = $("#inputBox").val();
    console.log(color);

    div.css("background-color",color);


}


function visibilityToggle()
{
    if (faded == "false")
    {
    let div = $("#div3");
    div.fadeOut("slow");
    faded = "true";
    }
    else
    {
        let div = $("#div3");
        div.fadeIn("slow");
        faded = "false";
    }

}