@extends('laravel-enso/core::layouts.app')

@section('pageTitle', __("Contact Persons"))

@section('content')

    <section class="content-header">
        <a class="btn btn-primary" href="/administration/contactPersons/create">
            {{ __("Add Contact Person") }}
        </a>
        @include('laravel-enso/core::partials.breadcrumbs')
    </section>
    <section class="content">
        <div class="row" v-cloak>
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="box-title">
                            {{ __("Edit Contact Person") }}
                        </div>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool btn-sm" data-widget="collapse">
                                <i class="fa fa-minus">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        {!! Form::model($contactPerson, ['method' => 'PATCH', 'url' => '/administration/contactPersons/'.$contactPerson->id]) !!}
                        <div class="row">
                            @include('laravel-enso/contactpersons::form')
                        </div>
                        <center class="margin-bottom">
                            {!! Form::submit(__("Save"), ['class' => 'btn btn-primary ']) !!}
                        </center>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

    <script type="text/javascript">

        let vm = new Vue({
            el: '#app'
        });

    </script>

@endpush