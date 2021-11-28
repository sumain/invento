@include('layout.header')
@include('layout.navi')
<div class="page-wrapper-row full-height">
	<div class="page-wrapper-middle">
		<div class="page-container">
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="container">				
						@yield('content')					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layout.footer')