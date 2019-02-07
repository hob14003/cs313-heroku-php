



function updateList(client)
{
    console.log(this);
    console.log(this.value);

   

}


let searchElement = document.getElementById("query");
console.log(searchElement);
searchElement.addEventListener("keyup",updateList());