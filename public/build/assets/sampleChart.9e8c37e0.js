var l=document.getElementById("admission_canvas");l.height=400;var e={option1:{labels:_labels_daily,datasets:[{data:_data_daily,backgroundColor:["#003D33","#14C9C9","#439889"]}]},option2:{labels:_labels,datasets:[{data:_data,backgroundColor:["#003D33","#14C9C9","#439889"]}]},option3:{labels:_labels_monthly,datasets:[{data:_data_monthly,backgroundColor:["#003D33","#14C9C9","#439889"]}]},option4:{labels:_labels_yearly,datasets:[{data:_data_yearly,backgroundColor:["#003D33","#14C9C9","#439889"]}]}},o={plugins:{legend:{display:!1}},scales:{x:{title:{font:{size:20},color:"black"},ticks:{font:{size:20},color:"black"}},y:{title:{font:{size:20},color:"black"},ticks:{beginAtZero:!0,stepSize:10,font:{size:20},color:"black"}}}},n=new Chart(l,{type:"bar",data:e.option1,options:o});function s(a,t,i){a.data=t,a.options=i,a.update()}$("#date-range");function d(){var a=$("#date-range").val(),t;a==="last-week"?t=e.option2:a==="last-month"?t=e.option3:a==="last-year"?t=e.option4:t=e.option1,s(n,t,o)}$("#date-range").change(d);$("#reset-btn").click(function(){s(n,e.option1,o),$("#date-range").val("yesterday")});
