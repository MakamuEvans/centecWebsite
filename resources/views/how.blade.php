@extends('app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">How Solar Works</li>
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
                        <h3>How <span class="highlight">Sunlight</span> is Converted to <span class="highlight">Electricity</span></h3>
                    </div>
                    <p>
                        Photovoltaic systems are solar energy supply systems that convert sunlight directly to electricity.
                        The  chief  component  of  a  PV  system  is  the  solar  panel  which  is  formed  by  putting  together
                        several  PV  cells.  Putting  together  several  PV  cells  forms  a  PV  module;  several  modules  form
                        arrays and several arrays form plants. The modular nature of PV cells makes it possible for them
                        to be used for a wide range of power applications ranging from a few milli-watts in wrist watches
                        and scientific calculators to several megawatts in central power stations. Solar cells are usually
                        made of semiconductor materials such as silicon, gallium arsenide, cadmium telluride or copper
                        indium diselenide. <br>
                        Solar  cells  come  in  two  major  forms  based  on  the  nature  of  the  material  used  in  their
                        production.  The  two  main  forms  are  crystalline  solar  cells  and  thin  film  solar  cells.  Crystalline
                        solar cells, so far, have the highest conversion efficiencies when it comes to photovoltaic cells
                        and  the  main  types  are  monocrystalline  and  polycrystalline  cells.  Thin  film  cells,  although  less
                        efficient than crystalline silicon, offer greater promise for large-scale power generation because
                        of ease of mass-production and lower materials cost. The commonest example of thin film cells
                        is the amorphous silicon cell.
                    </p>
                    <img src="{{url('img/pvm.png')}}" alt="" class="img-responsive" />
                    <p>
                        Photovoltaic systems can be grouped into two main groups; namely off-grid systems and hybrid -connected systems. Solar PV is currently the fastest growing power generation technology in the
                        world  with  about  38,584  megawatt  (MW)  capacity  installed  in  the  year  2010.  The  solar  PV
                        industry has also seen tremendous improvement in cell efficiencies for the various technologies
                        available  on  commercial  scale.  This  improvement  in  technology  and  the continuous  growth  of
                        the PV market has led to drastic reduction in the cost of solar PV systems on the global market.
                        Africa  currently  contributes  less  than  1%  of  the  world’s  installed  solar  PV  systems  (installed
                        capacity of 163MW as at the end of 2010), in spite of the huge solar energy potential available to
                        the continent. This is as a result of the lack of policy instruments that help promote renewable
                        energy technologies in general and also the very high initial capital involved in developing solar
                        PV systems. Grid-connected solar PV systems are not that popular in Africa since most solar PV
                        applications  are  employed  in  off-grid  rural  electrification  projects  to  rural  communities  (for
                        lighting, educational and health applications) that are far from the national grid.
                    </p>

                </div>

                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>

            </div>


        </div>
    </section>
@endsection