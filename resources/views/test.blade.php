@extends('layouts.app')

@section('title', 'Home: Tripzivo')

@section('main')
    <h3>Main</h3>
@endsection

@section('footer')
    <h3>Footer</h3>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 80) {
                $('nav').css({
                    'position': 'sticky',
                    'top': '0',        // Required for sticky to lock in place
                    'z-index': '1000'  // Ensures it stays above other content
                });
            } else {
                $('nav').css({
                    'position': 'relative',
                    'top': 'auto'
                });
            }
        });
    });
</script>    
@endpush