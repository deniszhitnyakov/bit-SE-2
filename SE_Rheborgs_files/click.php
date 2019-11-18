
				var d = new Date();
				d.setTime(d.getTime() + 3600 * 24 * 1000);
				document.cookie = 'uclick=' + encodeURIComponent('ocduci') + '; expires='+d+'; path=/';
				
				var tokens = new Object();
			 tokens.city = "Stockholm";  tokens.t3 = "Johan_Rheborg";  tokens.uclick = "ocduci"; 