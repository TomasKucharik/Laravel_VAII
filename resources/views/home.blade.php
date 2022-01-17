@extends('layouts.app')



@section('content')


    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img
                    src="https://interfaceingame.com/wp-content/uploads/pokken-tournament-dx/pokken-tournament-dx-banner.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img
                    src="data:image/jpeg;base64,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"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="http://pm1.narvii.com/7637/b4ff0c9e0394fa865f31c70928eb3296c8eec237r1-1920-300v2_uhq.jpg"
                     class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="col-12 text-center mt-5">
        <h1 class="text-dark pt-4 fajnyNadpis">Pokemon</h1>
        <div class="border-top border-primary w-25 mx-auto my-3"></div>
        <p class="lead">Story of pokemon</p>

        <div class="container fajnText">
            <p>OWhy do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

            <p>Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model tex</p>

            <p>Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            <p>Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

            <p>Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
            </p>

            <p>Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
            </p>
        </div>
    </div>





@endsection
