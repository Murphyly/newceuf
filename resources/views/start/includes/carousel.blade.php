<section class=" carousel container mt-5">

    <div id="Carousel" class="carousel slide ">
        <ol class="carousel-indicators">
            <li data-target="Carousel" data-slide-to="0" class="active"></li>
            <li data-target="Carousel" data-slide-to="1"></li>
            <li data-target="Carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <a href= "{{route('event/show',1)}}">
                    <img src="{{ asset('images/1.png')}}" class="w-100">
                </a>
            </div>
            <div class="item">
                    <a href= "{{route('event/show',2)}}">
                         <img src="{{ asset('images/2.png')}}" class="w-100">
                    </a>
            </div>
            <div class="item">
                    <a href= "{{route('event/show',3)}}">
                        <img src="{{ asset('images/3.jpg')}}" class="w-100">
                    </a>
            </div>
        </div>

        <a class="left carousel-control" href="#Carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#Carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section>