<?php



if ($_GET['tipuser'] == 0){
    header("Location: ControlerUsuario.php?acao=login&erro=naologado");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Era uma Vez</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Meu style -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/main.css">
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">

    <!-- Custom CSS -->
    <link href="../../assets/css/full-slider.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you View the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://use.fontawesome.com/203fc140a4.js"></script>
    <![endif]-->


</head>
<body>
<!-- Navigation -->



<div class = "fundo">
    <div class="container">

        <div class="row" id="pessoal">
            <div class="col-lg-12 coisinha-legal">
                <br>
                <br>
                <h2 id="pessoalT">Sua Biblioteca:</h2>
                <hr>
            </div>
        </div>
        <!-- GRID LIVROS -->

        <div id="grid-inicial" class="row text-center text-lg-left">

            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial">
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong1">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro1.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLongTitle">As Crônicas de Nárnia</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro1.jpg" alt="">
                                <br>
                                <p id="p_recuo">Viagens ao fim do mundo, criaturas fantásticas e batalhas épicas entre o bem e o mal - o que mais um leitor poderia querer de um livro? O livro que tem tudo isso é 'O leão, a feiticeira e o guarda-roupa', escrito em 1949 por Clive Staples Lewis. MasLewis não parou por aí. Seis outros livros vieram depois e, juntos, ficaram conhecidos como 'As crônicas de Nárnia'. Nos últimos cinqüenta anos, 'As crônicas de Nárnia' transcenderam o gênero da fantasia para se tornar parte do cânone da literaturaclássica. Cada um dos sete livros é uma obra-prima, atraindo o leitor para um mundo em que a magia encontra a realidade, e o resultado é um mundo ficcional que tem fascinado gerações. Esta edição apresenta todas as sete crônicas integralmente, num único volume. Os livros são apresentados de acordo com a ordem de preferência de Lewis, cada capítulo com uma ilustração do artista original, Pauline Baynes. Enganosamente simples e direta, 'As crônicas de Nárnia' continuam cativando os leitores com aventuras, personagens e fatos que falam a pessoas de todas as idades.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial" >
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong2">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro2.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLongTitle">Quem é você, Alasca?</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro2.jpg" alt="">
                                <br>
                                <p id="p_recuo">John Green é um autor que já conquistou milhões de leitores mundo afora com seu estilo literário sincero e acessível. O escritor, que transita naturalmente entre a narrativa masculina e feminina, narra, nesta que é sua primeira obra, em nome de Miles Halter. Miles é um jovem frustrado em vários aspectos de sua vida. Ele vive na Flórida, frequenta a escola e tem como principal passatempo colecionar as últimas palavras de personalidades famosas. Porém boa parte de sua realidade muda quando Miles decide ir para a escola preparatória Culver Creek, onde conhece, entre outros amigos, Alaska Young, uma linda jovem por quem se apaixona. A partir deste momento o protagonista se aventura em várias situações e começa a experimentar um mundo que até então não conhecia, um mundo em que desobedece às regras e se torna um "fora da lei". Quem é você, Alasca? é um livro que mantém a narrativa leve e envolvente durante suas páginas. Um Best-seller apaixonante, leitura obrigatória para quem curte se encantar pelas peripécias de personagens jovens e sonhadores.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial" >
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong3">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro3.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">As vantagens de ser invisível</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro " src="../../img/livros/livro3.jpg" alt="">
                                <br>
                                <p id="p_recuo">Cartas mais íntimas que um diário, estranhamente únicas, hilárias e devastadoras – são apenas através delas que Charlie compartilha todo o seu mundinho com o leitor. Enveredando pelo universo dos primeiros encontros, dramas familiares, novos amigos, sexo, drogas e daquela música perfeita que nos faz sentir infinito, o roteirista Stephen Chbosky lança luz sobre o amadurecimento no ambiente da escola, um local por vezes opressor e sinônimo de ameaça. Uma leitura que deixa visível os problemas e crises próprios da juventude.
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial" >
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong4">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro4.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Como eu era antes de você</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro " src="../../img/livros/livro4.jpg" alt="">
                                <br>
                                <p id="p_recuo">Aos 26 anos, Louisa Clark não tem muitas ambições. Ela mora com os pais, a irmã mãe solteira, o sobrinho pequeno e um avô que precisa de cuidados constantes desde que sofreu um derrame. Sua vidinha ainda inclui o trabalho como garçonete num café de sua pequena cidade - um emprego que não paga muito, mas ajuda com as despesas - e o namoro com Patrick, um triatleta que não parece muito interessado nela. Não que ela se importe.
                                    Quando o café fecha as portas, Lou é obrigada a procurar outro emprego. Sem muitas qualificações, consegue trabalho como cuidadora de um tetraplégico. Will Traynor tem 35 anos, é inteligente, rico e mal-humorado. Preso a uma cadeira de rodas depois de ter sido atropelado por uma moto, o antes ativo e esportivo Will agora desconta toda a sua amargura em quem estiver por perto. Sua vida parece sem sentido e dolorosa demais para ser levada adiante. Obstinado, ele planeja com cuidado uma forma de acabar com esse sofrimento. Só não esperava que Lou aparecesse e se empenhasse tanto para convencê-lo do contrário.
                                    Uma comovente história sobre amor e família, Como eu era antes de você mostra, acima de tudo, a coragem e o esforço necessários para retomar a vida quando tudo parece acabado.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial" >
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong5">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro5.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">A culpa é das estrelas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro5.jpg" alt="">
                                <br>
                                <p id="p_recuo">Hazel foi diagnosticada com câncer aos treze anos e agora, aos dezesseis, sobrevive graças a uma droga revolucionária que detém a metástase em seus pulmões. Ela sabe que sua doença é terminal e passa os dias vendo tevê e lendo Uma aflição imperial, livro cujo autor deixou muitas perguntas sem resposta. Essa era sua rotina até ela conhecer Augustus Waters, um jovem de dezessete anos que perdeu uma perna devido a um osteosarcoma, em um Grupo de Apoio a Crianças com Câncer. Como Hazel, Gus é inteligente, tem senso de humor e gosta de ironizar os clichês do mundo do câncer - a principal arma dos dois para enfrentar a doença que lentamente drena a vida das pessoas. Com a ajuda de uma instituição que se dedica a realizar o último desejo de crianças doentes, eles embarcam para Amsterdã para procurar Peter Van Houten, o autor de Uma aflição imperial, em busca das respostas que desejam.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial">
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong6">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro6.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">O teorema de Katherine</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro " src="../../img/livros/livro6.jpg" alt="">
                                <br>
                                <p id="p_recuo">Após seu mais recente e traumático pé na bunda - o décimo nono de sua ainda jovem vida, todos perpetrados por namoradas de nome Katherine - Colin Singleton resolve cair na estrada. Dirigindo o Rabecão de Satã, com seu caderninho de anotações no bolso e o melhor amigo no carona, o ex-criança prodígio, viciado em anagramas e PhD em levar o fora, descobre sua verdadeira missão: elaborar e comprovar o Teorema Fundamental da Previsibilidade das Katherines, que tornará possível antever, através da linguagem universal da matemática, o desfecho de qualquer relacionamento antes mesmo que as duas pessoas se conheçam.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial">
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong7">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro7.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">A menina que roubava livros</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro " src="../../img/livros/livro7.jpg" alt="">
                                <br>
                                <p id="p_recuo">Ao perceber que a pequena Liesel Meminger, uma ladra de livros, lhe escapa, a Morte afeiçoa-se à menina e rastreia suas pegadas de 1939 a 1943. A mãe comunista, perseguida pelo nazismo, envia Liesel e o irmão para o subúrbio pobre de uma cidade alemã, onde um casal se dispõe a adotá-los por dinheiro. O garoto morre no trajeto e é enterrado por um coveiro que deixa cair um livro na neve. É o primeiro de uma série que a menina vai surrupiar ao longo dos anos. O único vínculo com a família é esta obra, que ela ainda não sabe ler. Assombrada por pesadelos, ela compensa o medo e a solidão das noites com a conivência do pai adotivo, um pintor de parede bonachão que lhe dá lições de leitura. Alfabetizada sob vistas grossas da madrasta, Liesel canaliza urgências para a literatura. Em tempos de livros incendiados, ela os furta, ou os lê na biblioteca do prefeito da cidade. A vida ao redor é a pseudo-realidade criada em torno do culto a Hitler na Segunda Guerra. Ela assiste à eufórica celebração do aniversário do Führer pela vizinhança. Teme a dona da loja da esquina, colaboradora do Terceiro Reich. Faz amizade com um garoto obrigado a integrar a Juventude Hitlerista. E ajuda o pai a esconder no porão um judeu que escreve livros artesanais para contar a sua parte naquela História.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial">
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong8">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro8.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">A última música</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro " src="../../img/livros/livro8.jpg" alt="">
                                <br>
                                <p id="p_recuo">Aos dezessete anos, Verônica Miller, ou simplesmente Ronnie, vê sua vida virada de cabeça para baixo, quando seus pais se divorciaram e seu pai decide ir morar na praia de Wrightsville, na Carolina do Norte. Três anos depois, ela continua magoada e distante dos pais, particularmente do pai. Entretanto, sua mãe decide que seria melhor para os filhos passarem as férias de verão com ele na Carolina do Norte.
                                    O pai de Ronnie, ex-pianista, vive uma vida tranquila na cidade costeira, absorto na criação de uma obra de arte que será a peça central da igreja local. Ressentida e revoltada, Ronnie rejeita toda e qualquer tentativa de aproximação dele e ameaça voltar para Nova York antes do verão acabar. É quando Ronnie conhece Will, o garoto mais popular da cidade, e conforme vai baixando a guarda começa a apaixonar-se profundamente por ele, abrindo-se para uma nova experiência que lhe proporcionará uma imensa felicidade – e dor – jamais sentida.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial">
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong9">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro9.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">O ladrão de raios</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro9.jpg" alt="">
                                <br>
                                <p id="p_recuo">Primeiro volume da saga Percy Jackson e os olimpianos, O ladrão de raios esteve entre os primeiros lugares na lista das séries mais vendidas do The New York Times. O autor conjuga lendas da mitologia grega com aventuras no século XXI. Nelas, os deuses do Olimpo continuam vivos, ainda se apaixonam por mortais e geram filhos metade deuses, metade humanos, como os heróis da Grécia antiga. Marcados pelo destino, eles dificilmente passam da adolescência. Poucos conseguem descobrir sua identidade. O garoto-problema Percy Jackson é um deles. Tem experiências estranhas em que deuses e monstros mitológicos parecem saltar das páginas dos livros direto para a sua vida. Pior que isso: algumas dessas criaturas estão bastante irritadas. Um artefato precioso foi roubado do Monte Olimpo e Percy é o principal suspeito. Para restaurar a paz, ele e seus amigos - jovens heróis modernos - terão de fazer mais do que capturar o verdadeiro ladrão: precisam elucidar uma traição mais ameaçadora que a fúria dos deuses.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial" >
                <a href="#" class="d-block mb-4 h-100"data-toggle="modal" data-target="#exampleModalLong10">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro10.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Animais fantásticos e onde habitam</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro10.jpg" alt="">
                                <br>
                                <p id="p_recuo">Descubra uma nova era de magia com Animais fantásticos e onde habitam – O roteiro original, edição impressa do roteiro do filme Animais fantásticos e onde habitam que a Editora Rocco lança em português como parte do novo programa de publicação do Mundo Bruxo de J.K. Rowling. Inspirado no livro-texto de Hogwarts escrito pelo personagem Newt Scamander, Animais fantásticos e onde habitam – O roteiro original é uma aventura nova e emocionante que apresenta uma variedade de personagens e criaturas mágicas. Sucesso de crítica e público e ganhador do Oscar de Melhor Figurino, Animais fantásticos e onde habitam é o primeiro de uma franquia de cinco filmes e marca a estreia como roteirista para o cinema da autora da adorada série Harry Potter. O livro chega às prateleiras em edição de luxo, com capa dura, sobrecapa em papel couché e miolo em papel off-white.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial" >
                <a href="#" class="d-block mb-4 h-100"data-toggle="modal" data-target="#exampleModalLong11">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro11.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Harry Potter e a pedra filosofal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro11.jpg" alt="">
                                <br>
                                <p id="p_recuo">Conheça Harry, filho de Tiago e Lílian Potter, feiticeiros que foram assassinados por um poderosíssimo bruxo, quando ele ainda era um bebê. Com isso, o menino acaba sendo levado para a casa dos tios que nada tinham a ver com o sobrenatural pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais, o terrível Lorde das Trevas.
                                    O menino de olhos verdes, magricela e desengonçado, tão habituado à rejeição, descobre, também, que é um herói no universo dos magos. Potter fica sabendo que é a única pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa é a causa da marca em forma de raio que ele carrega na testa. Ele não é um garoto qualquer, ele sequer é um feiticeiro qualquer; ele é Harry Potter, símbolo de poder, resistência e um líder natural entre os sobrenaturais.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 grid-inicial">
                <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#exampleModalLong12">
                    <img class="img-fluid img-thumbnail imgLivro" src="../../img/livros/livro12.jpg" alt="">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Eleanor e Park</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body div-scroll">
                                <img class="imgLivro" src="../../img/livros/livro12.jpg" alt="">
                                <br>
                                <p id="p_recuo">Eleanor & Park é engraçado, triste, sarcástico, sincero e, acima de tudo, geek. Os personagens que dão título ao livro são dois jovens vizinhos de dezesseis anos. Park, descendente de coreanos e apaixonado por música e quadrinhos, não chega exatamente a ser popular, mas consegue não ser incomodado pelos colegas de escola. Eleanor, ruiva, sempre vestida com roupas estranhas e “grande” (ela pensa em si própria como gorda), é a filha mais velha de uma problemática família. Os dois se encontram no ônibus escolar todos os dias. Apesar de uma certa relutância no início, começam a conversar, enquanto dividem os quadrinhos de X-Men e Watchmen. E nem a tiração de sarro dos amigos e a desaprovação da família impede que Eleanor e Park se apaixonem, ao som de The Cure e Smiths. Esta é uma história sobre o primeiro amor, sobre como ele é invariavelmente intenso e quase sempre fadado a quebrar corações. Um amor que faz você se sentir desesperado e esperançoso ao mesmo tempo.</p>
                                <div class="row">
                                    <div class="estrelas">
                                        <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <span id="count"></span>
                                        </div>
                                    </div>
                                    <div class="container-fluid well span8">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form accept-charset="UTF-8" action="" method="POST">
                                                    <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <h6 class="pull-right" id="counter">140 characters remaining</h6>
                                                    <div class="row"><button class="btn btn-info" type="submit">Comentar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <br><br>

    <!--FINAL DO GRID-->

    <footer>
        <div class="row rodape">
            <div class="col-lg-12">
                <p>Copyright &copy; Era Uma Vez 2017</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>
</div>
<br><br>


    <!-- /.container -->

        <!-- jQuery -->
        <script src="../../../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../../assets/js/bootstrap.min.js"></script>

        <!-- JS CAROUSEL-->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
    <script src="../../../assets/js/perfil.js"></script>


</body>
</html>