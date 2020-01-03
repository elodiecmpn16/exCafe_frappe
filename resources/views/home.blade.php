@extends('main')
@section('content')

<div class="main">
    <div class="slider">
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="https://picsum.photos/1000/300" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">First Image</h3>
                        <p>First text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" src="https://picsum.photos/1000/300" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Second Image</h3>
                        <p>Secondary text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" src="https://picsum.photos/1000/300" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Third Image</h3>
                        <p>Third text</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="wrapperCat">
        <div class="categories">
            <div class="category">
                <div class="catIcon">
                    <i class="material-icons">home </i>
                </div>
                <div class="infoCat">
                    <h3 class="titreCat">titre</h3>
                    <p class="textCat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque explicabo quasi perferendis omnis excepturi, officiis quo! Dicta, libero recusandae. Voluptatem ut vitae rem eos, quos reprehenderit illo dolore architecto alias.</p>
                </div>
            </div>
            <div class="category">
                <div class="catIcon">
                    <i class="material-icons">local_drink</i>
                </div>
                <div class="infoCat">
                    <h3 class="titreCat">titre</h3>
                    <p class="textCat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque explicabo quasi perferendis omnis excepturi, officiis quo! Dicta, libero recusandae. Voluptatem ut vitae rem eos, quos reprehenderit illo dolore architecto alias.</p>
                </div>
            </div>

            <div class="category">
                <div class="catIcon">
                    <i class="material-icons">shopping_basket</i>
                </div>
                <div class="infoCat">
                    <h3 class="titreCat">titre</h3>
                    <p class="textCat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque explicabo quasi perferendis omnis excepturi, officiis quo! Dicta, libero recusandae. Voluptatem ut vitae rem eos, quos reprehenderit illo dolore architecto alias.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapperMosaic">
        <div class="mosaic">
            <div class="titreMosaic titreMain">
                <h3>LES INCONTOURNABLES</h3>
            </div>
            <div class="sliderResponsive">
                <img src="https://picsum.photos/60/60" alt="">
            </div>
            <div class="contentMosaic">
                <div class="accessories">
                    <div class="luggage">
                        <div class="imgSac">
                            <img src="https://picsum.photos/60/60" alt="titreCat" class="imgCat">
                        </div>
                        <div class="titreSac">
                            <h3>Sac</h3>
                        </div>
                    </div>
                    <div class="restAccessories">
                        <div class="rA">
                            <div class="imgRa">
                                <img src="https://picsum.photos/60/60" alt="titreCat" class="imgCat">
                            </div>
                            <div class="titreRa">
                                <h3>Polo</h3>
                            </div>
                        </div>
                        <div class="rA">
                            <div class="imgRa">
                                <img src="https://picsum.photos/60/60" alt="titreCat" class="imgCat">
                            </div>
                            <div class="titreRa">
                                <h3>Casquette</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clothing">
                    <div class="imgclothing">
                        <img src="https://picsum.photos/100/170" alt="titreCat" class="imgCat">
                    </div>
                    <div class="titreclothing">
                        <h3>Cloting</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="sideVideo">
            <div class="titreVideo">
                <p>En quelques mots</p>
            </div>
            <div class="brandVideo">
                <h3>Quodao</h3>
            </div>
            <div class="textVideo">
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores nemo ab ad quibusdam qui, ducimus tenetur! Dolorum voluptas voluptatibus cum omnis, incidunt qui asperiores, quos iste dolor aperiam exercitationem deleniti.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates illo vero quis, maxime magni repellat, alias voluptatibus cupiditate aperiam facere id saepe perspiciatis omnis, reprehenderit autem repellendus temporibus iste.</p>
            </div>
            <div class="btnVideo">
                <button class="btn">En savoir plus</button>
            </div>
        </div>
        <div class="mainVideo">
            <iframe width="1363" height="461" src="https://www.youtube.com/embed/arTM0-FGvS0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videoPlay"></iframe>
        </div>
    </div>
    <div class="wrapperActus">
        <div class="actus">
            <div class="presActu">
                <div class="titrePresActu">
                    <h4>L'actualités</h4>
                </div>
                <div class="infoPresActu">
                    <div class="titreMosaic titreMain">
                        <h2>EN DIRECT !</h2>
                    </div>
                    <div class="socialActu">
                        <ul class="socialSetActu">
                            <li class="sociali"><img src="{{asset('img/icon/fb.png')}}" width="30" height="50" class="logo" alt=""></li>
                            <li class="sociali"><img src="{{asset('img/icon/linkedin.png')}}" width="30" height="50" class="logo" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mainActu">
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"> </div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                    </p>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"> </div>
                    <div class="textActu" id="textResponsive">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.</div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"> </div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"></div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"></div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"></div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"></div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"></div>
                    <div class="textActu" id="textResponsive">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat omnis perferendis, blanditiis ratione architecto quod incidunt earum quisquam odio voluptas expedita obcaecati sunt repellat nesciunt sint quam delectus placeat odit.
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection('content')