let t=document.getElementById("clock");setInterval(()=>{let e=new Date;t.innerHTML=e.toLocaleTimeString()},1e3);let n=document.getElementById("date_today");setInterval(()=>{let e=new Date;n.innerHTML=e.toLocaleDateString()});