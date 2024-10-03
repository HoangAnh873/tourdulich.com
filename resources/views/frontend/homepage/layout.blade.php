<!DOCTYPE html>
<html lang="en">
    @include('frontend.component.head')
    <body>
        @include('frontend.component.header')
        @include('frontend.component.slider')

        @yield('content')

        @include('frontend.component.booking')
        @include('frontend.component.blog')
        @include('frontend.component.footer')
        @include('frontend.component.script')
    </body>
</html>