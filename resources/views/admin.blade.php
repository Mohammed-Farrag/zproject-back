 @extends('layouts.auth')

 @section('content')
 <div class="container-fluid">
     <div class="row">
         <div class="col-lg-3 col-6">
             <div class="small-box bg-info">
                 <div class="inner">
                     <h3>Galleries</h3>

                     <p>{{ $galleries }}</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-bag"></i>
                 </div>
                 <a href="{{ route('galleries.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <div class="col-lg-3 col-6">
             <div class="small-box bg-danger">
                 <div class="inner">
                     <h3>News</h3>

                     <p>{{ $news }}</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-person-add"></i>
                 </div>
                 <a href="{{ route('news.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Products</h3>

                <p>{{ $products }}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
     </div>
 </div>

 @endsection