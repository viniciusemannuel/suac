 @extends('master')

@section('header')

@parent

@stop

@section('top')

@parent

@stop

@section('navbar')

@parent

@stop

@section('content')

 <!-- Mapa de navegação do site -->
  <div class="main">
    <div class="main-inner">
      <div class="container">

       <div class="row">
        <div class="span12">


         <ol class="breadcrumb">
          <li><i class="icon-dashboard"></i> Home</li>
        </ol>


      </div>
    </div>

    <br>



    <div class="row">
      <div class="span5">
        <div class="widget widget-nopad">
          <div class="widget-header"> <i class="icon-bar-chart"></i>
            <h3> Status do sistema</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content">
            <div class="widget big-stats-container">
              <div class="widget-content">
                <h6 class="bigstats">Dados importantes da ultilização do sistema, para mais
                 informações acesse as seções.</h6>
                 <div id="big_stats" class="cf">
                  <div class="stat">
                   <i class="icon-user"></i>
                   <span class="value">7</span>
                   <br>
                   Pessoas refenciadas cadastradas
                 </div>
                 <!-- .stat -->


                 <div class="stat"> 
                   <i class="icon-group"></i> <span class="value">0</span>
                   <br>
                   Famílias cadastradas 
                 </div>
                 <!-- .stat -->

                 <div class="stat"> 
                   <i class="icon-tasks"></i> 
                   <span class="value">4</span>
                   <br>
                   Atendimentos agendados 
                 </div>
                 <!-- .stat --> 
               </div>
             </div>
             <!-- /widget-content --> 

           </div>
         </div>
       </div>
       <!-- /widget --> 
     </div>
     <!-- /span6 -->
     <div class="span7">
      <!-- /widget -->
      <div class="widget widget-table action-table">
        <div class="widget-header"> <i class="icon-tasks"></i>
          <h3>Atendimentos agendados</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th> Pessoa referenciada </th>
                <th> Tipo de atendimento</th>
                <th> Data</th>
                <th class="td-actions"> </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Raimundo Ananias </td>
                <td> Atualização de cadastro </td>
                <td>11/09/2014</td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
              </tr>
              <tr>
                <td> Francisca Maria Gomes </td>
                <td> Adesão a beneficio </td>
                <td>11/09/2014</td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
              </tr>
              <tr>
                <td> José Silva Marciel </td>
                <td> Atualização de cadastro </td>
                <td>12/09/2014</td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
              </tr>
              <tr>
                <td> Francisca Gonçalves </td>
                <td> Atualização de cadastro </td>
                <td>13/09/2014</td>
                <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
              </tr>                
            </tbody>
          </table>
        </div>
        <!-- /widget-content --> 
      </div>
      <!-- /widget --> 

    </div>
    <!-- /span6 --> 
  </div>

@stop

@section('rodape')

@parent

@stop