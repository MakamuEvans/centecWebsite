@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="">
                        <h3>What we've <span class="highlight">Proudly</span> Accomplished</h3>
                    </div>

                    <div id="grid-container" class="cbp-l-grid-projects">
                        <ul>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/rea-logo.jpg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">Solar Energy in Turkan County</div>
                                <a data-toggle="modal" data-target="#myModal" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>


                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/mariakani.jpg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">Power for Mariakani Institute</div>
                                <a data-toggle="modal" data-target="#mariakani" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>


                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/narok.jpg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">720wp Pumping Unit</div>
                                <a data-toggle="modal" data-target="#narok" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>


                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/katch.jpeg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">5kva BackUp. Kakamega | 2017</div>
                                <a data-toggle="modal" data-target="#kakamega" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </li>

                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/loresho.jpeg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">7.8kwp Lighting. Loresho | 2017</div>
                                <a data-toggle="modal" data-target="#loresho" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/riara.jpg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">3kw Residential Power Backup</div>
                                <a data-toggle="modal" data-target="#residential" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>


                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="" class="img-responsive" alt="Images coming soon" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">600wp residential unit </div>


                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/ksm.jpeg" class="img-responsive" alt="" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">1000kw Water Heating Kisumu<span class="highlight">...in Progress</span></div>
                                <a data-toggle="modal" data-target="#kisumu" class="readmore pull-right" style="cursor: pointer">Read More <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="" class="img-responsive" alt="Images coming soon" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">2.25kwp for race feld academy in mwingi <span class="highlight">...in Progress</span></div>
                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="" class="img-responsive" alt="Images coming soon" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">110kwp system for merica hotel-nakuru <span class="highlight">...in Progress</span></div>
                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="" class="img-responsive" alt="Images coming soon" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">250kwp system for CADG ltd in Mombasa  <span class="highlight">...in Progress</span></div>
                            </li>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="" class="img-responsive" alt="Images coming soon" />
                                    </div>

                                </div>
                                <div class="cbp-l-grid-projects-title">350kwp and 40mw for university of Baraton east africa ltd.  <span class="highlight">...in Progress</span></div>
                            </li>
                        </ul>
                    </div>


                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>



    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Installation of Solar Power in Turkana County</h3>
                </div>
                <div class="modal-body">
                    <div id="modalCarousel" class="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/rea-logo.jpg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/batteries.jpg" alt="Chania">
                            </div>
                        </div>

                        <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <br><br>
                    <p>
                        in partnership with Rural Electrification Authority,<br>
                        We performed the Installation of <span class="highlight">40kwp</span> solar energy  to power 27 schools in Turkana  County, as part of the last mile connectivity programme

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="loresho" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Light commercial unit in Loresho Nairobi</h3>
                </div>
                <div class="modal-body">
                    <div id="modalloresho" class="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/loresho.jpeg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/loresho1.jpeg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/loresho2.jpeg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/loresho3.jpeg" alt="Chania">
                            </div>
                        </div>

                        <a class="carousel-control left" href="#modalloresho" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="carousel-control right" href="#modalloresho" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <br><br>
                    <p>
                        <span class="highlight">7.8kwp</span> light commercial unit in Loresho Nairobi.

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="kakamega" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">5kva BackUp System</h3>
                </div>
                <div class="modal-body">
                    <div id="modalkatch" class="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/katch.jpeg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/katch2.jpeg" alt="Chania">
                            </div>

                        </div>

                        <a class="carousel-control left" href="#modalkatch" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="carousel-control right" href="#modalkatch" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <br><br>
                    <p>
                        <span class="highlight">5kva</span> back up system at Milimani Resort, :kakamega

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="kisumu" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">1000kw Water Heating System</h3>
                </div>
                <div class="modal-body">
                    <div id="modalksm" class="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/ksm.jpeg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/ksm1.jpeg" alt="Chania">
                            </div>
                            <div class="item">
                                <img src="img/ksm2.jpeg" alt="Chania">
                            </div>

                        </div>

                        <a class="carousel-control left" href="#modalksm" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="carousel-control right" href="#modalksm" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <br><br>
                    <p>
                        <span class="highlight">1000kw </span> of water heating at nhc, shauri moyo housing, kisumu

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="narok" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Water Pumping System in Narok</h3>
                </div>
                <div class="modal-body">
                    <div id="pnarok" class="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/narok.jpg" alt="Chania">
                            </div>
                        </div>

                    </div>
                    <br><br>
                    <p>
                        We installed a <span class="highlight">720wp</span> of solar unit for water pumping in narok, for Mr Langat.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="residential" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Residential Power Backup System</h3>
                </div>
                <div class="modal-body">
                    <div id="presidential" class="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/riara.jpg" alt="Chania">
                            </div>
                        </div>

                        <a class="carousel-control left" href="#presidential" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="carousel-control right" href="#presidential" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <br><br>
                    <p>
                        We installed <span class="highlight">3kw</span> of power back up system for residential power back up in Riara , Nairobi for mr David Langat                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="mariakani" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Power for Mariakani Training Institute</h3>
                </div>
                <div class="modal-body">
                    <div id="pmariakani" class="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/mariakani.jpg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="img/mariakani2.jpg" alt="Chania">
                            </div>
                            <div class="item">
                                <img src="img/mariakani3.jpg" alt="Chania">
                            </div>
                            <div class="item">
                                <img src="img/mariakani4.jpg" alt="Chania">
                            </div>
                        </div>

                        <a class="carousel-control left" href="#pmariakani" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="carousel-control right" href="#pmariakani" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <br><br>
                    <p>
                        We Installed <span class="highlight">24kwp</span> PV power System for Mariakani Training Institute.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection