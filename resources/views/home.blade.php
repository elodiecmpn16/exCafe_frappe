@extends('main')

@section('content')

<div class="main">
    <div class="slider">
        <img src="https://picsum.photos/1000/200" alt="">
    </div>
    <div class="wrapperCat">
        <div class="categories">
            <div class="category">
                <div>
                    <img src="https://picsum.photos/50/50" alt="titreCat" class="imgCat">
                </div>
                <div class="infoCat">
                    <h3 class="titreCat">titre</h3>
                    <p class="textCat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque explicabo quasi perferendis omnis excepturi, officiis quo! Dicta, libero recusandae. Voluptatem ut vitae rem eos, quos reprehenderit illo dolore architecto alias.</p>
                </div>
            </div>
            <div class="category">
                <div>
                    <img src="https://picsum.photos/30/30" alt="titreCat" class="imgCat">
                </div>
                <div class="infoCat">
                    <h3 class="titreCat">titre</h3>
                    <p class="textCat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque explicabo quasi perferendis omnis excepturi, officiis quo! Dicta, libero recusandae. Voluptatem ut vitae rem eos, quos reprehenderit illo dolore architecto alias.</p>
                </div>
            </div>

            <div class="category">
                <div>
                    <img src="https://picsum.photos/30/30" alt="titreCat" class="imgCat">
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
            <div class="titreMosaic">
                <h2>LES INCONTOURNABLES</h2>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates illo vero quis, maxime magni repellat, alias voluptatibus cupiditate aperiam facere id saepe perspiciatis omnis, reprehenderit autem repellendus temporibus iste.</p>
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
                    <p>L'actualité</p>
                </div>
                <div class="infoPresActu">
                    <h2>EN DIRECT</h2>
                    <div class="socialActu">
                        <ul class="socialSetActu">
                            <li class="sociali"><img src="{{asset('img/icon/fb.png')}}" width="30" height="30" class="logo" alt=""></li>
                            <li class="sociali"><img src="{{asset('img/icon/linkedin.png')}}" width="30" height="30" class="logo" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mainActu">
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"> </div>
                    <div class="textActu">Hello World 1</div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"> </div>
                    <div class="textActu">Hello World 1</div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"> </div>
                    <div class="textActu">Hello World 1</div>
                </div>
                <div class="contentActu">
                    <img src="https://picsum.photos/120/120" alt="actus" class="imgActu">
                    <div class="overlay"></div>
                    <div class="textActu">Hello World 1</div>
                </div>
                
            </div>
        </div>
    </div>
    @endsection('content')