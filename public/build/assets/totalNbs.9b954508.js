var s=3;for(var v=1;v<=s;v++){var u=$("#nbs_cost_"+v),b=$("input[name='nbs_qty["+v+"]']").eq(0),d=$("#nbs_total_"+v);(function(n,t,o){n.on("input",function(){var r=parseFloat(this.value)||0,l=parseInt(t.val())||0,a=r*l;a=a.toFixed(2),o.val(a),e()}),t.on("input",function(){var r=parseFloat(n.val())||0,l=parseInt(this.value)||0,a=r*l;a=a.toFixed(2),o.val(a),e()})})(u,b,d)}function e(){for(var n=0,t=1;t<=s;t++){var o=$("#nbs_total_"+t),r=parseFloat(o.val())||0;n+=r}var l=$("#nbs_grandTotal");l.val(n.toFixed(2))}