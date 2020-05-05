<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="description" content="บริษัท ธัญธน อิเล็คทริค จำกัด หรือชื่อเดิม ที.พี. เซ็นเตอร์ เราเป็นผู้ผลิตและจัดจำหน่ายอุปกรณ์ไฟฟ้าที่มีคุณภาพได้มาตราฐานอุตสาหกรรมโดยได้รับการไว้วางใจจากคู่ค้า และช่างไฟฟ้ามากว่า 30 ปี">
        <meta name="keywords" content="บ๊อกลอย บล็อกลอย สวิทช์หรี่ไฟ dimmer ปลั๊กยาง ปลั๊กยางซูโม่ กล่องลอย ดริมเมอร์ reckon">
        <meta name="author" content="ReckonThai">
        @include('inc.asset')
        @stack('css-asset')
        @stack('css')
    </head>
    <body>
        @include('inc.header')
        @include('inc.hilight')
        @yield('content')
        @include('inc.footer')
        @stack('js-asset')
        @stack('js')
        {!! sweetAlert29() !!}
    </body>
</html>