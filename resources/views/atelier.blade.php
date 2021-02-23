@extends('layouts.app')

@section('content')
<header class="masthead">


</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Les ateliers</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('assets/img/portfolio/equitherapie.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Equithérapie</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('assets/img/portfolio/massage.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Massage bébé</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('assets/img/portfolio/devpers.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Développement personnel</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('assets/img/portfolio/decouvenfant.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Á la découverte de mon enfant</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Équithérapie</h2>
                            <p class="item-intro text-muted">Le projet d’Equithérapie propose aux familles précarisées et monoparentales un accompagnement à la parentalité au travers d’ateliers parents-enfants animés par des hippothérapeutes et des psychologues dans un espace retiré de Bruxelles, connecté à la nature et aux chevaux.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/equitherapie2.jpg" alt="" />
                            <p> Nous sommes partis d’un constat qu’il existe de plus en plus de familles isolées, monoparentales avec des revenus ne permettant pas la mise en place d’espaces thérapeutiques, qui permettraient aux parents de réfléchir autour de leurs pratiques éducatives mais aussi, aux besoins et ressentis de leur enfant. La population ciblée pour cet atelier est constituée de familles isolées,  débordées (ex: Burnout…), précarisées, incluant des enfants au profil hyperactif,  avec des troubles du comportement, des retards d’apprentissages, des profils pré-délinquant… Néanmoins, l’activité est ouverte aux autres familles si elles en font la demande.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/equitherapie3.jpg" alt="" />
                            <p>Le travail en passant par le tiers (ici l’animal) permet de réapprendre au travers du corps, du rapport à l’autre, de son rythme à interagir de manière saine et bienveillante. Les séances d’équi-thérapie sont basées sur une approche relationnelle et sensorielle au travers de temps de soins, de « travail au sol », de petites promenades à pieds, avec des poneys, des chevaux ce qui permet de s’adapter aux peurs ou attirances éventuelles. L’objectif visé étant d’une part, le bien-être et le ressourcement de chacun des bénéficiaires et d’autre part, la possibilité de vivre une expérience familiale positive en créant du lien autour d’un objectif commun. Ces séances d’hippothérapie sont alternées par des temps de réflexions et d’introspection avec nos cliniciens autour de jeux de rôles, d’outils thérapeutiques inspirés de la systémique et également d’outils de sensibilisation à la communication non violente.</p>
                            <p> Tarif Membre : </p>
                            <p>Adulte: 35€</p>
                            <p>Enfant: 25€</p>


                            <p>Tarif Non Membre</p>
                            <p>Adulte: 45€</li>
                            <p>Enfant: 35€</p>

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
                            <h2 class="text-uppercase">Massage bébé</h2>
                            <p class="item-intro text-muted">On sait depuis quelques années que le « touché » est un besoin vital, indispensable pour naître à la vie psychique. Il s’agit aussi d’une des premières forme de communication entre le bébé et ses figures d’attachement. Un enfant privé de ce type de contacts pourra développer des difficultés émotionnelles et relationnelles plus tard (somatisation, agressivité, problème de gestion des émotions…).</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/massage2.jpg" alt="" />
                            <p>Quels sont les bénéfices pour l’enfant et son parent ? </p>
                            <p>Ces moments permettront aux parents de se « connecter » davantage avec leur enfant, de mieux connaitre l’expression de ses besoins, d’identifier la manière dont il aime être rassuré, de l’aider à gérer ses émotions, d’expérimenter des sensations positives dans son corps (développe et intègre le schéma corporel).
                                Ces instants de massages autorisent parent et bébé à nouer des liens d’attachement plus fort via notamment la libération de sérotonine, ce qui a un effet anxiolytique et favorise le sommeil, calme bébé. Ceux-ci sont extrêmement valorisant aussi pour les parents qui  réalisent le bien être qu’il procure à son enfant et reprend confiance en ses capacités parentale.
                            </p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/massage.png" alt="" />
                            <p>L’idée par cet instant est de permettre aux parents et leur bébé de se retrouver et surtout d’établir une relation saine et privilégiée!</p>

                            <p>Info et inscription: info@espacesantefamille.be</p>
                            <p> Tarif Membre : </p>
                            <p>4 séances: 80€</p>

                            <p> Tarif Non Membre : </p>
                            <p>4 séances: 100€</p>

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
                            <h2 class="text-uppercase">Développement personnel</h2>
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
                            <h2 class="text-uppercase">A la découverte de mon enfant</h2>
                            <p class="item-intro text-muted">Cet atelier a pour objectif de travailler le lien parent-enfant au travers d’activités tant corporelles, qu’éducatives et ludiques. L’atelier se déroulent en 5 séances les samedis de 15h à 18h. Il s’agit de sensibiliser parent et enfant à leurs besoins respectifs, à l’utilisation de la communication non violente dans leurs échanges.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/espace.jpg" alt="" />
                            <p> Ces ateliers sont animés par des psychologues, éducateurs,  pédagogues et conseillères familiales.
                                Les inscriptions se font au 0489/233514 ou par mail info@espacesantefamille.be</p>
                                <p>Info et inscription: info@espacesantefamille.be</p>
                                <p> Tarif Membre : </p>
                                <p>35€</p>

                                <p> Tarif Non Membre : </p>
                                <p>50€</p>

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

@endsection
