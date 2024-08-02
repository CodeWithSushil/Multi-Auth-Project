alert('ffff');
const otp = document.getElementById("otp");
otp.addEventListener("click", ()=>{
  otp.setAttribute("aria-busy", "true");
  alert("hello");
});