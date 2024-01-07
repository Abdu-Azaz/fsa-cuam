<div class="container-fluid py-5"
    style="margin-bottom: 90px; background:linear-gradient(135deg, 
        {{ setting('color1-gradient', '#000')}}, 
        {{ setting('color2-gradient', 'blue') }}  
    )">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">{{ __($pageTitle) }}</h1>
            <i class="far fa-circle text-white px-2"></i>
            {{ $pageBreadcrumb ? Breadcrumbs::render($pageBreadcrumb) : '' }}
        </div>
    </div>
</div>
</div> <!-- end of nav header -->
 