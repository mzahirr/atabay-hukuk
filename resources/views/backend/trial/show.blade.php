@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold font-green uppercase"> Dava detayları </span>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#portlet_tab3" data-toggle="tab" aria-expanded="true"> Dava </a>
                    </li>
                    @if(count($trial->clients)>0)
                        <li class="">
                            <a href="#portlet_tab2" data-toggle="tab" aria-expanded="false"> Avukat </a>
                        </li>
                    @endif
                    @if(count($trial->attorneys)>0)
                        <li class="">
                            <a href="#portlet_tab1" data-toggle="tab" aria-expanded="false"> Müvekkil </a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="portlet-body">
                <div class="tab-content">
                    <div class="tab-pane" id="portlet_tab1">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-comments"></i>Müvekkiller
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th> Kimlik no</th>
                                            <th> Ad</th>
                                            <th> E-posta</th>
                                            <th> Numara</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($trial->clients)>0)
                                            @foreach($trial->clients as $client)
                                                <tr>
                                                    <td>{{$client->identity}}</td>
                                                    <td> {{$client->name}}</td>
                                                    <td> {{$client->email}}</td>
                                                    <td>{{$client->number}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="portlet_tab2">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-comments"></i>Avukatlar
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th> Resim</th>
                                            <th> Ad</th>
                                            <th> E-posta</th>
                                            <th> Numara</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($trial->attorneys)>0)
                                            @foreach($trial->attorneys as $attorney)
                                                <tr>
                                                    <td><img src="{{asset($attorney->image)}}"></td>
                                                    <td> {{$attorney->name}}</td>
                                                    <td> {{$attorney->email}}</td>
                                                    <td>{{$attorney->number}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane active" id="portlet_tab3">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-comments"></i>Dava : {{$trial->subject}}
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th> Numara</th>
                                            <th> Mahkeme</th>
                                            <th> Konu</th>
                                            <th> Açıklama</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> {{$trial->number}}</td>
                                            <td> {{$trial->court}}</td>
                                            <td> {{$trial->subject}}</td>
                                            <td>{{$trial->description}}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush
@push('scripts')
@endpush