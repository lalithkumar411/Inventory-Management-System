function logoutUser(){
  document.getElementById("logout-usr").addEventListener("click", function(e){
    window.location.href="/project-1(PHP)/HTMLs/login.php";
  })
}

function samePage(){
  document.getElementById("samepage").addEventListener("click", function(e){
    window.location.href="/project-1(PHP)/successs/logic-success.php";
  })
}

function refreshh(){
  window.location.href="/project-1(PHP)/successs/logic-success.php";
}
