var u=5;for(var r=1;r<=u;r++){var x=$("#oxygen_cost_"+r),g=$("input[name='oxygen_qty["+r+"]']").eq(0),y=$("#oxygen_total_"+r);(function(e,o,l){e.on("input",function(){var t=parseFloat(this.value)||0,n=parseInt(o.val())||0,a=t*n;a=a.toFixed(2),l.val(a),v()}),o.on("input",function(){var t=parseFloat(e.val())||0,n=parseInt(this.value)||0,a=t*n;a=a.toFixed(2),l.val(a),v()})})(x,g,y)}function v(){for(var e=0,o=1;o<=u;o++){var l=$("#oxygen_total_"+o),t=parseFloat(l.val())||0;e+=t}var n=$("#oxygen_grandTotal");n.val(e.toFixed(2))}