<script type="text/javascript">

@if (count($errors) > 0)
   @foreach ($errors->all() as $error)
      toastr.error("{{ $error }}");
   @endforeach
@endif
</script>
