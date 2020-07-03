@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="content-top">
            <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
            <div class="slider"><img src="/img/slider.png" alt="Image" class="image-main"></div>
        </div>
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
                </div>
                <div class="content-head__search-block">
                    <div class="search-container">
                        <form class="search-container__form">
                            <input type="text" class="search-container__form__input">
                            <button class="search-container__form__btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="products-columns">
                    <?php /** @var \App\Good $good */ ?>
                    <?php /** @var Illuminate\Pagination\LengthAwarePaginator $good */ ?>
                    @foreach($goods as $good)
                            <div class="products-columns__item">
                                <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">{{$good->name}}</a> @if($is_admin) <a href="#">Удалить</a> @endif </div>
                                <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-{{$good->getImageId()}}.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                                <div class="products-columns__item__description"><span class="products-price">{{$good->price}} руб</span><a href="{{route('buyGood')}}" class="btn btn-blue">Купить</a></div>
                            </div>
                    @endforeach
                </div>
            </div>

            <div class="content-footer__container">
                <ul class="page-nav">
                    {{$goods->links('page_links')}}
                </ul>
            </div>
        </div>
        <div class="content-bottom"></div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
