@extends('layouts.template')
@section('title', '')

@section('content')
    <!-- Small Box (Stat card) -->
    <h5 class="mb-2 mt-4">Small Box</h5>
        <div class="row">
        <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>My</h3>
                            <p>Projects</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="projects" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>My</h3>
                        <p>Favorites</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="projects/favorites" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        <!-- /.row -->

@endsection
