@section("navbar")
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="/"><i class="icon-dashboard"></i><span>Home</span> </a> </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-group"></i><span>Assistência CRAS</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="/peoplesref">Pessoas referênciadas</a></li>
            <li><a href="#">Famílias</a></li>
            <li><a href="/suacInterface/agendamento.php">Agendar atendimento</a></li>
          </ul>
        </li>

        <li>
          <a href="/suacInterface/reports/">
            <i class="icon-list-alt"></i><span>Relatórios</span>            
          </a>
        </li>

        <li>
          <a href="/suacInterface/help/">
            <i class="icon-facetime-video"></i><span>Ajuda</span>           
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
@show