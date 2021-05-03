@extends('layouts.log')
@section('content')
<script>
    tinymce.init({
      selector: '#mytextarea',
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
    menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
      },
      file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        /*
          Note: In modern browsers input[type="file"] is functional without
          even adding it to the DOM, but that might not be the case in some older
          or quirky browsers like IE, so you might want to add it to the DOM
          just in case, and visually hide it. And do not forget do remove it
          once you do not need it anymore.
        */

        input.onchange = function () {
          var file = this.files[0];

          var reader = new FileReader();
          reader.onload = function () {
            /*
              Note: Now we need to register the blob in TinyMCEs image blob
              registry. In the next release this part hopefully won't be
              necessary, as we are looking to handle it internally.
            */
            var id = 'blobid' + (new Date()).getTime();
            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            /* call the callback and populate the Title field with the file name */
            cb(blobInfo.blobUri(), { title: file.name });
          };
          reader.readAsDataURL(file);
        };

        input.click();
      },
      menubar: 'favs file edit view insert format tools table help',

    });
  </script>
<header class="masthead">
    <br /><br /><br /><br /><br />
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=" text-align:center">
                    <p>
                        <img src="{{ asset('assets/img/Logo-ESF-RVB-1-5.png') }}" alt="logo ESF">
                        <h3> Créer un article</h3>
                    </p>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['article.add'],'enctype'=>'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">

                                <div class="col-md-12">
                                    {!! Form::text('titre', null, ['class' => 'form-control border-primary',
                                            'placeholder' => 'Titre de l\'article', 'required']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">
                                <div class="col-md-12">

                                    {!! Form::text('sousTitre', null, ['class' => 'form-control border-primary',
                                            'placeholder' => 'Sous-Titre', 'required']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-group  {!! $errors->has('qte') ? 'has-error' : '' !!}">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::textarea('contenu', null, ['class' => 'form-control border-primary','id' => 'mytextarea',
                                            'placeholder' =>  'Contenu']) !!}
                                    {!! $errors->first('text', '<small class="help-block">:message</small>')
                                            !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        {!! Form::submit('Créer l\'article', ['class' => 'btn btn-info pull-right']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"> Retour</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
