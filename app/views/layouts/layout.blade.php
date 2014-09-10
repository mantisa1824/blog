<!DOCTYPE HTML>
<html>

	@include('layouts/head')

	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">
					
							@yield('content')

						</div>
					</div>

				<!-- Sidebar -->

					@include('layouts/sidebar/sidebar');

			</div>

	</body>
</html>