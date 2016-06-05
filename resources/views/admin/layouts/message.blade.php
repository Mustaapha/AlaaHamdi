
@if(Session::has('flash_message'))



<script type="text/javascript">
	
	swal({   title: "{{Session()->get('flash_message')}} ",   text: "I will close in 2 seconds.",   timer: 2000,   showConfirmButton: false });
</script>

@endif

