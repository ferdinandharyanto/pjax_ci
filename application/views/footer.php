<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.4.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/Chart.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.pjax.js')?>"></script>
<script>
 var direction = "right";
   $(document).ready(function(){
	$(document).pjax('a', '#main');
	 $(document).on('pjax:start', function() {
	  $(this).addClass('loading')
	});
	 $(document).on('pjax:end', function() {
	  $(this).removeClass('loading')
	});
   });
</script>
<script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
</body>
</html>
</body>
</html>