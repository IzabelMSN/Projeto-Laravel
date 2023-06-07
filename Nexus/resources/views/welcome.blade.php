@extends('layouts.main')

@section('title', 'Nexus')

@section('content')
<div class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="img/index/slider1.jpg" class="swiper-slide_img">
            <div class="swiper-slide_texto">
                <h3 class="swiper-slide_h3">FaleMais</h3>
                <p class="swiper-slide_p">Agora, os usuários podem aproveitar a conveniência e a economia oferecidas pelo planos FaleMais 30, FaleMais 60 e FaleMais 120, 
                    enquanto têm total clareza sobre os custos envolvidos em suas ligações. 
                    Para obter mais informações e acessar a página de cálculo, <a href="/falemais" id="swiper-slide_p-a">clique aqui</a> 
                    para calcular e descobrir como o FaleMais pode beneficiá-los.
                </p>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="img/index/slider2.webp" class="swiper-slide_img">
            <div class="swiper-slide_texto-l b">
                <h3 class="swiper-slide_h3">Lorem Ipsun</h3>
                <p class="swiper-slide_p"> Accusantium nihil autem, omnis ipsa, magnam consectetur aut earum fugiat id tenetur sed at sequi. 
                    Repellendus consequuntur quasi amet iure eaque delectus. Dolor sit amet consectetur adipisicing elit. 
                    Iusto atque et eveniet rerum molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel veritatis nemo suscipit cumque.
                    Inventore tenetur ea omnis expedita accusantium, explicabo, corporis iste aspernatur minus quae ullam, quia impedit quisquam est.</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="/img/index/slider3.avif" class="swiper-slide_img">
            <div class="swiper-slide_texto-l a">
                <h3 class="swiper-slide_h3">Lorem Ipsun</h3>
                <p class="swiper-slide_p"> Accusantium nihil autem, omnis ipsa, magnam consectetur aut earum fugiat id tenetur sed at sequi. 
                    Repellendus consequuntur quasi amet iure eaque delectus. Dolor sit amet consectetur adipisicing elit. 
                    Iusto atque et eveniet rerum molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel veritatis nemo suscipit cumque.
                    Inventore tenetur ea omnis expedita accusantium, explicabo, corporis iste aspernatur minus quae ullam, quia impedit quisquam est.</p>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<section class="novidades">
    <h2 id="novidades-h2">Novidades!</h2>
    <div class="novidades-sep">
        <div class="novidades-noticia">
            <img src="/img/index/noticia1.png" alt="#" class="novidades-noticia_img">
            <div class="novidades-noticia_texto">
                <h3>FaleMais</h3>
                <p>A empresa Nexus lançou o produto FaleMais, oferecendo aos clientes a oportunidade de adquirir um plano que inclui minutos gratuitos e 
                    cobrança apenas pelos minutos excedentes. Com o objetivo de fornecer transparência, a empresa desenvolveu uma página na web onde os 
                    clientes podem calcular o valor das ligações, selecionando os códigos das cidades de origem e destino, a duração da ligação e o 
                    plano FaleMais desejado. Com os planos...</p>
                <a href="/falemais"><button>Saiba mais</button></a>
            </div>
        </div>
        <div class="novidades-noticia">
            <img src="/img/index/noticia2.png" alt="#" class="novidades-noticia_img">
            <div class="novidades-noticia_texto">
                <h3>Lorem Ipsun</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Accusantium nihil autem, omnis ipsa, magnam consectetur aut earum fugiat id tenetur sed at sequi. 
                    Repellendus consequuntur quasi amet iure eaque delectus. Dolor sit amet consectetur adipisicing elit. 
                    Iusto atque et eveniet rerum molestiae...</p>
                <button>Saiba mais</button>
            </div>
        </div>
    </div>
    <div class="novidades-sep">
        <div class="novidades-noticia">
            <img src="/img/index/noticia3.png" alt="#" class="novidades-noticia_img">
            <div class="novidades-noticia_texto">
                <h3>Lorem Ipsun</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Accusantium nihil autem, omnis ipsa, magnam consectetur aut earum fugiat id tenetur sed at sequi. 
                    Repellendus consequuntur quasi amet iure eaque delectus. Dolor sit amet consectetur adipisicing elit. 
                    Iusto atque et eveniet rerum molestiae...</p>
                <button>Saiba mais</button>
            </div>
        </div>
        <div class="novidades-noticia">
            <img src="/img/index/noticia4.png" alt="#" class="novidades-noticia_img">
            <div class="novidades-noticia_texto">
                <h3>Lorem Ipsun</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Accusantium nihil autem, omnis ipsa, magnam consectetur aut earum fugiat id tenetur sed at sequi. 
                    Repellendus consequuntur quasi amet iure eaque delectus. Dolor sit amet consectetur adipisicing elit. 
                    Iusto atque et eveniet rerum molestiae...</p>
                <button>Saiba mais</button>
            </div>
        </div>
    </div>
</section>

@endsection