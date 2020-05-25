function preimushestva_1(){
	// alert('salam');
	  var pr_1 = document.getElementById('pr_1').value;
	  // alert(pr_1);
	  var pt_1 = document.getElementById('pt_1').value;
	  // alert(pt_1);
	  
            $.ajax({
              type: 'post',
              url: '../admin/update.php',
              data: {
              	pr_1:pr_1,
              	pt_1:pt_1,
              	},
            }).done(function(data) {
        // alert(data);
         location.reload();
            }).fail(function() {
             alert('fail');
            });
            //отмена действия по умолчанию для кнопки submit
                      }


function preimushestva_2(){
	// alert('salam');
	  var pr_2 = document.getElementById('pr_2').value;
	  // alert(pr_1);
	  var pt_2 = document.getElementById('pt_2').value;
	  // alert(pt_1);
	  
            $.ajax({
              type: 'post',
              url: '../admin/update.php',
              data: {
              	pr_2:pr_2,
              	pt_2:pt_2,
              	},
            }).done(function(data) {
        // alert(data);
         location.reload();
            }).fail(function() {
             alert('fail');
            });
            //отмена действия по умолчанию для кнопки submit
                      }


function preimushestva_3(){
	// alert('salam');
	  var pr_3 = document.getElementById('pr_3').value;
	  // alert(pr_1);
	  var pt_3 = document.getElementById('pt_3').value;
	  // alert(pt_1);
	  
            $.ajax({
              type: 'post',
              url: '../admin/update.php',
              data: {
              	pr_3:pr_3,
              	pt_3:pt_3,
              	},
            }).done(function(data) {
        // alert(data);
         location.reload();
            }).fail(function() {
             alert('fail');
            });
            //отмена действия по умолчанию для кнопки submit
                      }

function preimushestva_4(){
	// alert('salam');
	  var pr_4 = document.getElementById('pr_4').value;
	  // alert(pr_1);
	  var pt_4 = document.getElementById('pt_4').value;
	  // alert(pt_1);
	  
            $.ajax({
              type: 'post',
              url: '../admin/update.php',
              data: {
              	pr_4:pr_4,
              	pt_4:pt_4,
              	},
            }).done(function(data) {
        // alert(data);
         location.reload();
            }).fail(function() {
             alert('fail');
            });
            //отмена действия по умолчанию для кнопки submit
                      }





          
         