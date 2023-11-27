@extends('layout.main')

@section('main-section')

<div class="row tm-gallery">
    <!-- gallery page 1 -->
    <div id="tm-gallery-page-pizza" class="tm-gallery-page">
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Fusce dictum finibus</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$45 / $55</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/02.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$65 / $70</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Sed varius turpis</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$30.50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$25.50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$80.25</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Quisque et felis eros</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$20 / $40 / $60</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Sed ultricies dui</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$94</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Donec porta consequat</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$15</p>
                </figcaption>
            </figure>
        </article>
    </div> <!-- gallery page 1 -->
    
    <!-- gallery page 2 -->
    <div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Salad Menu One</h4>
                    <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                    <p class="tm-gallery-price">$25</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Second Title Salad</h4>
                    <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                    <p class="tm-gallery-price">$30</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Third Salad Item</h4>
                    <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                    <p class="tm-gallery-price">$45</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Superior Salad</h4>
                    <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                    <p class="tm-gallery-price">$50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Sed ultricies dui</h4>
                    <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                    <p class="tm-gallery-price">$55 / $60</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                    <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                    <p class="tm-gallery-price">$75</p>
                </figcaption>
            </figure>
        </article>
    </div> <!-- gallery page 2 -->
    
    <!-- gallery page 3 -->
    <div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Noodle One</h4>
                    <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p class="tm-gallery-price">$12.50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Noodle Second</h4>
                    <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p class="tm-gallery-price">$15.50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Third Soft Noodle</h4>
                    <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p class="tm-gallery-price">$20.50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                    <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p class="tm-gallery-price">$30.25</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                    <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p class="tm-gallery-price">$35.50</p>
                </figcaption>
            </figure>
        </article>
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Quisque et felis eros</h4>
                    <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p class="tm-gallery-price">$40.50</p>
                </figcaption>
            </figure>
        </article>

    </div> <!-- gallery page 3 -->
</div>
<div class="tm-section tm-container-inner">
    <div class="row">
        <div class="col-md-6">
            <figure class="tm-description-figure">
                <img src="img/img-01.jpg" alt="Image" class="img-fluid" />
            </figure>
        </div>
        <div class="col-md-6">
            <div class="tm-description-box"> 
                <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
                <p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
                <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
            </div>
        </div>
    </div>
</div>
</main>

@endsection

