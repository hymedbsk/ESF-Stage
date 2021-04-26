@extends('layouts.app')
@section('content')
        <!-- Masthead-->
        <header class="masthead">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/img/baby-84552_1920.jpg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/img/arab.jpg')}}"alt="Second slide">
                  </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>

        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Axes</h2>
                    <h3 class="section-subheading text-muted">{{ Lang::get('texte.axes.texte.présentation')}}</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-exclamation-triangle fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">{{ Lang::get('texte.axes.titre.Prévention')}}</h4>
                        <p class="text-muted">{{ Lang::get('texte.axes.texte.Prévention')}}</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">{{ Lang::get('texte.axes.titre.Rencontre')}}</h4>
                        <p class="text-muted">{{ Lang::get('texte.axes.texte.Rencontre')}}</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-link fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">{{ Lang::get('texte.axes.titre.Réseau')}}</h4>
                        <p class="text-muted">{{ Lang::get('texte.axes.texte.Réseau')}}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Espace Santé Famille</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/exil.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Santé et Exil</div>
                                <div class="portfolio-caption-subheading text-muted">L’ESF propose des prises en charge psychologiques et thérapeutiques avec une orientation systémique et comportementaliste pour les personnes réfugiées, exilées.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/formation.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Formation</div>
                                <div class="portfolio-caption-subheading text-muted">Tout au long de l’année, l’ASBL organise en partenariat avec des professionnels de la santé, des modules de formation à thèmes. Celles-ci constituent le pôle théorique préventif proposé par l’association.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/medifami.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Médiation familiale et systémique</div>
                                <div class="portfolio-caption-subheading text-muted">L’association propose un espace de parole pour les personnes qui traversent des moments de conflits. Le médiateur, la psychologue, la thérapeute familiale travaillent ou non sous mandat du tribunal. </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/groupe.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Groupe de parole</div>
                                <div class="portfolio-caption-subheading text-muted">Différents groupes de paroles sont organisés, encadrés par des psychologues et thérapeutes ayant une orientation systémique.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/erpe.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Espace rencontre parent-enfant</div>
                                <div class="portfolio-caption-subheading text-muted"> Espace rencontre qui propose l’encadrement sous contrainte ou non de visites parentales. C’est un lieu qui permet le maintien de la relation ou la reprise de contact entre un enfant et son parent en dehors de tous conflits. </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/atelier.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Atelier</div>
                                <div class="portfolio-caption-subheading text-muted">Tout au long de l’année, l’ASBL organise en partenariat avec des professionnels de la santé, des ateliers de sensibilisation. Ceux-ci permettent aux participant d’apprendre plus concrètement et de manière plus interactive autour des sujets qui sont proposés.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="social">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Réseaux Sociaux</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEspacesantefamille&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <iframe src="http://www.instagram.com/p/B-gpxgtgAc9/embed" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A propos de nous</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Bienvenue à l&apos;Espace Santé Famille.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">L’Espace Santé Famille est née d’un constat, celui du besoin grandissant d’un lieu d’accompagnement, d’ancrage et de repère pour les familles et en parallèle de l’importance d’amener davantage de cohérence et d’inclusion dans les interventions professionnelles auprès de ces familles. l’ASBL propose plusieurs projets articulés autour de trois axes: Préventif, Rencontre et Réseau.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Pourquoi choisir l&apos;Espace Santé Famille ?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">La spécificité de l’espace santé est d’amener des soins de manière continue, un suivi thérapeutique au sein d’une équipe diversifiée, en offrant un lieu d’ancrage et de référence aux familles en manque de repère, un espace d’écoute, de bien être et de parole pour chacun. En accompagnant le client dans toutes ses démarches psycho-médico-sociales, et lui prodiguant des soins adaptés à sa demande et ses besoins, l’ESF propose un accompagnement de qualité pour tous.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Espace Santé Famille</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Le ROI prévoit en effet, que les soins soient accessibles à tous sans barrière de langue, de culture, de religion. En effet, chaque professionnel est au polyglotte, habitué au public multiculturel. Les us et coutumes de chacun sont respectées. Les langues parlées sont : le français, néerlandais, anglais, espagnol, chinois, arabe classique, marocain, berbère, tunisien, turque, roumain, yougoslave, pachto, peul, perse…Nous travaillons également en étroite collaboration avec le service d’interprétariat social notamment dans la prise en charge des patients du pole « Santé et Exil ».</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Atelier</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Tout au long de l’année, l’ASBL organise en partenariat avec des professionnels de la santé, des ateliers de sensibilisation. Ceux-ci permettent aux participant d’apprendre plus concrètement et de manière plus interactive autour des sujets qui sont proposés.
                                La liste des ateliers avec les dates et horaires est disponible au plus tard à la mi-septembre. Les cours commencent début octobre.
                                Les sujets abordés sont toujours en lien avec la santé et la famille.
                                Ex : l’alimentation, la sexualité, l’estime de soi, la communication non violente, le secourisme etc.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>

                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Notre équipe</h2>
                </div>
                <div class="row">
                    @foreach($psys as $psy)
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src={{url('storage/'.$psy->photo) }} alt="" />
                            <h4>{{ $psy->prenom }} {{ $psy->nom }}</h4>
                            <p class="text-muted">{{ $psy->specialite}}</p>
                        </div>
                    </div>
                    @endforeach
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nous contacter</h2>
                    <h3 class="section-subheading text-warning">
                        <p> Aucune des informations ci-dessus ne sera enregistrées </p>
                        <p> Les champs obligatoires sont notés par un *
                    </h3>
                </div>
                {!! Form::open(['url' => 'contact']) !!}
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name ="nom" id="name" type="text" placeholder="Nom*" required="required" data-validation-required-message="Entrez votre nom." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="prenom" id="prenom" type="text" placeholder="Prénom*" required="required" data-validation-required-message="Entrez votre prénom." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="email"id="email" type="email" placeholder="Adresse Mail*" required="required" data-validation-required-message="Entrez votre mail." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" type="text" name="texte" rows="5" cols="33" id="message" placeholder="Message*" required="required" data-validation-required-message="Entrez votre message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoyer !</button>
                    </div>
                {{ Form::close()  }}
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Santé et Exile</h2>
                                    <p class="item-intro text-muted">L’ESF propose des prises en charge psychologiques et thérapeutiques avec une orientation systémique et comportementaliste pour les personnes réfugiées, exilées.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/exil.jpg" alt="" />
                                    <p> Elle effectue également des évaluations/expertises qui respectent la procédure liée au protocole Istanbul. Les interventions psychologiques sont possibles en différentes langues: le pachtou, le tigrinya, le wolof, le turc, hurdu, punjabe, arabe classique/dialectal, anglais, dari, serbe, roumain, français, espagnol, néerlandais…</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/exil2.jpg" alt="" />
                                    <p>Les permanences ont lieu du lundi au vendredi de 9-17h. L’asbl travaille sous forme de réquisitoire avec la croix-rouge et Fedasil mais aussi OCMW, CPAS, Samu Social etc.

                                    <p>Si nos psychologues ne parlent pas une langue étrangère donnée, l’asbl travaille avec un service d’interprétariat social qui s’engage au respect du secret professionnel.</p>

                                    <a class="btn btn-danger" href="https://book.timify.com/?accountId=5ea1627d759dde6c545d94a8&hideCloseButton=true"target="_blank">Prendre Rendez-vous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Médiation familiale et systémique</h2>
                                    <p class="item-intro text-muted">L’association propose un espace de parole pour les personnes qui traversent des moments de conflits. Le médiateur, la psychologue, la thérapeute familiale travaillent ou non sous mandat du tribunal.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/systemique.jpg" alt="" />
                                    <p> La médiation peut donc intervenir dans le cadre d’une procédure judiciaire tout comme elle peut exister pour soutenir les familles, les couples en difficulté en dehors de toutes procédures.

                                        Les intervenants peuvent sur demande du client faire appel à un représentant religieux (Imam, Rabbin, prêtre…) ou tout autre personne qui aurait une place importante pour le client et sa famille dans la résolution de conflit. Notre approche est majoritairement d’orientation systémique.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/systemique2.jpg" alt="" />
                                    <p class="item-intro text-muted">L’objectif de la médiation est d’apprendre à s’écouter mutuellement, communiquer sainement pour arriver à trouver un accord qui convient à tous.

                                        Toutes les demandes font l’objet préalablement d’une réunion d’équipe. Elles doivent être adressée par mail à info@famillesurmesure.be

                                        Cet espace permet aussi d’envisager la réorientation si nécessaire vers un autre professionnel ou vers un autre type d’intervention (psychothérapie familiale, pédopsychiatrie, spj, saj…)</p>

                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Goupe de parole</h2>
                                    <p class="item-intro text-muted">Différents groupes de paroles sont organisés, encadrés par des psychologues et thérapeutes ayant une orientation systémique.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/groupe-de-parole.jpg" alt="" />
                                    <p> Ces espaces durent deux heures, chaque participant doit s’engager au respect du secret et de la vie privée. Ils sont organisés une fois par semaine par thème :</p>
                                    <ul class="list-inline">
                                        <li>Violence intra-familiale</li>
                                        <li>Addiction</li>
                                        <li>Famille d’une personne psychotique</li>
                                        <li>Victime d’agression physique et/ou sexuelles</li>
                                        <li>Etc...</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Espace rencontre parent-enfant</h2>
                                    <p class="item-intro text-muted">Espace rencontre qui propose l’encadrement sous contrainte ou non de visites parentales. C’est un lieu qui permet le maintien de la relation ou la reprise de contact entre un enfant et son parent en dehors de tous conflits.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/espace.jpg" alt="" />
                                    <p>C’est un lieu qui permet le maintien de la relation ou la reprise de contact entre un enfant et son parent en dehors de tous conflits. Il s’agit parfois d’enfant dont la famille a été éloignée, suite à une décision judiciaire et ou une séparation conflictuelle. L’idée est de soutenir la parentalité, accompagner la famille, permettre à chaque parent de trouver sa place auprès de l’enfant, travailler le lien parent-enfant afin de permettre à l’enfant d’évoluer au travers de relations saines, non conflictuelle.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/espace2.jpg" alt="" />
                                    <p> L’objectif  également est à moyen, long terme de ne plus avoir d’intermédiaire entre l’enfant et ses parents et donc de permettre à ceux-ci au travers du dialogue et de la réflexion de trouver des compromis acceptables pour chacun en plaçant les intérêts de l’enfant de manière prioritaire.

                                        Pour ce faire une équipe de travailleurs sociaux formés à la médiation, la psychologie et l’éducation se relaient pour encadrer ces visites.

                                        Nous proposons également aux parents dont l’ampleur des conflits risquent de mettre à mal l’enfant, un espace de médiation mais également, pour ceux qui le souhaitent, des modules à thèmes d’accompagnement à la parentalité.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Ateliers</h2>
                                    <p class="item-intro text-muted">Tout au long de l’année, l’ASBL organise en partenariat avec des professionnels de la santé, des ateliers de sensibilisation. Ceux-ci permettent aux participant d’apprendre plus concrètement et de manière plus interactive autour des sujets qui sont proposés.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/atelier2.jpg" alt="" />
                                    <p> La liste des ateliers avec les dates et horaires est disponible au plus tard à la mi-septembre. Les cours commencent début octobre.

                                        Les sujets abordés sont toujours en lien avec la santé et la famille :</p>
                                    <ul class="list-inline">
                                        <li>L’alimentation</li>
                                        <li>La sexualité</li>
                                        <li>L’estime de soi</li>
                                        <li>La communication non violente</li>
                                        <li>Le secourisme</li>
                                        <li>Etc</li>
                                    </ul>
                                    <a class="btn btn-primary"  href="{{ url('/atelier') }}" type="button"/> Voir les ateliers </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
