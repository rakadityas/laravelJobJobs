function startTime() 
		{
			var today = new Date();
			var j = today.getHours();
			var m = today.getMinutes();
			var d = today.getSeconds();
			m = cek60(m);
			d = cek60(d);
			document.getElementById('clock').innerHTML = j + ":" + m + ":" + d;
			var t = setTimeout(startTime, 500);
		}
		function cek60(i) 
		{
			if (i < 10) 
			{
				i = "0" + i
			};
			return i;
		}

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }