<?php include "app.head.php"; ?>
<?php include "app.header.php"; ?>

<body>

	<!-- < GRID -->
	<link rel="stylesheet" type="text/css" href="lib/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="lib/grid/person.css">
	<!-- > GRID -->

	<link rel="stylesheet" href="lib/jquery/themes/base/jquery.ui.all.css">

	<!--------------Content--------------->
	<section id="content">
		<div class="wrap-content zerogrid">
			<div id="tabs">
				<ul>
					<li><a href="mod.gphone.book.php">Gu&iacute;a Telef&oacute;nica</a></li>
					<li><a href="mod.gphone.user.php">Gu&iacute;a Telef&oacute;nica organizada por Usuarios</a></li>
				</ul>
			</div>
		</div>
	</section>
<!--------------Footer--------------->
<?php include "app.footer.php"; ?>

	<script src="lib/jquery/jquery-1.9.1.js"></script>
	<script src="lib/jquery/ui/jquery.ui.core.js"></script>
	<script src="lib/jquery/ui/jquery.ui.widget.js"></script>
	<script src="lib/jquery/ui/jquery.ui.tabs.js"></script>

	<script>
		$(function() {
			$( "#tabs" ).tabs({
				beforeLoad: function( event, ui ) {
					ui.jqXHR.error(function() {
						ui.panel.html(
								"Couldn't load this tab. We'll try to fix this as soon as possible. " +
								"If this wouldn't be a demo." );
					});
				}
			});
		});
	</script>
		
	<script> $( "#gphone" ).addClass( "current" ); 	</script>

</body>
</html>