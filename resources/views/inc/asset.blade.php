@push('css-asset')
<!-- Stylesheets -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="{{ asset('app-assets/css/froala_blocks.css') }}">
<style>
#navigator {
position: sticky;
top: 0;
z-index: 1000;
}

#navigator .navbar-toggler-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

@media (max-width: 720px) {
#navigator {
    border-bottom: 1px solid #ccc;
}
}

#navigator a {
font-size: 14px;
}

#navigator+section {
padding: 250px 0;
}

.pagination{
    justify-content: center!important;
    margin:0 0 50px 0;
}

/* Breadcrumb */
.breadcrumb-right-arrow .breadcrumb-item+.breadcrumb-item::before {   content: "›"; vertical-align:top; font-size:20px;  line-height:25px; color: rgba(179, 161, 156, 1);}
.breadcrumb-right-arrow{background:transparent; border-bottom:2px solid rgb(0, 173, 239); border-radius: 0px; font-size: 13px;line-height:25px;padding: 8px;padding-right: 0;padding-left: 0;}
.breadcrumb-right-arrow a {color: rgb(0, 173, 239);}
.breadcrumb-right-arrow a:hover {color: rgba(42, 100, 150, 1);}
.breadcrumb-right-arrow>.active {color: rgba(153, 153, 153, 1);}
</style>

<!-- font -->
{{-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> --}}
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Kanit&family=Mitr&display=swap" rel="stylesheet">
<link href="//db.onlinewebfonts.com/c/ae32da51cb4715541b6a9f2a5e3939f0?family=EucrosiaUPC" rel="stylesheet" type="text/css"/>
<style>
    * {
        color:  #444444 !important;
    }

    body{
        font-family: 'Mitr', sans-serif;
    }

    .kanit-font{
        font-family: 'Kanit', sans-serif !important;
        font-size: 25px;
    }

    .mitr-font{
        font-family: 'Mitr', sans-serif !important;
    }

    /* @font-face {font-family: "EucrosiaUPC"; src: url("//db.onlinewebfonts.com/t/ae32da51cb4715541b6a9f2a5e3939f0.eot"); src: url("//db.onlinewebfonts.com/t/ae32da51cb4715541b6a9f2a5e3939f0.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/ae32da51cb4715541b6a9f2a5e3939f0.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/ae32da51cb4715541b6a9f2a5e3939f0.woff") format("woff"), url("//db.onlinewebfonts.com/t/ae32da51cb4715541b6a9f2a5e3939f0.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/ae32da51cb4715541b6a9f2a5e3939f0.svg#EucrosiaUPC") format("svg"); }

    .EucrosiaUPC-font, .item-description ul li{
        font-family: 'EucrosiaUPC', sans-serif !important;
        font-size: 25px;
    } */

    .lato-font, .item-description{
        font-family: 'Lato' !important;
    }

    body .btn-dark, body .bg-dark a, body .bg-dark p{
        color:#fff !important;
    }

    body .page-item.active .page-link{
        color:#fff !important;
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endpush







@push('js-asset')
<!--JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

{{-- SweetAlert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endpush