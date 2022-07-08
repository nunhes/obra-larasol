@extends('layout.app')

@section('title', ' | Persoas Index')

@section('content')

    <!-- Content Header (Page header) -->

<!-- TABS CON BOOTSTRAP -->
<div class="container-fluid px-md-5 my-5">
    <!-- TABS -->
    <!-- TABS MENÚ -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item w-auto" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#datosempresa" type="button" role="tab" aria-controls="home" aria-selected="true">Datos Empresa</button>
      </li>
      <li class="nav-item w-auto" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#seguimento" type="button" role="tab" aria-controls="profile" aria-selected="false">Seguimento</button>
      </li>
      <li class="nav-item w-auto" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ofertasdeformacion" type="button" role="tab" aria-controls="contact" aria-selected="false">Ofertas de Formación</button>
      </li>
      <li class="nav-item w-auto" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ofertasdecontratacion" type="button" role="tab" aria-controls="contact" aria-selected="false">Ofertas de Contratación</button>
      </li>
    </ul>

    <!-- CONTIDOS TABS -->
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade py-3 px-4 show active" id="datosempresa" role="tabpanel" aria-labelledby="datosempresa-tab">
        <!-- DATOS EMPRESA -->
        <div class="container">
          <div class="row align-items-start my-3">
            <div class="col p-2 me-lg-4 bd-highlight text-start">
              <p id="id" class="visually-hidden">{{$empresas->id}}</p>
              <p class="flex-md-wrap"><span class="opacity-50">NOME:</span><span class="text-nowrap"> {{ $empresas->nome }}</span></p>
              <p class="flex-md-wrap"><span class="opacity-50">LOCALIDADE:</span> {{ $empresas->localidade }}</p>
              <p class="flex-md-wrap"><span class="opacity-50">POBOACIÓN:</span> {{ $empresas->poboacion }}</p>
            </div>

            <div class="col p-2 me-lg-4 bd-highlight text-start">
              <p class="text-nowrap"><span class="opacity-50">ACTIVIDADE:</span> {{ $empresas->actividade }}</p>
              <p class="flex-md-wrap"><span class="opacity-50">TELÉFONO:</span> <span class="text-nowrap">{{ $empresas->telefono }}</span></p>
              <p class="text-nowrap"><span class="opacity-50">FAX:</span> {{ $empresas->fax }} </p>
            </div>

          </div>

          <hr>
          <!-- PARTE INFERIOR- ACCIÓNS APARTADO  -->
          <div class="row align-items-start my-3">
            <p class="lead text-uppercase opacity-50">Accións</p>
            <div class="col">
              <p class="text-nowrap"><span class="opacity-50">DATA INCORPORACIÓN:</span> {{ $empresas->data_incorporacion }}</p>
              <p class="text-nowrap"><span class="opacity-50">PERSOA DE CONTACTO:</span> {{ $empresas->persoa_contacto }}</p>
              <p class="text-nowrap"><span class="opacity-50">ORIENTADOR:</span> {{ $empresas->orientador }}</p>
            </div>
            <div class="col">
              <p class="text-nowrap"><span class="opacity-50">OFERTAS CONTRATACIÓN:</span> {{ $empresas->ofertas_contratacion }}</p>
              <p class="text-nowrap"><span class="opacity-50">OFERTAS FORMACIÓN:</span> {{ $empresas->ofertas_formacion }}</p>
              <p class="text-nowrap"><span class="opacity-50">NOTAS E CONSIDERACIÓNS:</span> {{ $empresas->notas }}</p>
            </div>
          </div>
          <div class="my-4">
            <div class="col-sm-offset-2 col-sm-10">
              <a href="{{ url('/empresas/index') }}" class="btn btn-primary">VOLVER</a>

            </div>
          </div>
        </div>

      </div>


      <!--SEGUIMENTO -->
      <div class="tab-pane fade py-3 px-4" id="seguimento" role="tabpanel" aria-labelledby="seguimento-tab">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum rem dignissimos aut doloremque, quam molestias excepturi debitis blanditiis vel reiciendis qui quia et amet. Sunt corrupti officia ex est.
        <div class="my-4">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url('/empresas/index') }}" class="btn btn-primary">VOLVER</a>

          </div>
        </div>
      </div>

      <!-- OFERTAS DE FORMACION-->
      <div class="tab-pane fade py-3 px-4" id="ofertasdeformacion" role="tabpanel" aria-labelledby="ofertasdeformacion-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, debitis rerum quod eligendi minima impedit provident magnam distinctio omnis. Ullam ducimus nobis architecto dolorum officiis cupiditate veniam nihil molestiae iusto.
        <div class="my-4">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url('/empresas/index') }}" class="btn btn-primary">VOLVER</a>

          </div>
        </div>
        <!-- OFERTAS DE CONTRATACIÓN-->
      </div>
      <div class="tab-pane fade py-3 px-4" id="ofertasdecontratacion" role="tabpanel" aria-labelledby="ofertasdecontratacion-tab">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit provident accusamus ipsa nostrum molestias earum sunt itaque, quae placeat veritatis nihil dolorem doloribus eaque! Modi delectus et consectetur aliquam magni.
        <div class="my-4">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url('/empresas/index') }}" class="btn btn-primary">VOLVER</a>

          </div>
        </div>
      </div>
    </div>
  </div>



    <!-- Content Footer (Page footer) -->

@stop
