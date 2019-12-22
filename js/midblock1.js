i=-8;
loadGoods();
opts = ["opt1","opt2","opt3","opt4"]

async function loadGoods() {
  let goods = await fetch('loadgoods.php').then(function (res) {
    return res.json()
  }).then(function (res) {
    if (res.message) alert(res.message);
    else  return res;
  })
  if(i==32){
    document.location.href = "index";
  }
  i+=10;
  ans = goods[i]['ans'];
  let out = '';



  out+= '<div class="prekol">'
  out+= '<h2>' + goods[i]['ques']+'</h2>';
  out+= '<a id="opt1" onclick="check1(ans)">' + goods[i]['opt1']+'</a>';
  out+= '<a id="opt2" onclick="check2(ans)">' + goods[i]['opt2']+'</a>';
  out+= '<a id="opt3" onclick="check3(ans)">' + goods[i]['opt3']+'</a>';
  out+= '<a id="opt4" onclick="check4(ans)">' + goods[i]['opt4']+'</a>';
  out+= '</div>';
  out+= '<a id="next" onclick="loadGoods()">NEXT</a>';



  let index = document.getElementById('releases__box');
  index.innerHTML = out;
}
function check1(x){
  if(x=="opt1"){
    document.getElementById('opt1').setAttribute("style","background-color: green; border-radius: 15px");
    document.getElementById('opt2').setAttribute("style","display: none");
    document.getElementById('opt3').setAttribute("style","display: none");
    document.getElementById('opt4').setAttribute("style","display: none");
    document.getElementById('next').setAttribute("style","display: flex; background-color: green;");
  }
  else{
    for(let g=0;g<4;g++){
      if(opts[g]==x)
        document.getElementById(x).setAttribute("style","background-color: green; border-radius: 15px");
      else{
        document.getElementById(opts[g]).setAttribute("style","display: none");
      }
    }
    document.getElementById('next').setAttribute("style","display: flex; background-color: red;");
  }
}

function check2(x){
  if(x=="opt2"){
    document.getElementById('opt2').setAttribute("style","background-color: green; border-radius: 15px");
    document.getElementById('opt1').setAttribute("style","display: none");
    document.getElementById('opt3').setAttribute("style","display: none");
    document.getElementById('opt4').setAttribute("style","display: none");
    document.getElementById('next').setAttribute("style","display: flex; background-color: green;");
  }
  else{
    for(let g=0;g<4;g++){
      if(opts[g]==x)
        document.getElementById(x).setAttribute("style","background-color: green; border-radius: 15px");
      else{
        document.getElementById(opts[g]).setAttribute("style","display: none");
      }
    }
    document.getElementById('next').setAttribute("style","display: flex; background-color: red");
  }
}

function check3(x){
  if(x=="opt3"){
    document.getElementById('opt3').setAttribute("style","background-color: green; border-radius: 15px");
    document.getElementById('opt1').setAttribute("style","display: none");
    document.getElementById('opt2').setAttribute("style","display: none");
    document.getElementById('opt4').setAttribute("style","display: none");
    document.getElementById('next').setAttribute("style","display: flex; background-color: green;");
  }
  else{
    for(let g=0;g<4;g++){
      if(opts[g]==x)
        document.getElementById(x).setAttribute("style","background-color: green; border-radius: 15px");
      else{
        document.getElementById(opts[g]).setAttribute("style","display: none");
      }
    }
    document.getElementById('next').setAttribute("style","display: flex; background-color: red;");
  }

}


function check4(x){
  if(x=="opt4"){
    document.getElementById('opt4').setAttribute("style","background-color: green; border-radius: 15px");
    document.getElementById('opt1').setAttribute("style","display: none");
    document.getElementById('opt2').setAttribute("style","display: none");
    document.getElementById('opt3').setAttribute("style","display: none");
    document.getElementById('next').setAttribute("style","display: flex; background-color: green;");
  }
  else{
    for(let g=0;g<4;g++){
      if(opts[g]==x)
        document.getElementById(x).setAttribute("style","background-color: green; border-radius: 15px");
      else{
        document.getElementById(opts[g]).setAttribute("style","display: none");
      }
    }
    document.getElementById('next').setAttribute("style","display: flex; background-color: red;");
  }

}
