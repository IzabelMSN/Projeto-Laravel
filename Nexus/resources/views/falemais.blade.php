@extends('layouts.main')

@section('title', 'Nexus - FaleMais')

@section('content')
<div class="noticia-completa">
    <div class="img"></div>
    <h3>FaleMais</h3>
    <p id="noticia-sub">Nova oferta da empresa permite aos clientes calcular valor das ligações com transparência</p>
    <div class="noticia-p">
        <p>A empresa Nexus lançou o produto FaleMais, oferecendo aos clientes a oportunidade de adquirir um plano que inclui minutos gratuitos e 
            cobrança apenas pelos minutos excedentes. Com o objetivo de fornecer transparência, a empresa desenvolveu uma página na web onde os 
            clientes podem calcular o valor das ligações, selecionando os códigos das cidades de origem e destino, a duração da ligação e o 
            plano FaleMais desejado.Com os planos FaleMais 30, FaleMais 60 e FaleMais 120, os clientes têm a flexibilidade de escolher a opção que melhor
            atenda às suas necessidades de comunicação.
        </p>
        <p>Preocupada em oferecer transparência aos seus clientes, a empresa criou uma página na web onde os usuários podem calcular 
            o valor das ligações com base em suas escolhas. Na plataforma, os clientes podem selecionar os códigos das cidades de origem e destino, 
            inserir a duração da ligação em minutos e escolher o plano FaleMais correspondente.
        </p>
        <p>Ao calcular o valor da ligação, o sistema apresentará dois valores distintos: o primeiro valor mostrará o custo da
            ligação utilizando o plano FaleMais escolhido, enquanto o segundo valor exibirá o custo da ligação sem a utilização do plano. 
            Essa ferramenta permite aos clientes fazer uma análise clara e tomar uma decisão informada sobre qual plano é mais vantajoso para eles.
        </p>
        <p>A empresa Nexus reforça seu compromisso em fornecer serviços transparentes e personalizados aos seus clientes. 
            Agora, os usuários podem aproveitar a conveniência e a economia oferecidas pelo FaleMais, enquanto têm total clareza sobre os custos envolvidos
            em suas ligações. Para obter mais informações e acessar a página de cálculo, logo abaixo temos o formulário para calcular e descobrir 
            como o FaleMais pode beneficiá-los.
        </p>
    </div>
</div>

<div class="formulario-sep">
    <form class="formulario" method="post">
        @csrf    
        <div class="form-sep">
            <label for="origem">Origem</label>
            <select name="origem" id="origem">
                <option value="011">011</option>
                <option value="016">016</option>
                <option value="017">017</option>
                <option value="018">018</option>
            </select>
        </div>
    
        <div class="form-sep">
            <label for="destino">Destino</label>
            <select name="destino" id="destino">
                <option value="011">011</option>
                <option value="016">016</option>
                <option value="017">017</option>
                <option value="018">018</option>
            </select>
        </div>

        <div class="form-sep">
            <label class="form-sep dife" for="duracao">Tempo de ligação(minutos)</label>
            <input type="number" name="duracao" id="duracao">
        </div>

        <div class="form-sep_2">
            <legend>Qual plano FaleMais gostaria de assinar?</legend>
            <div class="form-sep">
                <input type="radio" name="planos" id="plano1" value="30">
                <label for="plano1">FaleMais 30 (30 minutos)</label>
            </div>
            <div class="form-sep">
                <input type="radio" name="planos" id="plano2" value="60">
                <label for="plano2">FaleMais 60 (60 minutos)</label>
            </div>
            <div class="form-sep">
                <input type="radio" name="planos" id="plano3" value="120">
                <label for="plano3">FaleMais 120 (120 minutos)</label>
            </div>
        </div>

        <button type="submit">Calcular</button>
    </form>

    <div class="resultado"> 
        <h2>Informações: </h2>
        <div class="result-sep">
            <h3>Origem {{$origem}}</h3>
            <h3>Destino {{$destino}}</h3>
        </div>
        <div class="result-sep">
            <h3>Duração {{$duracao}}</h3>
            <h3>Plano {{$planos}}</h3>
        </div>
        <div class="result-sep">
            @if(isset($resultado["semplano"]))
            <h3>Sem FaleMais R${{$resultado["semplano"]}}</h3>
            @endif
        </div>
        <div class="result-sep">        
            @if(isset($resultado["complano"]))
            <h3>Com FaleMais R${{$resultado["complano"]}}</h3>
            @endif
        </div>
        

        <div class="form-sep_2">
            <legend>Vai assinar o plano FaleMais?</legend>
            <div class="form-sep">
                <input type="radio" name="plano" id="sim" value="30">
                <label for="sim">Sim</label>
            </div>
            <div class="form-sep">
                <input type="radio" name="plano" id="nao" value="30">
                <label for="nao">Não</label>
            </div>
        </div>
        <button type="submit">Confirmar</button>
    </div>
</div>

@endsection