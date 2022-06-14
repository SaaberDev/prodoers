@extends('guest.layouts.app')
@section('title', 'category_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')

    <section class="all__categories-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single__category-card">
                        <div class="category__image">
                            <img src="{{ asset('_default/no-preview-available.svg') }}" alt="No preview available">
                        </div>
                        <div class="category__content">
                            <h2 class="category__title">
                                <a href="#">Web design with WordPress</a>
                            </h2>
                            <p class="category__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h4 class="category__price">Starts at $0.51</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single__category-card">
                        <div class="category__image">
                            <img src="{{ asset('_default/no-preview-available.svg') }}" alt="No preview available">
                        </div>
                        <div class="category__content">
                            <h2 class="category__title">
                                <a href="#">Web design with WordPress</a>
                            </h2>
                            <p class="category__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h4 class="category__price">Starts at $0.51</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single__category-card">
                        <div class="category__image">
                            <img src="{{ asset('_default/no-preview-available.svg') }}" alt="No preview available">
                        </div>
                        <div class="category__content">
                            <h2 class="category__title">
                                <a href="#">Web design with WordPress</a>
                            </h2>
                            <p class="category__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h4 class="category__price">Starts at $0.51</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single__category-card">
                        <div class="category__image">
                            <img src="{{ asset('_default/no-preview-available.svg') }}" alt="No preview available">
                        </div>
                        <div class="category__content">
                            <h2 class="category__title">
                                <a href="#">Web design with WordPress</a>
                            </h2>
                            <p class="category__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h4 class="category__price">Starts at $0.51</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single__category-card">
                        <div class="category__image">
                            <img src="{{ asset('_default/no-preview-available.svg') }}" alt="No preview available">
                        </div>
                        <div class="category__content">
                            <h2 class="category__title">
                                <a href="#">Web design with WordPress</a>
                            </h2>
                            <p class="category__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h4 class="category__price">Starts at $0.51</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single__category-card">
                        <div class="category__image">
                            <img src="{{ asset('_default/no-preview-available.svg') }}" alt="No preview available">
                        </div>
                        <div class="category__content">
                            <h2 class="category__title">
                                <a href="#">Web design with WordPress</a>
                            </h2>
                            <p class="category__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h4 class="category__price">Starts at $0.51</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row categories__pagination justify-content-center d-none d-md-block">
                <div class="col-md-12">
                    <nav class="pagination__nav">
                        <ul class="pagination__item-wrapper">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <img src="{{ asset('_assets/_client/images/lt.svg') }}" alt="dashboard" class="img-fluid">
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <img src="{{ asset('_assets/_client/images/gt.svg') }}" alt="dashboard" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row d-md-none">
                <div class="col-lg-12">
                    <div class="load__more-btn-wrapper">
                        <button class="load__more-btn">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
