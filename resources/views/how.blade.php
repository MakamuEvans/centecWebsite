@extends('layout')
@section('content')
        <!-- Header -->
    <div class="col-md-10 col-md-offset-1" style="background-color: white">
    <div class="row" style="margin-top: 150px;margin-left: 10px;margin-right: 10px;text-align: center">
        <div class="col-md-8">
            <div class="row" style="text-align: left">
                <ol class="breadcrumb" style="margin-bottom: 0%">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Solar Explained</a></li>
                    <li><a href="#">How Sunlight is converted to Solar</a></li>
                </ol>
            </div>
        <h2 class="text-muted">How SunLight is converted to Electricity</h2>
        <p class="text-muted">
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
        <div class="col-md-6">
            <img src="{{url('img/pvm.png')}}" width="100%" height="auto">
        </div>
        <p class="text-muted">
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
        <div class="col-md-4">
            @include('sidebar')
        </div>
    </div>
    </div>
@endsection