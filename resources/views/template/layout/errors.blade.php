<script>
    $(document).ready(function() {
        // Display success messages
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        // Display error messages
        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        // Display warning messages
        @if (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        // Display info messages
        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif

        // Display validation errors
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    });
</script>
