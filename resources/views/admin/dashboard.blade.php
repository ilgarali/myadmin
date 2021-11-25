@extends('admin.layouts.master')
@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row" id="app">
            <router-view></router-view>
        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>
                    Crafted with
                    <span class="text-danger"
                        ><i class="bi bi-heart"></i
                    ></span>
                    by <a href="http://ahmadsaugi.com">A. Saugi</a>
                </p>
            </div>
        </div>
    </footer>
</div>
    
@endsection