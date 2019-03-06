const urlParams = new URLSearchParams(window.location.search);
const myParamFirst = urlParams.get('first');
const myParamSecond = urlParams.get('second');
const myParamOperator = urlParams.get('operator'); // problem child




let output = document.getElementById("testing");
let specialOperator = document.getElementById("operator");

output.innerHTML = myParamOperator;


specialOperator.innerHTML = myParamOperator;

// checking what operation we need to do
if (specialOperator.innerHTML == '+')
{
   let result = Number(myParamFirst) + Number(myParamSecond);
   specialOperator.innerHTML = result;
}


// checking what operation we need to do
if (specialOperator.innerHTML == '-')
{
   let result = Number(myParamFirst) - Number(myParamSecond);
   specialOperator.innerHTML = result;
}

if (specialOperator.innerHTML == '/')
{
   let result = Number(myParamFirst) / Number(myParamSecond);
   specialOperator.innerHTML = result;
}


if (specialOperator.innerHTML == '*')
{
   let result = Number(myParamFirst) * Number(myParamSecond);
   specialOperator.innerHTML = result;
}